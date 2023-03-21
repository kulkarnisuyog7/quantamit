<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;

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
})->name('home');

Route::get('/login', [homecontroller::class, 'loadlogin'])->name('login');
Route::post('/login-user', [homecontroller::class, 'login'])->name('login-user');
Route::get('/logout', [homecontroller::class, 'logout'])->name('logout');
Route::get('/dashboard', [homecontroller::class, 'loaddashboard'])->name('dashboard');

Route::get('/companies', [homecontroller::class, 'loadcompanies'])->name('loadcompanies');
Route::get('/add-companies', [homecontroller::class, 'loadaddcompanies'])->name('loadaddcompanies');
Route::post('/add-companies', [homecontroller::class, 'addcompanies'])->name('addcompanies');
Route::delete('/delete-companies/{id}', [homecontroller::class, 'deletecompanies'])->name('deletecompanies');
Route::get('/update-company/{id}', [homecontroller::class, 'loadupdatecompany'])->name('loadupdatecompany');
Route::put('/update-company/{id}', [homecontroller::class, 'updatecompany'])->name('updatecompany');

Route::get('/employees', [homecontroller::class, 'loademployees'])->name('loademployees');
Route::get('/add-employee', [homecontroller::class, 'loadaddemployee'])->name('loadaddemployee');
Route::post('/add-employee', [homecontroller::class, 'addemployee'])->name('addemployee');
Route::delete('/delete-employee/{id}', [homecontroller::class, 'deleteemployee'])->name('deleteemployee');
Route::get('/update-employee/{id}', [homecontroller::class, 'loadupdateemployee'])->name('loadupdateemployee');
Route::put('/update-employee/{id}', [homecontroller::class, 'updateemployee'])->name('updateemployee');
