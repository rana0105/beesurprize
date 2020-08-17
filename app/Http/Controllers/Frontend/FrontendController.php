<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function liveContest()
    {
        return view('frontend.pages.contest');
    }

    public function liveContestDetail()
    {
        return view('frontend.pages.contest-detail');
    }
    
    public function upcomingContest()
    {
        return view('frontend.pages.upcoming-contest');
    }
    
    public function upcomingContestDetail()
    {
        return view('frontend.pages.upcoming-contest-detail');
    }
    
    public function contestWinner()
    {
        return view('frontend.pages.winners');
    }
    
    public function aboutUs()
    {
        return view('frontend.pages.about-us');
    }
    
    public function howWork()
    {
        return view('frontend.pages.how-work');
    }
    
    public function profile()
    {
        return view('frontend.pages.user-profile');
    }
    
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    
    public function faq()
    {
        return view('frontend.pages.faq');
    }
    
    public function termsService()
    {
        return view('frontend.pages.privacy-policy');
    }
    
    public function privacyPolicy()
    {
        return view('frontend.pages.privacy-policy');
    }
    
    public function cart()
    {
        return view('frontend.pages.cart');
    }
}
