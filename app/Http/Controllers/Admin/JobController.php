<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function index()
    {
        $jobs = Job::with('company')->get();
        return view("admin.jobs.index", compact('jobs'));
    }
    public function create()
    {
        return view("admin.jobs.create");
    }


    public function store(Request $request)
    {
        $request->validate([
            "province" => "required|min:3",
            "position" => "required|min:3",

        ]);
        $job = new Job();
        $job->user_id  = auth()->user()->id;
        $job->position = $request->position;
        $job->program_stream = $request->program_stream;
        $job->employer = $request->employer;
        $job->province = $request->province;

        $job->incorporate_status = $request->incorporate_status;
        $job->approved_applications = $request->approved_applications;
        $job->approved_positions = $request->approved_positions;
        $job->year = $request->year;
        $job->quarter = $request->quarter;
        $job->city = $request->city;
        $job->postal_code = $request->postal_code;
        $job->noc = $request->noc;
        $job->description = $request->description;
        $job->save();
        return redirect()->route('job.index');
    }


    public function edit($id)
    {
        $job = Job::find($id);
        return view("admin.jobs.edit", compact('job'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "province" => "required|min:3",
            "position" => "required|min:3",

        ]);
        $job = Job::find($id);
        $job->user_id  = auth()->user()->id;
        $job->position = $request->position;
        $job->program_stream = $request->program_stream;
        $job->province = $request->province;
        $job->employer = $request->employer;

        $job->incorporate_status = $request->incorporate_status;
        $job->approved_applications = $request->approved_applications;
        $job->approved_positions = $request->approved_positions;
        $job->year = $request->year;
        $job->quarter = $request->quarter;
        $job->city = $request->city;
        $job->postal_code = $request->postal_code;
        $job->noc = $request->noc;
        $job->description = $request->description;
        $job->save();
        return redirect()->route('job.index');
    }

    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();
        return back();
    }
}
