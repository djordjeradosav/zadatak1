<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

// Route::get('/test-relations', function () {
//     // Kreiraj korisnika
//     $user = User::create([
//         'name' => 'John Doe',
//         'email' => 'john@example.com',
//         'password' => bcrypt('password'),
//     ]);

//     // Kreiraj post za korisnika
//     $post = $user->posts()->create([
//         'title' => 'Moj prvi post',
//         'content' => 'Ovo je sadržaj posta.',
//     ]);

//     // Kreiraj komentar na post
//     $post->comments()->create([
//         'user_id' => $user->id,
//         'content' => 'Ovo je komentar.',
//     ]);

//     return 'Relacije testirane uspešno!';
// });





Route::view('/', 'welcome')->name('welcome'); // Ruta za welcome.blade.php
Route::view('/login', 'login')->name('login'); // Ruta za login.blade.php
Route::view('/dashboard','dashboard')->name('dashboard'); // Ruta za dashboar.blade.php
Route::view('/register','register')->name('register'); // Ruta za register.blade.php


Route::get('/login', 'AuthController@showLogin')->name('login');
Route::post('/login', 'AuthController@login');
Route::get('/register', 'AuthController@showRegister')->name('register');
Route::post('/register', 'AuthController@register');
Route::get('/logout', 'AuthController@logout')->name('logout');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login', function () {
//     return view('login');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
