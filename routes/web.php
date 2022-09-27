<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Question;
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

Route::post('login/sms',[LoginController::class,'sendOtp']);
Route::post('login/verify/sms',[LoginController::class,'verifyOtp']);

Auth::routes();
Route::get('/', function () {
    $questions = Question::get();

    if(auth()->check() and auth()->user()->type=='user'){
        return redirect()->route('client.profile');
    }elseif(auth()->check() and auth()->user()->type=='vendor'){
     return view('welcome')->with('questions', $questions); 
    }
    return view('welcome')->with('questions', $questions); 
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('cities',[HomeController::class,'cities']);

