<?php

use App\Http\Controllers\OFertasController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/ofertas/index', [OFertasController::class, 'index']);

// Route::get('/ofertas/create', [OFertasController::class, 'create']);

// Route::get('/ofertas/edit', [OFertasController::class, 'edit']);

Route::resource('ofertas', OFertasController::class);
Route::get('/ofertas/form', function () {
    return view('ofertas.form');
});
