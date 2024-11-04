<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//   return view('welcome');
// });

// index, employee.create

Route::controller(EmployeeController::class)->prefix('employee')->group(function () {
  Route::get('/', 'index')->name('employee');
  Route::get('create', 'create')->name('employee.create');
  Route::post('store', 'store')->name('employee.store');
});

// role controller
Route::controller(RoleController::class)->prefix('role')->group(function () {
  Route::get('/', 'create')->name('role.create');
  Route::post('/', 'store')->name('role.store');
});