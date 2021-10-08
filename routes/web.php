<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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
#FronEnd
Route::get('/', function () {
    return view('index');
})->name('home');

# BackEnd
Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');

Route::get('/news', [NewsController::class, 'frontend_index'])->name('frontend_index');
Route::get('/dashboard/news', [NewsController::class, 'backend_index'])->name('backend_index');
Route::get('/tambahinfo', [NewsController::class, 'tambahinfo'])->name('tambahinfo_news');
Route::post('/store', [NewsController::class, 'store'])->name('store_news');
