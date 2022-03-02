<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');

});
Route::view('sp', 'supervisor');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/leaderduty', [App\Http\Controllers\LeaderDutyController::class, 'index']);

Route::get('/front', function () {
    return view('front');
});
Route::get('/show_inventory_result', function () {
    return view('result');
});
Route::get('/show_inventory', function () {
    return view('results');

});

Route::get('/show', function () {
    return view('show');

});
Route::get('/notes', [App\Http\Controllers\repeatedNoteController::class, 'index'])->name('notes');
