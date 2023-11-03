<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Job;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{


    // public function dashboard()
    // {
    //     if (auth()->check()) {
    //         $user = auth()->user();
    //         if ($user->role_id == 1) {
    //             $jobs = Job::all();
    //             return view('admin.dashboard', compact('jobs'));
    //         } elseif ($user->role_id == 2) {
    //             if ($user->status == 1) {
    //                 return view('company.jobs.create');
    //             } else {
    //                 return redirect()->route('panding');
    //             }
    //         } else {
    //             return view('home');
    //         }
    //     } else {
    //         return redirect()->route('login');
    //     }
    // }
    public function registerView()
    {
        return view('company.register');
    }

    public function registerStore(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role_id = 2;
        $user->save();

        $company = new Company();
        $company->user_id = $user->id;
        $company->name = $request->name;
        $company->company_name = $request->company_name;
        $company->email = $request->email;
        $company->password = $request->password;
        $company->phone = $request->phone;
        $company->company_address = $request->company_address;
        $company->city = $request->city;
        $company->country = $request->country;
        $company->state = $request->state;
        $company->zip_code = $request->zip_code;
        $company->phone = $request->phone;
        $company->industry = $request->industry;
        $company->website_url = $request->website_url;
        $company->description = $request->description;
        $company->save();
        return redirect()->route('panding');
    }
}
