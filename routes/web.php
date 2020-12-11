<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'fetchStudents']);

Route::get('/add-post', [PostController::class, 'showAddPost']);
Route::post('/add-post', [PostController::class, 'addPost'])->name('post.add');
Route::get('/posts', [PostController::class, 'showPost']);

