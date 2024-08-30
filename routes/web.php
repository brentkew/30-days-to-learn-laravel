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

// Index
Route::get("/jobs", function (){

    // $jobs = Job::with('employer')->paginate(5);
    $jobs = Job::with('employer')->latest()->simplePaginate(5);
    // $jobs = Job::with('employer')->cursorPaginate(5);

    return view("jobs.index", [
        'jobs' => $jobs
    ]);
});

// Create
Route::get("/jobs/create", function(){
    return view("jobs.create");
});

// Store
Route::post("/jobs", function(){
    request()->validate([
        'title'=> ["required", "min:3", "string"],
        'salary'=> ["required", "string"],
    ]);
    Job::create([
        "title"=> request('title'),
        "salary"=> request('salary'),
        "employer_id"=> 2,
    ]);
    return redirect("/jobs");
});

// Edit
Route::get("/jobs/{job}/edit", function(Job $job){
    // $job = Job::find($job);
    if(!$job) {
        abort(404);
    }
    return view('jobs.edit', ['job' => $job]);
});

// Update
Route::patch("/jobs/{job}", function(Job $job){

    // $job = Job::findOrFail($job);
    request()->validate([
        'title'=> ["required", "min:3", "string"],
        'salary'=> ["required", "string"],
    ]);

    $job->update([
        "title"=> request('title'),
        "salary"=> request('salary')
    ]);

    return redirect('/jobs/' . $job->id);
});

// Delete
Route::delete("/jobs/{job}", function(Job $job){
    // $job = Job::findOrFail($job);
    $job->delete();
    return redirect('/jobs');
});

// Show
Route::get("/jobs/{job}", function(Job $job){
    // $job = Job::find($job);
    if(!$job) {
        abort(404);
    }
    return view('jobs.show', ['job' => $job]);
});
