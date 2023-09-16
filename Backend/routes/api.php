<?php

use App\Http\Controllers\genersController;
use App\Http\Controllers\bandsController;
use App\Http\Controllers\albumsController;
USE App\Http\Controllers\PDFController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 
// Ruta para genero 
Route::get('genr',[genersController::class,'index']);

Route::post('genr',[genersController::class,'store']);

Route::get('genr/{id}',[genersController::class,'show']);

Route::put('genr/{id}',[genersController::class, 'update']);

Route::delete('genr/{id}',[genersController::class,'destroy']);

//Ruta para banda 

Route::get('band',[bandsController::class,'index']);

Route::post('band',[bandsController::class,'store']);

Route::get('band/{id}',[bandsController::class,'show']);

Route::put('band/{id}',[bandsController::class, 'update']);

Route::delete('band/{id}',[bandsController::class,'destroy']);

//Ruta para album

Route::get('album',[albumsController::class,'index']);

Route::post('album',[albumsController::class,'store']);

Route::get('album/{id}',[albumsController::class,'show']);

Route::put('album/{id}',[albumsController::class, 'update']);

Route::delete('album/{id}',[albumsController::class,'destroy']);

//imprimir PDF

Route::name("imprimir")->get('imprimir',[PDFController::class,'tabla']);
Route::name("imprimir")->get('imprimirw',[PDFController::class,'obtenerRBG']);
