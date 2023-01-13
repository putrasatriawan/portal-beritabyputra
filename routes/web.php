<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\FrontController\DashboardfeController;
use App\Http\Controllers\FrontController\DetailArtikelController;
use App\Http\Controllers\FrontController\KategoriFrontController;
use App\Http\Controllers\FrontController\LatestArtikelController;
use App\Http\Controllers\FrontController\PlaylistFController;
use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardfeController::class, 'index']);


Auth::routes(['register' => false]);


Route::resource('dashboard', DashboardController::class);
Route::resource('artikel', ArtikelController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('playlist', PlaylistController::class);
Route::resource('materi', MateriController::class);
Route::resource('materi', MateriController::class);
Route::resource('dashboardfe', DashboardfeController::class);
Route::resource('detailartikel', DetailArtikelController::class);
Route::resource('kategorifront', KategoriFrontController::class);
Route::resource('latestartikel', LatestArtikelController::class);
Route::resource('playlistf', PlaylistFController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//slug

// Route::get('/kategori-view/{kategori:slug}', function (Artikel $artikel) {
//     retun view('front.')
// }

// );
Route::get('/{slug}', [DetailArtikelController::class, 'show']);
// Route::get('/Artikel-kategori/{$item->slug}', [KategoriFrontController::class, 'show_kategori'])->name('kategorife.show');

Route::get('kategori-artikel/{slug}', [KategoriFrontController::class, 'show_kategori']);