<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PacienteController;
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

Route::get('/pacientes', [PacienteController::class, 'index']);
Route::get('/paciente/{id}', [PacienteController::class, 'show']);
Route::post('/paciente', [PacienteController::class, 'store']);
Route::put('/paciente/{id}', [PacienteController::class, 'update']);
Route::delete('/paciente/{id}', [PacienteController::class, 'remove']);

Route::apiResource('profissional', \App\Http\Controllers\Api\ProfissionalController::class);
Route::apiResource('consultas', \App\Http\Controllers\Api\ConsultasController::class);
