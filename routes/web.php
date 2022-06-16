<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PreachController;
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



//Route::view('home', 'home');
Route::view('services', 'services');
Route::view('about-us', 'about-us');
Route::view('message', 'message');
Route::view('event', 'event');
Route::view('mini', 'mini');
Route::post('up', [ImageController::class, 'upload'])->name('up');
Route::get('users', [ImageController::class, 'index'])->name('users');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('gallery', [ImageController::class, 'gal'])->name('gallery');
Route::get('preach', [PreachController::class, 'index'])->name('preach');
Route::get('sermon', [PreachController::class, 'all'])->name('sermon');
Route::get('ministers', [PreachController::class, 'minis'])->name('ministers');
Route::get('more/{id}', [PreachController::class, 'more'])->name('more');
Route::get('read-more/{id}', [PreachController::class, 'read'])->name('read-more');
Route::post('pre', [PreachController::class, 'pre'])->name('pre');
Route::post('minis', [PreachController::class, 'mini'])->name('minis');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
