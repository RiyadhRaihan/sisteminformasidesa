<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\MusController;


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
    return view('index');
});

Route::get('opsi', function () {
    return view('home/opsi');
});

Route::get('galeri', function () {
    return view('home/galeri');
});

Route::get('fitur', function () {
    return view('fitur/fitur');
});


Route::get('about', function () {
    return view('home/about');
});

Route::get('contact', function () {
    return view('home/contact');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/warga', [WargaController::class, 'index']);
    Route::get('/warga/create', [WargaController::class, 'create']);
    Route::post('/warga/store', [WargaController::class, 'store']);
    Route::get('/warga/{id}/edit', [WargaController::class, 'edit']);
    Route::put('/warga/{id}', [WargaController::class, 'update']);
    Route::delete('/warga/{id}', [WargaController::class, 'destroy']);

    Route::get('/surat', [SuratController::class, 'index']);
    Route::get('/surat/create', [SuratController::class, 'create']);
    Route::post('/surat/store', [SuratController::class, 'store']);
    Route::delete('/surat/store', [SuratController::class, 'destroy']);

    Route::get('/mus', [MusController::class, 'index']);
    Route::get('/mus/create', [MusController::class, 'create']);
    Route::post('/mus/store', [MusController::class, 'store']);
    Route::get('/mus/{id}/edit', [MusController::class, 'edit']);
    Route::put('/mus/{id}', [MusController::class, 'update']);
    Route::delete('/mus/{id}', [MusController::class, 'destroy']);



    Route::get('musrenbang', function () {
        return view('fitur/musrenbang');
    });


    Route::get('suket', function () {
        return view('fitur/suket');
    });

    Route::get('data', function () {
        return view('fitur/data');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
