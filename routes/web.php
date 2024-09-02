<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


Route::view("/", "welcome");
Route::view("/about-us", "about");
Route::view("/contact-us", "contact");

// Route Resource
// only=> [], except=> []
// Route::resource("jobs", JobController::class)->only(['index', 'show']);
// Route::resource("jobs", JobController::class)->except(['index', 'show'])->middleware('auth');

// Display a listing of the jobs
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store')->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit')
        ->middleware(['auth'])
        ->can('edit', 'job');
Route::patch('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');


// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);


Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destory']);


// Route::get("test", function(){
//     Mail::to("brentkew@gmail.com")->send(new \App\Mail\JobPosted());
//     return "Done";
// });


// Dispatch Queue
Route::get('/test', function(){
    dispatch(function(){
        logger("hello from queue");
    })->delay(5);
});










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



