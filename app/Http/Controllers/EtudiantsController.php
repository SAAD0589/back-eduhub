<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class EtudiantsController extends Controller
{
    public function getEtudiants()
    {
        $etudiants = User::where('role', '0')->get();
        return response()->json($etudiants); // Return as JSON response
    }
    
    public function usersCompleteInfo()
    {
        $userId=Auth::user();
        // Fetch users with role = 1 who do not have a corresponding entry in universites table
        $user = User::where('role', '0')
                ->where('id', $userId->id)
                ->whereNull('niveauAcademique')
                ->whereNull('filiereAcademique')
                ->select('nom', 'niveauAcademique', 'filiereAcademique')
                ->get();
        // dd($user);
        // Return the result, you can modify this to return a view or JSON as needed
        return response()->json($user);
    }
    public function addNewDataInUser(Request $request)
    {
        $user = Auth::user(); // Retrieve the authenticated user
        // Find the authenticated user
        $checkUser = User::find($user->id);
        if ($checkUser) {
            // Update user attributes with the new data
            $checkUser->Adresse = $request->input('Adresse');
            $checkUser->NumTelephone = $request->input('NumTelephone');
            $checkUser->niveauAcademique = $request->input('niveauAcademique');
            $checkUser->filiereAcademique = $request->input('filiereAcademique');
            $checkUser->Genre = $request->input('Genre');
    
            // Save the updated user
            $checkUser->save();
    
            return response()->json(['message' => 'User data updated successfully'], 200);
        }    

        return response()->json(['error' => 'Info not found'], 404);
    }
    
}
