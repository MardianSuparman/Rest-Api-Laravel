<?php

use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\AktorController;
use App\Http\Controllers\Api\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// ROUTE LOGIN
Route::post('login', [LoginController::class,'authenticate']);

// ROUTE LOGIN
Route::post('logout', [LoginController::class,'logout'])->middleware('auth:sanctum');

//ROUTE KATEGORI
Route::get('kategori', [KategoriController::class, 'index']);
Route::post('kategori', [KategoriController::class, 'store']);
Route::get('kategori/{id}', [KategoriController::class, 'show']);
Route::put('kategori/{id}', [KategoriController::class, 'update']);
Route::delete('kategori/{id}', [KategoriController::class, 'destroy']);

// ROUTE GENRE
Route::get('genre', [GenreController::class, 'index']);
Route::post('genre', [GenreController::class, 'store']);
Route::get('genre/{id}', [GenreController::class, 'show']);
Route::put('genre/{id}', [GenreController::class, 'update']);
Route::delete('genre/{id}', [GenreController::class, 'destroy']);

//ROUTE AKTOR
Route::get('aktor', [AktorController::class, 'index']);
Route::post('aktor', [AktorController::class, 'store']);
Route::get('aktor/{id}', [AktorController::class, 'show']);
Route::put('aktor/{id}', [AktorController::class, 'update']);
Route::delete('aktor/{id}', [AktorController::class, 'destroy']);

