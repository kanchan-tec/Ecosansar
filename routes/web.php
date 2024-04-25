<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


require __DIR__ . '/auth.php';

Route::group(['prefix' => '/', 'middleware'=>'auth'], function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');
    Route::get('/home', fn()=>view('index'))->name('home');
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');

});

Route::controller(FaqController::class)->group(function(){

    Route::get('/add','add')->name('User.add');

    });


Route::controller(ContactController::class)->group(function(){
    Route::get('contact/list','list')->name('admin.contact.list');
});

