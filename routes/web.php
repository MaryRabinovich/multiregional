<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('multiregional')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    
    /**
     * Parameter name 'region' is reserved for the multiregional module
     * You can change the basic route part 'regions'
     */
    Route::get('/regions/{region}', function () {
        return view('welcome');
    })->name('multiregional');
});