<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', App\Livewire\Posts\Index::class)->name('posts.index');
Route::get('/posts/create', App\Livewire\Posts\Create::class)->name('posts.create');
Route::get('/posts/edit/{id}', App\Livewire\Posts\Edit::class)->name('posts.edit');

Route::get('/users', App\Livewire\Users\Index::class)->name('users.index');
Route::get('/users/create', App\Livewire\Users\Create::class)->name('users.create');
