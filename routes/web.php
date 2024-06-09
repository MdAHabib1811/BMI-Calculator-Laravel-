<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Project3Controller;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Project3Controller::class, 'input_page']);

Route::post('/add_info', [Project3Controller::class, 'add_info']);

Route::get('/view_infos', [Project3Controller::class, 'view_infos']);

Route::get('/show_bmi/{id}', [Project3Controller::class, 'show_bmi']);
