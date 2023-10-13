<?php

use App\Http\Controllers\ToDoListController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/ToDoList/create',function(){
//     return view('ToDoList.create');
// })->name('todolist.create');
// Route::post('/ToDoList/store', function ($id=null) {
//     return view('ToDoList.store');
// })->name('todolist.store');

Route::resource('ToDoList', ToDoListController::class);