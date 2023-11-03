<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function dashboard()
    {
        if (auth()->check()) {
            $user = auth()->user();
            if ($user->role_id == 1) {
                $jobs = Job::all();
                return view('admin.dashboard',compact('jobs'));
            } elseif ($user->role_id == 2) {
                if ($user->status == 1) {
                    return view('company.jobs.create');
                } else {
                    return redirect()->route('panding');
                }
            } else {
                return redirect()->route('welcome');
            }
        } else {
            return redirect()->route('login');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
