<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\posController;
use App\Http\Controllers\crudController;

// Route::get('/index', function () {
//     $menu = Menu::all();
//     return view('index',compact('$menu'));
// });
// Route::get('/', function () {
//     return view('crud');
// });
Route::resource('/pos',posController::class);
Route::resource('/crud',crudController::class);
Route::put('/crud/{id}/update-gambar', [crudController::class, 'updateGambar'])->name('crud.updateGambar');

