<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Supervisor;
use App\Models\Leadre;
use App\Models\LeaderDuty;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaderDutyController;

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');

});
Route::view('/supervisor-page', 'supervisor');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/leaderduty', [App\Http\Controllers\LeaderDutyController::class, 'index']);
Route::get('/superHome', [App\Http\Controllers\HomeController::class, 'index']);


Route::get('/supervisorHome', function () {
        $supervisors = Supervisor::get()->where('user_id', Auth::id());
        $leader_duties = LeaderDuty::get();
        $leadres = leadre::get();
        return view('supervisorHome')
        ->with('supervisors', $supervisors)
        ->with('leadres', $leadres)
        ->with('leader_duties', $leader_duties);
    return view('supervisorHome');
});
Route::get('/show_inventory_result', function () {
    return view('result');
});
Route::get('/show_inventory', function () {
    return view('results');
});
Route::get('/notes', [App\Http\Controllers\repeatedNoteController::class, 'index'])->name('notes');

// Route::group(['prefix'=>'inventory'], function(){
//     Route::get('/', [InventoryController::class, 'index']);
//     Route::post('/create', [InventoryController::class, 'create']);
//     Route::post('/show', [InventoryController::class, 'show']);
//     Route::post('/update', [InventoryController::class, 'update']);
//     Route::post('/delete', [InventoryController::class, 'delete']);

// });
