<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboradController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\Homecontroller;
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

Route::get('/',[Homecontroller::class,'homepage']);
Route::get('/dashboard',[DashboradController::class,'ONdashboard'])->middleware('check');
Route::get('/Callgithub',[LoginRegisterController::class,'CallGithub']);
Route::get('/LoginCallBack',[LoginRegisterController::class,'GithubLoginCallback']); //registration somoy github give data
Route::get('/Logout',[LoginRegisterController::class,'Githublogout']);
