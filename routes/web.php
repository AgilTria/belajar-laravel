<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DosensController;
use App\Http\Controllers\GuruController;
use App\Models\Dosens;
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

Route::get('/berita', [BeritaController::class, 'index' ]

);

Route::get('/berita/create', [BeritaController::class, 'create']
    // return view('welcome');
);

Route::get('/guru', [GuruController::class, 'index']
);
//Route::get('/berita/create', [BeritaController::class, 'create'] di gunakan untuk

Route::get('/dosen', [DosensController::class, 'index']
);

Route::get('/dosen/create',[DosensController::class, 'create']
);

Route::get('dosen/login',[DosensController::class, 'login']
);
