<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::view("/", "welcome");
Route::view("/about-us", "about");
Route::view("/contact-us", "contact");

// Route Resource
// only=> [], except=> []
Route::resource("jobs", JobController::class);

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);


Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destory']);
















// Route::get('/', function () {
//     return view('welcome');
// });

// Controller function
// Route::get("/jobs", [JobController::class, 'index']);
// Route::get("/jobs/create", [JobController::class, 'create']);
// Route::get("/jobs/{job}", [JobController::class, 'show']);
// Route::post("/jobs", [JobController::class, 'store']);
// Route::get("/jobs/{job}/edit", [JobController::class, 'edit']);
// Route::patch("/jobs/{job}", [JobController::class, 'udpate']);
// Route::delete("/jobs/{job}", [JobController::class, 'destory']);


// Route Group
// Route::controller(JobController::class)->group(function(){
//     Route::get("/jobs", 'index');
//     Route::get("/jobs/create", 'create');
//     Route::get("/jobs/{job}", 'show');
//     Route::post("/jobs", 'store');
//     Route::get("/jobs/{job}/edit", 'edit');
//     Route::patch("/jobs/{job}", 'update');
//     Route::delete("/jobs/{job}", 'destory');
// });



