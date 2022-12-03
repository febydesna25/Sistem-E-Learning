<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\DashboardController;
use App\http\controllers\LoginController;
use App\http\controllers\KelasDashboardController;
use App\http\controllers\MahasiswaDashboardController;
use App\http\controllers\DosenDashboardController;
use App\http\controllers\MatkulDashboardController;
use App\http\controllers\DaftaraDashboardController;
use App\http\controllers\DaftarbDashboardController;
use App\http\controllers\MateriDashboardController;
use App\http\controllers\KelasController;
use App\http\controllers\MahasiswaController;
use App\http\controllers\DosenController;
use App\http\controllers\MatkulController;
use App\http\controllers\DaftaraController;
use App\http\controllers\DaftarbController;
use App\http\controllers\MateriController;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('kelasdashboard', KelasDashboardController::class);
Route::resource('mahasiswadashboard', MahasiswaDashboardController::class);
Route::resource('dosendashboard', DosenDashboardController::class);
Route::resource('matkuldashboard', MatkulDashboardController::class);
Route::resource('daftaradashboard', DaftaraDashboardController::class);
Route::resource('daftarbdashboard', DaftarbDashboardController::class);
Route::resource('materidashboard', MateriDashboardController::class);

Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/matkul', [MatkulController::class, 'index']);
Route::get('/daftara', [DaftaraController::class, 'index']);
Route::get('/daftarb', [DaftarbController::class, 'index']);
Route::get('/materi', [MateriController::class, 'index']);
Route::get('/materi/{id}', [MateriController::class, 'show']);