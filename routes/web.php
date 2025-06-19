<?php

use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Models\Staff;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',  ['posts' => Staff::all()]);
});

Route::get('/staff-list', function () {
    return view('pages.staff.staffList', ['posts' => Staff::all()]);
})->name('staff-list');

Route::get('/addStaff', [StaffController::class, 'createStaff'])->name('addStaff');

Route::post('/store', [StaffController::class, 'fileStore'])->name('store');

Route::get('/edit/{id}', [StaffController::class, 'editData'])-> name('edit');


Route::post('/update/{id}', [StaffController::class, 'updateData'])-> name('update');

Route::get('/delete/{id}', [StaffController::class, 'deleteData'])-> name('delete');


// Authentication 

Route::view('register', 'register')->name('register');

Route::post('registerSave', [UserController::class, 'register'])->name('registerSave');


Route::view('login', 'login')->name('login');

Route::post('loginMatch', [UserController::class, 'login'])->name('loginMatch');

Route::get('admin', [UserController::class, 'adminPage'])->name('admin');

Route::get('logout', [UserController::class, 'logout'])->name('logout');
