<?php


use Illuminate\Support\Facades\Route;


// Frontend Vue SPA (all frontend URLs handled by Vue Router)
Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');


require __DIR__.'/auth.php';
