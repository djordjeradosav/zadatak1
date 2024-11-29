<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController,
    DeleteController,
    UpadreController,
    CommentController,
    AuthController
};

// Auth routes
Route::post('/dashboard', [AuthController::class, 'dashboard']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', fn (Request $request) => $request->user());
    Route::apiResource('posts', PostController::class);
    Route::apiResource('update', UpadreController::class);
    Route::apiResource('delete', DeleteController::class);
});

// Comment routes
Route::get('posts/{post}/comments', [CommentController::class, 'index']);
Route::post('comments/{comment}/like', [CommentController::class, 'like']);