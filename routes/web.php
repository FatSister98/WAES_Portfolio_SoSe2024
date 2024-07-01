<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentlistController;
use App\Http\Controllers\NotenzettelController;
use App\Http\Controllers\ExamController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/studentlist/{studentlist}/notenzettels/create',[NotenzettelController::class, 'create'])->name('notenzettel.create');

Route::resource('/studentlist', StudentlistController::class);

Route::resource('/notenzettel', NotenzettelController::class)->except(['create']);

Route::resource('/exam', ExamController::class);