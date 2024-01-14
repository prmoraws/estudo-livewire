<?php

use App\Livewire\ShowTweets;
use App\Livewire\User\UploadPhoto;
use Illuminate\Support\Facades\Route;


Route::get('/upload', UploadPhoto::class)
    ->name('upload.photo.user')
    ->middleware('auth');
Route::get('/tweets', ShowTweets::class)
    ->name('tweets.index')
    ->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
