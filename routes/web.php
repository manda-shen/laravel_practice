<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });
 
// Route::get('/', function () {
//     return redirect()->route('index');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/students_hello', [StudentController::class,'excel']);
Route::get('/how_it_work', [StudentController::class,'viewcontroler']);
Route::resource('students', StudentController::class);