<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\MessageController;


Auth::routes();

// Route::group(['middlewarw' => ['auth']], function() {
//     // Logout Route
//     Route::get('/logout', 'logoutController@perform')->name('logout.perform');
// });

Route::view('/supervisor-page', 'supervisor');


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/leaderduty', [App\Http\Controllers\LeaderDutyController::class, 'index']);
Route::group(['prefix'=>'leaderduty'], function(){
    Route::get('/', [App\Http\Controllers\LeaderDutyController::class, 'index'])->name('index');
    Route::post('/create', [App\Http\Controllers\LeaderDutyController::class, 'create']);
    Route::post('/duty-store', [App\Http\Controllers\LeaderDutyController::class, 'store'])->name('store');
    Route::get('/show', [App\Http\Controllers\LeaderDutyController::class, 'show'])->name('showInventoryResult');
    Route::post('/update', [App\Http\Controllers\LeaderDutyController::class, 'update']);
    Route::post('/delete', [App\Http\Controllers\LeaderDutyController::class, 'delete']);
});

Route::get('/chatbox', [App\Http\Controllers\MessageController::class, 'listMessage']);
Route::view('/addM', 'chatbox');
Route::post('/addM', [App\Http\Controllers\MessageController::class, 'addMessage']);

Route::get('/msg', 'MessageController@listAllMessages')->name('message') ;
Route::get('/list-all-messages', 'MessageController@listAllMessages')->name('list-all-messages') ;


 Route::group(['prefix'=>'notes'], function(){
     Route::get('/show/{id}',    'repeatedNoteController@show')->name('showNotes');
     Route::post('/store',       'repeatedNoteController@store')->name('storeNotes');
     Route::get('/',             'repeatedNoteController@index')->name('listNotes');
     Route::get('/create',      'repeatedNoteController@create')->name('createNotes');
     Route::post('/update',     'repeatedNoteController@update')->name('updateNotes');
     Route::post('/delete/{id}','repeatedNoteController@delete')->name('deleteNotes');
    });
    // Route::resource('notes', repeatedNoteController::class);


// Route::group(['prefix'=>'inventory'], function(){
//     Route::get('/', [InventoryController::class, 'index']);
//     Route::post('/create', [InventoryController::class, 'create']);
//     Route::post('/show', [InventoryController::class, 'show']);
//     Route::post('/update', [InventoryController::class, 'update']);
//     Route::post('/delete', [InventoryController::class, 'delete']);

// });
