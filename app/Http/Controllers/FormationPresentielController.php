<?php

namespace App\Http\Controllers;

use App\Models\FormationPresentiel;
use Illuminate\Http\Request;

class FormationPresentielController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function affichageFormationPresentiel(){
        $formationPresentiels=FormationPresentiel::all();
        return $formationPresentiels;
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
    public function show(FormationPresentiel $formationPresentiel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormationPresentiel $formationPresentiel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormationPresentiel $formationPresentiel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormationPresentiel $formationPresentiel)
    {
        //
    }
}
