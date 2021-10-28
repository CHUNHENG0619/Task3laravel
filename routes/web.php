<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;

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

Route::get('/contact', [ContactUsFormController::class, 'createForm']);

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/dashboard',function(){
    $dashboard = DB::table('contacts')->get();
    return view('dashboard',['dashboard' => $dashboard]);
});

Route::get('edit/{id}', [ContactUsFormController::class, 'edit']);
Route::post('edit', [ContactUsFormController::class, 'update']);
Route::get('delete/{id}', [ContactUsFormController::class, 'delete']);