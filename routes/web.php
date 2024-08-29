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

    // $jobs = Job::with('employer')->paginate(5);
    $jobs = Job::with('employer')->latest()->simplePaginate(5);
    // $jobs = Job::with('employer')->cursorPaginate(5);

    return view("jobs.index", [
        'jobs' => $jobs
    ]);
});

Route::get("/jobs/create", function(){
    return view("jobs.create");
});
Route::post("/jobs", function(){
    Job::create([
        "title"=> request('title'),
        "salary"=> request('salary'),
        "employer_id"=> 2,
    ]);

    return view("/jobs");
});

Route::get("/jobs/{id}", function($id){
    $job = Job::find($id);

    if(!$job) {
        abort(404);
    }

    return view('jobs.show', ['job' => $job]);
});
