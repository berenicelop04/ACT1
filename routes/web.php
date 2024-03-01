<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('app');
})
->name('application');
Route:: get('phpmyinfo', function() {
    phpinfo();
    })->name('phpmyinfo');
