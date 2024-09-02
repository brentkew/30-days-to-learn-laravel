<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index()
    {
        // $jobs = Job::with('employer')->paginate(5);
        $jobs = Job::with('employer')->latest()->simplePaginate(5);
        // $jobs = Job::with('employer')->cursorPaginate(5);

        return view("jobs.index", [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view("jobs.create");
    }

    public function store()
    {
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
    }

    public function edit(Job $job)
    {
        if(!$job) {
            abort(404);
        }

        if(Auth::guest()) {
            return redirect("/login");
        }

        if(!$job->employer->user->is(Auth::user())) {
            abort(403);
        }

        return view('jobs.edit', ['job' => $job]);
    }
    public function update(Job $job)
    {
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
    }

    public function destory(Job $job)
    {
        // $job = Job::findOrFail($job);
        $job->delete();
        return redirect('/jobs');
    }

    public function show(Job $job)
    {
        // $job = Job::find($job);
        if(!$job) {
            abort(404);
        }
        return view('jobs.show', ['job' => $job]);
    }





}
