<?php

use App\Http\Controllers\PostShowController;
use App\Http\Controllers\PostsIndexController;
use App\Http\Controllers\TagShowController;
use Illuminate\Support\Facades\Route;

Route::get('/', PostsIndexController::class)->name('posts.index');
Route::get('/{post}', PostShowController::class)->name('posts.show');
Route::get('/tags/{tag}', TagShowController::class)->name('tags.show');
