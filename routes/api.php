<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AuthController;
use App\Http\Controllers\FormationDistanceController;
use App\Http\Controllers\FormationPresentielController;
use App\Http\Controllers\EtudiantsController;
use App\Http\Controllers\UniversiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ParticiperController;
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
    // Choisir Universite
    Route::post('ChoisirUniversite/{selectuniversite}', [AdminController::class, 'ChoisirUniversite']);
    Route::get('usersWithoutUniversite', [UniversiteController::class, 'usersWithoutUniversite']);
    Route::get('usersCompleteInfo', [EtudiantsController::class, 'usersCompleteInfo']);
    Route::post('addNewDataInUser', [EtudiantsController::class, 'addNewDataInUser']);
    Route::post('/AddParticiper/{id}', [ParticiperController::class, 'AddParticiper']);

});
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Affichage FormationDistance
Route::get('getFormationDistancesWithSessions', [FormationDistanceController::class, 'getFormationDistancesWithSessions']);
// Affichage formation Presentiels
Route::get('getFormationsPresentielWithSessions', [FormationPresentielController::class, 'getFormationsPresentielWithSessions']);


// Affichage Les Etudiants
Route::get('getEtudiants', [EtudiantsController::class, 'getEtudiants']);


// Affichage Les Universites
Route::get('getUniversites', [UniversiteController::class, 'getUniversites']);



