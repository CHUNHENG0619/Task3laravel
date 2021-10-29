<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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
    return view('ys.welcome');
});

Route::get('form', function () {
    return view('ys.form');
});

Route::post('form', [FormController::class, 'addPerson']);

Route::get('personView', [FormController::class, 'viewPerson']);

Route::get('login',function(){
    return view('ys.login');
});

Route::post('login', [FormController::class,'loginUser']);

Route::get('update',[FormController::class,'update']);

Route::get('remove',[FormController::class,'remove']);