<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Livewire\Masterdata\Department;
use App\Livewire\Masterdata\Position;
use App\Livewire\Masterdata\Qualification;
use App\Livewire\Masterdata\Employee;
use App\Livewire\Masterdata\Workshop;
use App\Livewire\Tna\Tna;
use App\Livewire\Tna\Tnadetail;
use App\Livewire\Dashboard;

Route::get('/', [AuthController::class, 'index'])->middleware('guest');
Route::get('login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [AuthController::class, 'authenticate']);

Route::group(['middleware' => 'guest'], function()
{
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('dashboard', Dashboard::class)->name('dashboard.index');

    ### Master Data ###
    // Route Department
    Route::get('department', Department::class)->name('department.index');

    // Route Position    
    Route::get('position', Position::class)->name('position.index');

    // Route Qualification
    Route::get('qualification', Qualification::class)->name('qualification.index');

    // Route Employee
    Route::get('employee', Employee::class)->name('employee.index');

    // Route Workshop
    Route::get('workshop', Workshop::class)->name('workshop.index');


    ### Training Needs Analysis ###
    // Route Training Needs
    Route::get('tna', Tna::class)->name('tna.index');

    // Route Detail Training
    Route::get('tna/{id}', Tnadetail::class)->name('tna.detail');

});
