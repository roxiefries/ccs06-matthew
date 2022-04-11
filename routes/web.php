<?php

use Illuminate\Support\Facades\Route;

 
use App\Http\Controllers\MatthewController;

Route::get('/chapter/{chapter_number}', [MatthewController::class, 'readByChapter']);
Route::get('/all-chapters', [MatthewController::class, 'readAll']);
