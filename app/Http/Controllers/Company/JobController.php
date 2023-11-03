<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Mail\StatusApprovalEmail;
use App\Models\Company;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $jobs = Job::where('user_id', $user->id)->with('company')->get();
        return view("company.jobs.index", compact('jobs'));
    }

    public function create()
    {
        $companies = Company::all();
        return view("company.jobs.create", compact('companies'));
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
        return redirect()->route('company.job.index');
    }


    public function edit($id)
    {
        $job = Job::find($id);
        return view("company.jobs.edit", compact('job'));
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
