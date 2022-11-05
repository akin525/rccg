<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CreateController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\MinisterController;
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
Route::get('administrator', [AdminController::class, 'log'])->name('administrator');
Route::post('logu', [AdminController::class, 'getin'])->name('logu');



//Route::view('home', 'home');
Route::view('services', 'services');
Route::view('contact', 'contact');
Route::view('message', 'message');
Route::view('event', 'event');
Route::view('mini', 'mini');
Route::post('up', [ImageController::class, 'upload'])->name('up');
Route::get('users', [ImageController::class, 'index'])->name('users');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('gallery', [ImageController::class, 'gal'])->name('gallery');
Route::get('preach', [PreachController::class, 'index'])->name('preach');
Route::get('ser', [PreachController::class, 'all'])->name('ser');
Route::get('ministers', [PreachController::class, 'minis'])->name('ministers');
Route::get('more/{id}', [PreachController::class, 'more'])->name('more');
Route::get('read-more/{id}', [PreachController::class, 'read'])->name('read-more');
Route::post('pre', [PreachController::class, 'pre'])->name('pre');
Route::post('minis', [PreachController::class, 'mini'])->name('minis');

Route::middleware(['auth'])->group(function () {
    Route::get('admins', [AdminController::class, 'indexadmin'])->name('admins');
    Route::get('add-minister', [MinisterController::class, 'addministers'])->name('add-minister');
    Route::post('post-minister', [MinisterController::class, 'uploadministerdedails'])->name('post-minister');
    Route::get('add-sermon', [PreachController::class, 'index'])->name('add-sermon');
    Route::post('post-sermon', [CreateController::class, 'createmessage'])->name('post-sermon');
    Route::get('add-admin', [AdminController::class, 'addadmin'])->name('add-admin');
    Route::post('creat-admin', [AdminController::class, 'postnew'])->name('creat-admin');
    Route::get('createslide', [AdminController::class, 'createslide'])->name('createslide');
    Route::post('postslide', [AdminController::class, 'loadslide'])->name('postslide');
    Route::post('postgallery', [GalleryController::class, 'uploadga'])->name('postgallery');
    Route::get('add-gallery', [GalleryController::class, 'ga'])->name('add-gallery');
    Route::get('myaccount', [AdminController::class, 'myaccount'])->name('myaccount');
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

});
Route::get('/gallery/{filename}', function ($filename) {
    $path = storage_path('app/gallery/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('gallery');
Route::get('/sermon/{filename}', function ($filename) {
    $path = storage_path('app/sermon/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('sermon');
Route::get('/minister/{filename}', function ($filename) {
    $path = storage_path('app/minister/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('minister');
Route::get('/logout', function(){
    Auth::logout();
    Alert::Success('Logout', 'You Have Successful Logout');
    return view('admin.login')->with('success', 'Logout Successful');
});
require __DIR__.'/auth.php';
