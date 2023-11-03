<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function userShowJobs()
    {
        $jobs = Job::all();
        return view('user_job', compact('jobs'));
    }
}
