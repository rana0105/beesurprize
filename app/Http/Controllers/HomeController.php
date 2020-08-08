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
        if ($user->user_type == 'Super Admin' || $user->user_type == 'Admin') {
            return view('backend.dashboard');
        } elseif ($user->user_type == 'Vendor' || $user->user_type == 'Staff') {
            return redirect('vendor');
        } else {
            return redirect('/');
        }
    }

    public function vendor()
    {
        return view('vendor.vendor');
    }
}
