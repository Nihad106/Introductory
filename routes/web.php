<?php

use Illuminate\Support\Facades\Route;
#use app\Http\Admin\DashboardController;
use App\Http\Controllers\Admin\DashboardController;
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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware'=> ['auth','admin']],function(){
    
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });


    Route::get('/role-register', [DashboardController::class,'registered']);
    Route::get('/role-edit/{id}', [DashboardController::class,'registeredit']);
    Route::put('/role-register-update/{id}',[DashboardController::class,'registerupdate']);
    Route::put('/home/{id}',[DashboardController::class,'nonAdmin']);
    
});

