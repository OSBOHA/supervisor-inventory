<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\repeatedNoteController;

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});


Route::get('/', function () {
    return view('welcome');
    // return view('auth.register');

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

Route::resource('notes', repeatedNoteController::class);

// Route::group(['prefix'=>'notes'], function(){
//    Route::get('/', [repeatedNoteController::class, 'index']);
//    Route::post('/create', [repeatedNoteController::class, 'create']);
//    Route::post('/show', [repeatedNoteController::class, 'show']);
//    Route::post('/update', [repeatedNoteController::class, 'update']);
//    Route::post('/delete', [repeatedNoteController::class, 'delete']);
// });


// Route::group(['prefix'=>'inventory'], function(){
//     Route::get('/', [InventoryController::class, 'index']);
//     Route::post('/create', [InventoryController::class, 'create']);
//     Route::post('/show', [InventoryController::class, 'show']);
//     Route::post('/update', [InventoryController::class, 'update']);
//     Route::post('/delete', [InventoryController::class, 'delete']);

// });