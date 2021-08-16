<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\UserLoggedInController;

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



// Route::redirect('/', '/en');
// Route::group(['prefix' => '{language}'], function(){ 
    
    
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Auth::routes(['verify' => true]);


Route::get('/session', function(){
    return Session::get('locale');
});


Route::resource('profile', ProfileController::class)->only(['index', 'update', 'store','edit','update']);

Route::resource('languages', LocaleController::class)->only(['index', 'update', 'store','edit','update']);

Route::get('/user-loggedin', [UserLoggedInController::class, 'LoggedNotification']);