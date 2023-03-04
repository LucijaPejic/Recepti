<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceptController;
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



Route::get('/blogpost', [ReceptController::class, 'blogpost']);

Route::get('/search', [ReceptController::class, 'search'])->name('receipe-post.search');
Route::get('/receipepost/{id}', [ReceptController::class, 'show'])->name('receipe-post.show');

Route::post('/saveItem', [ReceptController::class, 'saveItem'])->name('saveItem');
   

Route::get('/', [ReceptController::class, 'index']);

Route::get('/about', function () {
    return view('pages.about');
});










Route::get('/elements', function () {
    return view('pages.elements');
});





Route::get('/create', function () {
    return view('pages.create');
});