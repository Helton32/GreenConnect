<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RendezVousController;

//Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
 //   return $request->user();
//});

// Route API pour gérer les rendez-vous

    // Récupérer tous les rendez-vous
    Route::get('/greenco', [RendezVousController::class, 'index']);
    
    // Récupérer un rendez-vous spécifique
    Route::get('/greenco/{id}', [RendezVousController::class, 'show']);
    
    // Supprimer un rendez-vous
    Route::delete('/greenco/{id}', [RendezVousController::class, 'destroy']);
    
    // Ajouter un rendez-vous
    Route::post('/greenco', [RendezVousController::class, 'store']);
    
    // Mettre à jour un rendez-vous
    Route::patch('/greenco/{id}', [RendezVousController::class, 'update']);
;
