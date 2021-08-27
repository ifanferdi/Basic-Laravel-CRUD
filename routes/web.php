<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\PagesController;
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


Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);

// Route::get('/mahasiswa', [MahasiswaController::class, 'index']);


//Students
// Route::get('/students', [StudentsController::class, 'index']);                  //Index
// Route::get('/students/create', [StudentsController::class, 'create']);          //Form Tambah 
// Route::get('/students/{student}', [StudentsController::class, 'show']);         //Tampilkan berdasarkan id
// Route::post('/students', [StudentsController::class, 'store']);                 //Proses Tambah
// Route::delete('/students/{student}', [StudentsController::class, 'destroy']);   //Hapus
// Route::get('/students/{student}/edit', [StudentsController::class, 'edit']);    //Form Edit 
// Route::patch('/students/{student}', [StudentsController::class, 'update']);     //Proses Edit

//Ini untuk memanggil semua route diatas namun lebih simple
Route::resource('students', StudentsController::class);
