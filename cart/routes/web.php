<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/insertCategory', function () {
    return view('insertCategory');
});
Route::get('/insertProduct', function () {
    return view('insertProduct');
});

Route::get('/insertStudent',function() {
    return view('insertStudent');
});



Route::get('/contactus', function () {
    return view('contact');
});


Route::post('/searchproduct', [App\Http\Controllers\ProductController::class, 'search'])->name('search.product');

Route::post('/insertCategory/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('addCategory');

Route::get('/showCategory', [App\Http\Controllers\CategoryController::class, 'show'])->name('showCategory');

Route::get('/deleteCategory/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('deleteCategory');

Route::get('/deleteProduct/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('deleteProduct');

Route::get('/deleteStudent/{id}', [App\Http\Controllers\myStudentController::class, 'delete'])->name('deleteStudent');

Route::post('/insertProduct/store', [App\Http\Controllers\ProductController::class, 'store'])->name('addProduct');

Route::get('/showProduct', [App\Http\Controllers\ProductController::class, 'show'])->name('showProduct');

Route::get('/insertProduct', [App\Http\Controllers\ProductController::class, 'create'])->name('insertProduct');

Route::get('/insertStudent', [App\Http\Controllers\myStudentController::class, 'create'])->name('insertStudent');

Route::get('/showStudent', [App\Http\Controllers\myStudentController::class, 'show'])->name('showStudent');

Route::post('/insertStudent/store', [App\Http\Controllers\myStudentController::class, 'store'])->name('addStudent');

Route::get('/editProduct/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('editProduct');

Route::post('/updateproduct', [App\Http\Controllers\ProductController::class, 'update'])->name('updateproduct');

Route::get('/editStudent/{id}', [App\Http\Controllers\myStudentController::class, 'edit'])->name('editStudent');

Route::post('/updatestudent', [App\Http\Controllers\myStudentController::class, 'update'])->name('updatestudent');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
