<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

Route::get('/', [PersonaController::class, 'persona']);
Route::post('/persona/{id}/actualizar', [PersonaController::class, 'actualizarPersona'])
    ->name('persona.actualizar-estado');
