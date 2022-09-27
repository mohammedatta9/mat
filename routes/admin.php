<?php

use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CommercialController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\LicenseController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\OccupationController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.home');
});


Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');


// use JodaResource
Route::resource('departments', DepartmentController::class);
Route::resource('countries', CountryController::class);
Route::resource('cities', CityController::class);
Route::resource('users', UserController::class);
Route::resource('notifications', NotificationController::class);
Route::resource('commercials', CommercialController::class);
Route::resource('licenses', LicenseController::class);
Route::resource('occupations', OccupationController::class);

// Route::get('sections/list' , [App\Http\Controllers\Admin\DepartmentController::class , 'list'])->name('admin.departments');
// Route::get('sections/profile/{id}' , [App\Http\Controllers\Admin\DepartmentController::class , 'department_profile'])->name('admin.department.profile');
// Route::post('sections/save/{id}' , [App\Http\Controllers\Admin\DepartmentController::class , 'department_save'])->name('admin.department.save');
// Route::post('sections/delete' , [App\Http\Controllers\Admin\DepartmentController::class , 'department_delete'])->name('admin.department.delete');

Route::get('questions/list' , [App\Http\Controllers\Admin\QuestionController::class , 'list'])->name('questions'); 
Route::get('question/profile/{id}' , [App\Http\Controllers\Admin\QuestionController::class , 'question_profile'])->name('question.profile');
Route::post('question/save' , [App\Http\Controllers\Admin\QuestionController::class , 'question_save'])->name('question.save');
Route::post('question/delete/{id}' , [App\Http\Controllers\Admin\QuestionController::class , 'question_delete'])->name('question.delete');
Route::post('question/edit/{id}' , [App\Http\Controllers\Admin\QuestionController::class , 'question_edit'])->name('question.edit');
