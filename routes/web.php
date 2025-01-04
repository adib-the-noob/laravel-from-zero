<?php

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
use App\Models\Job;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    $posts = Job::all();
    $fist_data = [
        "title" => $posts[0]->title,
        "salary" => $posts[0]->salary,
    ];
    dd($fist_data);
});

