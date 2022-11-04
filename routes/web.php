<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\PositionController;
use App\Http\Controllers\DemoController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//frontend
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/save-text', [DemoController::class, 'save_text']);


// backend

Route::prefix('/position')->group(function () {

    Route::get('/', [PositionController::class, 'index']);
    
    Route::get('/item/{id}', [PositionController::class, 'getItemById']);

    Route::post('/add', [PositionController::class, 'add']);

    Route::delete('/delete/{id}',[PositionController::class, 'delete']);
});


