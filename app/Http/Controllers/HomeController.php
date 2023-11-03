<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->check()) {
            $user = auth()->user();
            if ($user->role_id == 1) {
                return view('admin.dashboard');
            } elseif ($user->role_id == 2) {
                if ($user->status == 1) {
                    return view('company.jobs.create');
                } else {
                    return redirect()->route('panding');
                }
            } else {
                return view('home');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
