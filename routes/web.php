<?php

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

Route::get('/', function () {
    return redirect('https://docs.google.com/forms/d/e/1FAIpQLSdNJweWGdEUy4_wBTjiOWtTor5Col-enWk3aMrMGfLItVMt2w/viewform');
});

Route::get('/interview', function () {
    return redirect('https://docs.google.com/forms/d/e/1FAIpQLSeKgJLTmciypPSFmyHMIkBDrDE-DbHEy8OSDq7geK-btEjU9Q/viewform');
});
