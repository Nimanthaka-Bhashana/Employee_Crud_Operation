<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return redirect()->route('employees.index');
});

Route::GET('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::GET('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::POST('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::GET('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::PUT('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
Route::DELETE('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
