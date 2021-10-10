<?php

use App\Http\Controllers\agenda;
use App\Http\Controllers\sql;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [agenda::class, 'affiche']);

Route::get('sql', [sql::class, 'affiche']);

Route::get('table', [sql::class, 'table']);