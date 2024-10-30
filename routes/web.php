<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('app/index');
    })->name('dashboard');
    Route::get('/asistencias', function () {
        return view('app/trabajador/registro_asistencia');
    })->name('asistencias');
    Route::get('/permisos', function () {
        return view('app/trabajador/registro_permisos');
    })->name('permisos');
    
    Route::get('/autorizaciones', function () {
        return view('app/trabajador/registro_autorizacion');
    })->name('autorizaciones');
    Route::get('/horarios', function () {
        return view('app/trabajador/registro_asistencia');
    })->name('horarios');


});
