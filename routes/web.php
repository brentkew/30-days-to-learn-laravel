<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function() {
    return view("about");
});

Route::get('/contact-us', function() {
    return view("contact");
});

Route::get("/jobs", function (){
    return view("jobs", [
        'jobs' => Job::all()
    ]);
});

Route::get("/jobs/{id}", function($id){
    $job = Job::find($id);

    if(!$job) {
        abort(404);
    }

    return view('jobs-details', ['job' => $job]);
});