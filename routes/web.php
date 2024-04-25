<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\frontend\IndexController;

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
Route::controller(IndexController::class)->group(function(){
    Route::get('/','index')->name('index');
    });

require __DIR__ . '/auth.php';

// Route::group(['prefix' => 'admin-login', 'middleware'=>'auth'], function () {
//     Route::get('/admin-login', [RoutingController::class, 'index'])->name('root');
//     Route::get('/home', fn()=>view('index'))->name('home');
//     Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
//     Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');

// });

Route::controller(AdminController::class)->group(function(){
    Route::get('/admin_login','index')->name('admin_login');
    Route::post('/store','admin_login_store')->name('admin_login_store');

    Route::get('admin_logout','destroy')->name('admin.admin_logout');
});

Route::middleware(['auth', 'user-access:sahayak'])->group(function () {
    Route::get('/sahayak_dashboard', [AdminController::class, 'sahdashboard'])->name('admin.sahayak_dashboard');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin_dashboard', [AdminController::class, 'dashboard'])->name('admin.admin_dashboard');
});




Route::controller(FaqController::class)->group(function(){
    Route::get('/list','index')->name('Faq.list');
    Route::get('/add','add')->name('Faq.add');
    Route::post('/save','save')->name('Faq.save');
    });


Route::controller(ContactController::class)->group(function(){
    Route::get('admin/contact/list','list')->name('admin.contact.list');
});

