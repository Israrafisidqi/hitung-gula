<?php

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
    return view('hero');
});

//ini dicoba
use App\Http\Controllers\SugarCalculationController;

Route::get('/hero',[SugarCalculationController::class,'hero'])->name('hero');
Route::get('/home',[SugarCalculationController::class,'home'])->name('home');
Route::get('/article',[SugarCalculationController::class,'article'])->name('article');
Route::get('/sugar-calculation', [SugarCalculationController::class, 'index'])->name('sugar.calculation.form');
Route::post('/sugar-calculation', [SugarCalculationController::class, 'calculate'])->name('sugar.calculation.result');
Route::get('/sugar-calculation/download-pdf', [SugarCalculationController::class, 'downloadPDF'])->name('sugar.calculation.download-pdf');
//---

//testing
Route::get('/coba', fn () => view('coba'));
Route::get('/coba2', fn () => view('coba2'));