<?php

namespace App\Http\Controllers;

use App\Models\Participer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticiperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AddParticiper($id)
    {
        $user = Auth::user(); // Retrieve the authenticated user
        return Participer::create([
            'idetudiant'=>$user->id,
            'idFormation'=>$id,
        ]);
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
    public function show(Participer $participer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participer $participer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Participer $participer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participer $participer)
    {
        //
    }
}
