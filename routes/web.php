<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlantController;

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

//route halaman pertama/welcome
Route::get('/', [HomeController::class, 'index']);

//untuk menampilkan data
Route::get('/plants', [PlantController::class, 'index']);

//untuk menampilkan data yang dipilih
Route::get('/plant/{id}', [PlantController::class, 'show']);

//Mengarahkan untuk menampilkan tampilan create
// Route::get('/plant/data/create', [PlantController::class,'create' ]);
Route::get('/plant/data/create', [PlantController::class, 'create']);

//untuk menyimpan data ke db
Route::post('/plants', [PlantController::class, 'store']);

//untuk menampilkan view form data edit
Route::get('/plant/{id}/edit', [PlantController::class, 'edit']);

//Mengupdate data ke db
Route::put('/plant/{id}', [PlantController::class, 'update']);

//Mendelete data
Route::delete('/plant/{id}', [PlantController::class, 'destroy']);

