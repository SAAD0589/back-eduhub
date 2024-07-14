<?php

namespace App\Http\Controllers;

use App\Models\FormationDistance;
use Illuminate\Http\Request;

class FormationDistanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getFormationDistancesWithSessions()
    {
        $formationDistancesWithSessions = FormationDistance::with('sessionFormation')->get();
        return response()->json($formationDistancesWithSessions);
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
    public function show(FormationDistance $formationDistance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormationDistance $formationDistance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormationDistance $formationDistance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormationDistance $formationDistance)
    {
        //
    }
}
