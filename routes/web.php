<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostContoller;

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
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/dashboard/post', [PostContoller::class, 'index'])->name('post.root');
Route::get('/dashboard/post/form', [PostContoller::class, 'create'])->name('post.create');
Route::get('/dashboard/post/form/{id}', [PostContoller::class, 'edit'])->name('post.edit');
Route::get('/dashboard/post/{id}', [PostContoller::class, 'show'])->name('post.show');
Route::post('/dashboard/post', [PostContoller::class, 'store'])->name('post.store');
Route::put('/dashboard/post/{id}', [PostContoller::class, 'update'])->name('post.update');
Route::delete('dashboard/post/{id}', [PostContoller::class, 'destroy'])->name('post.destroy');
