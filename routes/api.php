<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Маршруты для страницы контактов
Route::get('/contacts', [ContactController::class, 'index']); // GET-запрос для получения всех контактов
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/admin', \App\Http\Controllers\AdminController::class);


// Главная страница
Route::get('/', function () {
    return view('welcome');
});

// Маршрут для HerkulPipe
Route::get('/HerkulPipe', [HomePage::class, 'index']);
