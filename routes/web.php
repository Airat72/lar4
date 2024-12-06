<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MortgageController;
use App\Http\Controllers\Public\MortgageControlle;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('admin/mortgages', MortgageController::class);
Route::get('/admin/mortgages/create', [MortgageController::class, 'create'])->name('admin.mortgages.create');



Route::get('/mortgages', [MortgageControlle::class, 'index']);
Route::get('mortgages/{id}', [MortgageControlle::class, 'show']);