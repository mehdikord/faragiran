<?php
/*
 * All administrator routes
 */
use Illuminate\Support\Facades\Route;

//Authentication
Route:: group(['as' => 'auth','prefix' => 'auth'],function (){

    //login
    Route::post('login',[\App\Http\Controllers\Auth\AuthController::class,'admin_login'])->name('login');
    Route::post('logout',[\App\Http\Controllers\Auth\AuthController::class,'admin_logout'])->name('logout');

});

//Courses
Route:: group(['as' => 'courses','prefix' => 'courses','middleware' => 'auth:api'],function (){
    Route::get('',[\App\Http\Controllers\Admin\CourseController::class,'index'])->name('index');
    Route::post('',[\App\Http\Controllers\Admin\CourseController::class,'store'])->name('store');
    Route::put('{course}',[\App\Http\Controllers\Admin\CourseController::class,'update'])->name('update');
    Route::post('{course}/lessons',[\App\Http\Controllers\Admin\CourseController::class,'lessons_store'])->name('lessons.store');
});
