<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

// Route::group(['middlewarw' => ['auth']], function() {
//     // Logout Route 
//     Route::get('/logout', 'logoutController@perform')->name('logout.perform');
// });
Route::get('/', function () {
    return view('welcome');

});
Route::view('/supervisor-page', 'supervisor');

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
// Route::get('/notes', [App\Http\Controllers\repeatedNoteController::class, 'index'])->name('notes');
Route::get('/notes', function () {
 return view('RepeatedNote');
});

// Route::group(['prefix'=>'inventory'], function(){
//     Route::get('/', [InventoryController::class, 'index']);
//     Route::post('/create', [InventoryController::class, 'create']);
//     Route::post('/show', [InventoryController::class, 'show']);
//     Route::post('/update', [InventoryController::class, 'update']);
//     Route::post('/delete', [InventoryController::class, 'delete']);

// });