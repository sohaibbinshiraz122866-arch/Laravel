<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontController::class, "index"])->name('home');

Route::GET('/login', function () {
    return view('login');
})->name('login');

Route::GET('/register', function () {
    return view('register');
})->name('register');

Route::POST('/info-student', [FrontController::class, 'info'])->name('student_info');

// Auth::routes(); // (Auth scaffolding not present in this project)


Route::get('/student-list', function(){
 echo "Student list...";
});
