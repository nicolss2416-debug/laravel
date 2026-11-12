<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/saludo/{nombre}', function ($nombre) {
    return "Bienvenido, " . $nombre;
})->name('saludo');

Route::get('/suma/{a}/{b}', function ($a, $b) {
    $resultado = $a + $b;
    return "La suma es: " . $resultado;
})->whereNumber('a')->whereNumber('b')->name('suma');

Route::view('/acerca', 'acerca')->name('acerca');

use App\Http\Controllers\EstudianteController;

Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes.index');
Route::get('/estudiantes/{id}', [EstudianteController::class, 'show'])->name('estudiantes.show');