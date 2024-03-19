<?php

use Illuminate\Support\Facades\Route;

// importo page controller
use App\Http\Controllers\Guest\PageController;


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

// definisco la rotta del tipo GET
Route::get('/', [PageController::class, 'index'] );
// esempio ti tiziano con index