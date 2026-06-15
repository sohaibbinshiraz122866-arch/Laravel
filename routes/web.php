<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontController::class, "index"])->name('home');

Route::POST('/info-student', [FrontController::class, 'info'])->name('student_info');
Auth::routes();

Route::get('/student-list', function(){
 echo "Student list...";
});
