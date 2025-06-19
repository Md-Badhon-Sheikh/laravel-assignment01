<?php

use App\Http\Controllers\StaffController;
use App\Models\Staff;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',  ['posts' => Staff::all()]);
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/staff-list', function () {
    return view('pages.staff.staffList', ['posts' => Staff::all()]);
})->name('staff-list');

Route::get('/addStaff', [StaffController::class, 'createStaff'])->name('addStaff');

Route::post('/store', [StaffController::class, 'fileStore'])->name('store');

Route::get('/edit/{id}', [StaffController::class, 'editData'])-> name('edit');


Route::post('/update/{id}', [StaffController::class, 'updateData'])-> name('update');

Route::get('/delete/{id}', [StaffController::class, 'deleteData'])-> name('delete');

