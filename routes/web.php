<?php

use Illuminate\Support\Facades\Route;
use Rattanak\Posts\Http\Controllers\PostController;

Route::get ('/posts/list', [PostController::class, 'index']);
Route::get ('/posts', [PostController::class, 'store']);
