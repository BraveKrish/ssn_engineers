<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function(){
    return view('frontend.home.index');
})->name('engineer');

