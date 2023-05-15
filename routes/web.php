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

Route::get('/', function () {
    if (Cookie::has('multiregional')) {
        $region = Cookie::get('multiregional');
        return redirect("/regions/$region");
    }
    return view('welcome');
});

Route::get('/regions/{region}', function (Request $request) {
    Cookie::queue('multiregional', $request->region);
    return view('welcome');
});