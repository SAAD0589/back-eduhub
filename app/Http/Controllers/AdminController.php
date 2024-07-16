<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universite;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function ChoisirUniversite($selectuniversite)
    {
        $user = Auth::user(); // Retrieve the authenticated user

        // Example: Assign university to the authenticated user
        $universite = Universite::find($selectuniversite);
        if ($universite) {
            $universite->id_admin = $user->id;
            $universite->save();

            return response()->json(['message' => 'University chosen successfully'], 200);
        }

        return response()->json(['error' => 'University not found'], 404);
    }
}
