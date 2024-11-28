<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpadreController;


use App\Http\Controllers\CommentController;




Route::apiResource('update',UpadreController::class);
Route::apiResource('delete',DeleteController::class);
Route::apiResource('posts', PostController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('posts/{post}/comments', [CommentController::class, 'index']); // Lista komentara za post
Route::post('comments/{comment}/like', [CommentController::class, 'like']); // Lajkovanje komentara
