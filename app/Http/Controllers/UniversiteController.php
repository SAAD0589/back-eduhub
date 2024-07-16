<?php

namespace App\Http\Controllers;

use App\Models\Universite;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UniversiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getUniversites()
    {
        $universites=Universite::all();
        return $universites;
    }
    public function usersWithoutUniversite()
    {
        $userId=Auth::user();
        // Fetch users with role = 1 who do not have a corresponding entry in universites table
        $usersWithoutUniversite = User::where('role', '1')
            ->leftJoin('universites', 'users.id', '=', 'universites.id_admin')
            ->where('users.id', '=', $userId->id)
            ->whereNull('universites.id_admin')
            ->select('users.id','users.nom')
            ->get();

        // Return the result, you can modify this to return a view or JSON as needed
        return response()->json($usersWithoutUniversite);
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Universite $universite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Universite $universite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Universite $universite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Universite $universite)
    {
        //
    }
}
