<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ArchiveController;

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
    return view('home');
});

Auth::routes();

Route::middleware(['auth'])->group(function(){
    //Post resources
    Route::get('/dashboard',function () {
        return view('admin.dashboard');
    });

    Route::resource('employee', 'EmployeeController');
    Route::resource('designation', 'DesignationController');
    Route::resource('position', 'PositionController');
    Route::resource('agency', 'AgencyController');
    Route::resource('archive', 'ArchiveController');
});

Route::get('/sb', function () {
    return view('admin.sb');
});
