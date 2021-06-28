<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\HomeController;
use App\Models\Event;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('home/category', [HomeController::class, 'category'])->name('homeCategory');
Route::get('login', [HomeController:: class, 'login'])->name('login');
// Route::get('/category', function () {
//     return view('admin.data-category');
// });

// Route::get('/', function () {
//     return view('admin/home');
// });
// Route::get('/', function () {
//     return view('admin/admin');
// });



Route::prefix('admin')->group(function (){
    Route::get('/', [AdminHomeController::class, 'index'])->name('adminhome');
    Route::resource('category', CategoryController::class);
    Route::resource('event', EventController::class);


});





// Route::post('/create', [EventController::class, 'uploadFile'])->name('upload.uploadFile');
