<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\StatusApprovalEmail;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{

    


    public function registerView()
    {
        return view('company.register');
    }

    public function registerStore(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'company_name' => 'required|min:3',
            'email' => 'required|min:3',
            'password' => 'required|min:8',
            'phone' => 'required|min:11',
            'company_address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'industry' => 'required',
            'description' => 'required',
        ]);
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

    public function index()
    {
        $companies = Company::all();
        return view('admin.company.index', get_defined_vars());
    }

    public function edit($id)
    {
        $company = Company::find($id);
        return view('admin.company.edit', get_defined_vars());
    }

    public function update(Request $request, $id)
    {
        // Update the Company model
        $company = Company::find($id);
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
        $company->industry = $request->industry;
        $company->website_url = $request->website_url;
        $company->description = $request->description;
        $company->save();

        // Update the associated User model (if user_id is stored in the Company model)
        $user = User::find($company->user_id); // Assuming user_id is the foreign key in the Company model
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role_id = 2; // Assuming this is the role for the company user
        $user->save();

        return redirect()->route('company.index');
    }

    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        $user = User::find($company->user_id);
        $user->delete();

        return back();
    }

    public function approveUser(User $user)
    {
        // Change the user's status to "Approved"
        $user->status = 1;
        $user->save();

        // Send an email
        Mail::to($user->email)->send(new StatusApprovalEmail($user));
        return redirect()->back();
    }
}
