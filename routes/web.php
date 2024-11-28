<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

Route::get('/test-relations', function () {
    // Kreiraj korisnika
    $user = User::create([
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'password' => bcrypt('password'),
    ]);

    // Kreiraj post za korisnika
    $post = $user->posts()->create([
        'title' => 'Moj prvi post',
        'content' => 'Ovo je sadržaj posta.',
    ]);

    // Kreiraj komentar na post
    $post->comments()->create([
        'user_id' => $user->id,
        'content' => 'Ovo je komentar.',
    ]);

    return 'Relacije testirane uspešno!';
});





Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
