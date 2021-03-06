<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SubscribeController;
use Illuminate\Support\Facades\Route;

Route::post('publish/{website_uuid}', [PostController::class, 'publish']);
Route::post('subscribe', [SubscribeController::class, 'subscribe']);