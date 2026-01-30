<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\FavorateController;

Route::get('/', function () {
    return view('welcome',['name'=>'bilal']);
});

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/questions', [QuestionController::class, 'index'])
    ->name('questions.index');

Route::get('/questions/create', [QuestionController::class, 'create'])
    ->name('questions.create');

Route::post('/questions', [QuestionController::class, 'store'])
    ->name('questions.store')->middleware('auth');

Route::get('/questions/{question}', [QuestionController::class, 'show'])
    ->name('questions.show');

Route::get('/questions/{question}/edit', [QuestionController::class, 'edit'])->name('questions.edit');
Route::put('/questions/{question}', [QuestionController::class, 'update'])->name('questions.update');


Route::delete('/questions/{question}', [QuestionController::class, 'destroy'])
    ->name('questions.destroy');


Route::get('/one_message',[QuestionController::class , 'showOneMessage']);


Route::post('/questions/{id}/like', [LikeController::class, 'toggle'])->middleware('auth')->name('questions.like');


Route::middleware('auth')->group(function () {
    Route::resource('responses', ResponseController::class)
        ->only(['store', 'edit', 'update', 'destroy']);
});

Route::post('/questions/{question}/favorite', 
    [FavorateController::class, 'toggle']
)->middleware('auth')->name('questions.favorite');

Route::get('/favorite', 
    [FavorateController::class, 'view']
)->middleware('auth')->name('questions.favorite');



