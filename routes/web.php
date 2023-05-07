<?php

use Illuminate\Support\Facades\Route;
// use App/Http/Controllers/PortoController;
use App\Http\Controllers\PortoController;

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

// Route::get('/', function () {
//     return view('index');
// });

// Auth::routes();

Route::get('/', [PortoController::class, 'index']);
Route::get('/porto/{id}', [PortoController::class, 'detail']);

