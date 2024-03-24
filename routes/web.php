<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','admin'])->group(function (){
    //Especialidades
    Route::get('/especialidades', [App\Http\Controllers\admin\SpecialtyController::class, 'index']);
    Route::get('/especialidades/create', [App\Http\Controllers\admin\SpecialtyController::class, 'create']);
    Route::get('/especialidades/{specialty}/edit', [App\Http\Controllers\admin\SpecialtyController::class, 'edit']);
    Route::post('/especialidades', [App\Http\Controllers\admin\SpecialtyController::class, 'sendData']);
    Route::put('/especialidades/{specialty}', [App\Http\Controllers\admin\SpecialtyController::class, 'update']);
    Route::delete('/especialidades/{specialty}', [App\Http\Controllers\admin\SpecialtyController::class, 'destroy']);

    //Rutas médicos
    Route::resource('medicos', 'App\Http\Controllers\admin\DoctorController');

    //Rutas Pacientes
    Route::resource('pacientes', 'App\Http\Controllers\admin\PatientController');
});

Route::middleware(['auth','doctor'])->group(function (){
    Route::get('/horario', [App\Http\Controllers\doctor\HorarioController::class, 'edit']);
    Route::post('/horario', [App\Http\Controllers\doctor\HorarioController::class, 'store']);

});


Route::middleware('auth')->group(function(){
    
    Route::get('/reservarcitas/create', [App\Http\Controllers\AppointmentController::class, 'create']);
    Route::post('/reservarcitas', [App\Http\Controllers\AppointmentController::class, 'store']);
    Route::get('/miscitas', [App\Http\Controllers\AppointmentController::class, 'index']);

    //JSON
    Route::get('/especialidades/{specialty}/medicos', [App\Http\Controllers\Api\SpecialtyController::class, 'doctors']);
    Route::get('/horario/horas', [App\Http\Controllers\Api\HorarioController::class, 'hours']);

});


