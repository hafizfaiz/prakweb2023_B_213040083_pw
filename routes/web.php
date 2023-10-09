<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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
// menghubungkan page
Route::get('/bookPreview', function () {
    return view('bookPreview');
});

Route::get('/books', function () {
    return view('books');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('dataPreview',[BukuController::class,'index'])->name('dataPreview');

Route::get('/', function () {
    return view('index');
});

Route::get('/indexAdmin', function () {
    return view('indexAdmin');
});
// menampilkan data
Route::get('/dataPreview/{id}',[BukuController::class,'tampilkanData'])->name('tampilkanData');

// menampilkan data
Route::get('/indexAdmin/{id}',[BukuController::class,'tambahBuku'])->name('tambahBuku');

// menambahkan data pada indexAdmin
Route::post('/insertData',[BukuController::class,'insertData'])->name('insertData');
