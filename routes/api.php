<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AuthController;
use App\Http\Controllers\FormationDistanceController;
use App\Http\Controllers\FormationPresentielController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('logout', [AuthController::class, 'logout']);

});
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Affichage FormationDistance
Route::get('AffichageFormationDistance', [FormationDistanceController::class, 'affichageFormationDistance']);
// Affichage formation Presentiels
Route::get('AffichageFormationPresentiel', [FormationPresentielController::class, 'affichageFormationPresentiel']);
