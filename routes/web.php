<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Http\Controllers\{companyController,getCompanyController};

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
Route::get('/counter', Counter::class);
Route::get('/', function () {
    return view('welcome');
});
Route::get('company-profile',[companyController::class,'companyProfile']);
Route::get('get-company-profile',[getCompanyController::class,'showCompanyProfile']);