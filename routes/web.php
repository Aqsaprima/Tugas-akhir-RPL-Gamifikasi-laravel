<?php
use App\Http\Controllers\bossctr;
use App\Http\Controllers\homectr;
use App\Http\Controllers\perictr;
use App\Http\Controllers\roomctr;
use App\Http\Controllers\statctr;
use App\Http\Controllers\tugasctr;
use App\Http\Controllers\detrapctr;
use App\Http\Controllers\logdosctr;
use App\Http\Controllers\logmhsctr;
use App\Http\Controllers\materictr;
use App\Http\Controllers\raportctr;
use App\Http\Controllers\sellevctr;
use App\Http\Controllers\addtaskctr;
use App\Http\Controllers\homedosctr;
use App\Http\Controllers\homemhsctr;

use Illuminate\Support\Facades\Route;

Route::get('/', [homectr::class, 'index'])->name('home');

Route::get('/login', [logmhsctr::class, 'index'])->name('logmhs');
Route::post('/loginauth', [logmhsctr::class, 'verifikasi'])->name('loginauth');
Route::get('/peri', [perictr::class, 'index'])->name('peri');
Route::get('/homeSiswa', [homemhsctr::class, 'index'])->name('homemhs');
Route::get('/selectLevel', [sellevctr::class, 'index'])->name('selectLevel');
Route::post('/tokenlevel', [sellevctr::class, 'token'])->name('tokenlevel');
Route::get('/room', [roomctr::class, 'index'])->name('room');
Route::get('/materi', [materictr::class, 'index'])->name('materi');
Route::get('/tugas', [tugasctr::class, 'index'])->name('tugas');
Route::post('/jawaban', [tugasctr::class, 'upJawaban'])->name('jawaban');
Route::get('/status', [statctr::class, 'index'])->name('status');
Route::get('/boss', [bossctr::class, 'index'])->name('boss');
Route::get('/logout', [logmhsctr::class, 'logout'])->name('outmhs');

Route::get('/loginDosen', [logdosctr::class, 'index'])->name('logdos');
Route::post('/logauthdos', [logdosctr::class, 'verifikasi'])->name('logauthdos');
Route::get('/homeDosen', [homedosctr::class, 'index'])->name('homedos');
Route::get('/addTask', [addtaskctr::class, 'index'])->name('addtask');
Route::post('/upSoal', [addtaskctr::class, 'upSoal'])->name('uploadSoal');
Route::get('/raport', [raportctr::class, 'index'])->name('raport');
Route::get('/detailraport', [detrapctr::class, 'index'])->name('detailraport');
Route::get('/lihatrapot/{id}', [detrapctr::class, 'lihatrapot'])->name('lihatrapot');
Route::post('/accept', [raportctr::class, 'accept'])->name('accept');