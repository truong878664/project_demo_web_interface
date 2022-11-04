<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\DemoController;
use App\Http\Controllers\backend\PositionController;
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

// Route::view('/', 'frontend/layouts/home');
// Route::get('/', function() {
//     return view('frontend.welcome');
// });

Route::view('/', 'frontend.layouts.home');