<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::group(['middlewarw' => ['auth']], function () {
    // Logout Route
    Route::get('/logout', 'logoutController@perform')->name('logout.perform');
});


############# HOME ############# 
Route::get('/', 'HomeController@index')->name('home');
############# END HOME ############# 

############# LEADER DUTY ############# 
Route::group(['prefix' => 'leaderduty'], function () {
    Route::get('/', 'LeaderDutyController@index')->name('index');
    Route::get('/create', 'LeaderDutyController@create')->name('leaderdutyCreate');
    Route::post('/duty-store', 'LeaderDutyController@store')->name('store');
    Route::get('/show', 'LeaderDutyController@show')->name('showInventoryResult');
    Route::post('/update', 'LeaderDutyController@update');
    Route::post('/delete', 'LeaderDutyController@delete');
});
############# END LEADER DUTY ############# 


############# OBJECTIONS ############# 
Route::group(['prefix' => 'objections'], function () {
    Route::get('/all_objections', 'ObjectionController@listAllObjections')->name('objections.all_objections');
    Route::get('/my_objections', 'ObjectionController@listMyObjections')->name('objections.my_objections');
    Route::get('/create', 'ObjectionController@create')->name('objections.create');
    Route::post('/store', 'ObjectionController:@tore')->name('objections.store');
    Route::get('/edit/{id}', 'ObjectionController@edit')->name('edit_objection');
    Route::post('/update/{id}', 'ObjectionController@update')->name('update_objection');
    Route::get('/delete/{id}', 'ObjectionController@delete')->name('delete_objection');
});
############# END OBJECTIONS ############# 

############# LEADERS  ############# 
Route::group(['prefix' => 'leaders'], function () {
    Route::get('/all_leaders', 'LeaderController@listAllLeaders')->name('leaders.all_leaders');
    Route::get('/my_leaders', 'LeaderController@listMyLeaders')->name('leaders.my_leaders');
    Route::get('/create', 'LeaderController@create')->name('leaders.create');
    Route::post('/store', 'LeaderController@store')->name('leaders.store');
    Route::get('/edit/{id}', 'LeaderController@edit')->name('edit_leader');
    Route::post('/update/{id}', 'LeaderController@update')->name('leaders.update');
    Route::get('/delete/{id}', 'LeaderController@delete')->name('delete_leader');
    Route::get('/relocate/{id}', 'LeaderController@relocate')->name('relocate_leader');
});
############# END LEADERS  ############# 


############# SUPERVISORS  ############# 
Route::group(['prefix' => 'supervisors'], function () {
    Route::get('/all_supervisors', 'SupervisorController@listAll')->name('supervisors.all_supervisors');
    Route::get('/my_supervisors', 'SupervisorController@mySupervisors')->name('supervisors.my_supervisors');
    Route::get('/show/{id}', 'SupervisorController@show')->name('show_supervisor');
    Route::post('/upgradeSupervisor/{id}', 'SupervisorController@upgradeSupervisor')->name('supervisors.upgrade');
    Route::get('/assignToAdvisor/{id}', 'SupervisorController@assignToAdvisor')->name('supervisors.assign_to_advisor');
    Route::get('/assignleaders/{id}', 'SupervisorController@assignleaders')->name('supervisors.assign_leader');
    Route::get('/delete/{id}', 'SupervisorController@delete')->name('delete_leader');
});
############# END SUPERVISORS  ############# 

############# MESSAGES  ############# 
Route::group(['prefix' => 'messages'], function () {
    Route::get('/list_message/{partnerId}', 'MessageController@listMessage')->name('list_message');
    Route::get('/list_all_messages', 'MessageController@listAllMessages')->name('list_all_messages');
    Route::Post('/send_message', 'MessageController@sendMessage')->name('send_message');
});
############# END MESSAGES  ############# 

############# REPATED NOTES  ############# 
Route::group(['prefix' => 'notes'], function () {
    Route::get('/show/{id}',    'repeatedNoteController@show')->name('showNotes');
    Route::post('/store',       'repeatedNoteController@store')->name('storeNotes');
    Route::get('/',             'repeatedNoteController@index')->name('listNotes');
    Route::get('/create',      'repeatedNoteController@create')->name('createNotes');
    Route::post('/update',     'repeatedNoteController@update')->name('updateNotes');
    Route::post('/delete/{id}', 'repeatedNoteController@delete')->name('deleteNotes');
});
############# END REPATED NOTES  ############# 

############# NEWS  ############# 
Route::group(['prefix' => 'news'], function () {
    Route::get('/all', 'NewsController@allNews')->name('news.all');
    Route::get('/create', 'NewsController@create')->name('news.create');
    Route::post('/store', 'NewsController@store')->name('news.store');
    Route::get('/edit/{id}', 'NewsController@edit')->name('news.edit');
    Route::post('/update/{id}', 'NewsController@update')->name('news.update');
    Route::get('/delete/{id}', 'NewsController@delete')->name('news.delete');
});
############# END NEWS  ############# 
