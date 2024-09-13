<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LogisticaController;
use App\Http\Controllers\ProduccionController;
use App\Http\Controllers\ventaController;



Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/inicio_s', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/inicio_s', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/accesorios', function () {
    return view('vist_clientes.accesorios');
});
Route::get('/adultos', function () {
    return view('vist_clientes.adultos');
});
Route::get('/niños', function () {
    return view('vist_clientes.niños');
});
Route::get('/zapatos', function () {
    return view('vist_clientes.zapatos');
});

Route::get('/conjuntos', function () {
    return view('vist_clientes.conjuntos');
});

Route::middleware('auth')->group(function () {
    Route::get('/cruds', function () {
        return view('cruds');
    });
    Route::get('/inventario/pdf', [InventarioController::class, 'pdf'])->name('Inventario.pdf');
    Route::get('/logisticas/pdf', [LogisticaController::class, 'pdf'])->name('Logisticas.pdf');
    Route::get('/produccion/pdf', [ProduccionController::class, 'pdf'])->name('produccion.pdf');
    Route::get('/ventas/pdf', [ventaController::class, 'pdf'])->name('ventas.pdf');
    Route::resource('/inventario', InventarioController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('logisticas', LogisticaController::class);
    Route::resource('produccion', ProduccionController::class);
    Route::resource('ventas', ventaController::class);
});

