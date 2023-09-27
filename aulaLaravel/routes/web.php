<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Pacientes
// view
Route::get('pacientes', [\App\Http\Controllers\PacienteController::class, 'index']);
Route::get('paciente/{id}', [\App\Http\Controllers\PacienteController::class, 'show']);
//create
Route::get('paciente', [\App\Http\Controllers\PacienteController::class, 'create'])->name('paciente-create');
Route::post('paciente', [\App\Http\Controllers\PacienteController::class, 'store']);
//update
Route::get('paciente/{id}/edit',[\App\Http\Controllers\PacienteController::class,'edit'])
    ->name('paciente-edit');
Route::post('paciente/{id}/update',[\App\Http\Controllers\PacienteController::class,'update'])
    ->name('paciente-update');;
//delete
Route::get('paciente/{id}/delete',[\App\Http\Controllers\PacienteController::class,'delete'])
    ->name('paciente-delete');
Route::post('paciente/{id}/remove',[\App\Http\Controllers\PacienteController::class,'remove'])
    ->name('paciente-remove');

// Profissionais
Route::get('profissionais', [\App\Http\Controllers\ProfissionalController::class, 'index']);
Route::get('profissional/{id}', [\App\Http\Controllers\ProfissionalController::class, 'show']);
Route::get('profissional', [\App\Http\Controllers\ProfissionalController::class, 'create'])->name('profissional-create');
Route::post('profissional', [\App\Http\Controllers\ProfissionalController::class, 'store']);
Route::get('profissional/{id}/edit',[\App\Http\Controllers\ProfissionalController::class,'edit'])
    ->name('profissional-edit');
Route::post('profissional/{id}/update',[\App\Http\Controllers\ProfissionalController::class,'update'])
    ->name('profissional-update');;
Route::get('profissional/{id}/delete',[\App\Http\Controllers\ProfissionalController::class,'delete'])
    ->name('profissional-delete');
Route::post('profisisonal/{id}/remove',[\App\Http\Controllers\ProfissionalController::class,'remove'])
    ->name('profissional-remove');

// Consultas
Route::get('consultas', [\App\Http\Controllers\ConsultasController::class, 'index']);
Route::get('consulta/{id}', [\App\Http\Controllers\ConsultasController::class, 'show']);
Route::get('consulta', [\App\Http\Controllers\ConsultasController::class, 'create'])->name('consulta-create');
Route::post('consulta', [\App\Http\Controllers\ConsultasController::class, 'store']);
Route::get('consulta/{id}/edit',[\App\Http\Controllers\ConsultasController::class,'edit'])
    ->name('consulta-edit');
Route::post('consulta/{id}/update',[\App\Http\Controllers\ConsultasController::class,'update'])
    ->name('consulta-update');;
Route::get('consulta/{id}/delete',[\App\Http\Controllers\ConsultasController::class,'delete'])
    ->name('consulta-delete');
Route::post('consulta/{id}/remove',[\App\Http\Controllers\ConsultasController::class,'remove'])
    ->name('consulta-remove');
