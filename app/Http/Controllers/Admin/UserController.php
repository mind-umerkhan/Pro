<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function destroy($id)
    {
        $adminUser = User::find($id);
        if ($adminUser) {
            $adminUser->delete();
            return back();
            $company = Company::find($adminUser->id);
            $company->delete();
            return back();
        }
    }
}
