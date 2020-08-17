<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        if ($user->user_type == 'Admin' || $user->user_type == 'Editor' || $user->user_type == 'Support') {
            return view('backend.dashboard');
        } else {
            return redirect('/');
        }
    }

    public function vendor()
    {
        return view('vendor.vendor');
    }
}
