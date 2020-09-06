<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Brand;
use App\Model\Backend\LiveContest;
use App\Model\Backend\Prize;
use App\Model\Backend\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {

        $curentcontests = LiveContest::all();
        $indexHeader = 'header';
        return view('frontend.index', compact('indexHeader', 'curentcontests'));
    }

    public function liveContest()
    {
        $livecontests = LiveContest::all();
        return view('frontend.pages.contest', compact('livecontests'));
    }

    public function liveAllcontest(Request $request)
    {
        if ($request->has('shorBy') && !empty($request->shorBy)) {
            if ($request->shorBy == 2) {
                $data = LiveContest::orderBy('created_at', 'DESC')->get();
                return response()->json($data);
            }elseif ($request->shorBy == 3) {
                $data = LiveContest::orderBy('created_at', 'ASC')->get();
                return response()->json($data);
            }elseif ($request->shorBy == 4) {
                $data = LiveContest::orderBy('price', 'DESC')->get();
                return response()->json($data);
            }else{
                $data = LiveContest::orderBy('price', 'ASC')->get();
                return response()->json($data);
            }
        }

        if ($request->has('sortPrize') && !empty($request->sortPrize)) {
            $data = LiveContest::where('prize_type', $request->sortPrize)->get();
            return response()->json($data);
        }

        if ($request->has('sortBrand') && !empty($request->sortBrand)) {
            $data = LiveContest::where('makers', $request->sortBrand)->get();
            return response()->json($data);
        }

        if ($request->has('amount') && !empty($request->amount)) {
            $amount = $request->amount;
            if($amount <= 100){
                $data = LiveContest::whereBetween('amount', [0, $amount])->get();
                return response()->json($data);
            }elseif ($amount <= 200) {
                $data = LiveContest::whereBetween('amount', [101, $amount])->get();
                return response()->json($data);
            }elseif ($amount <= 300) {
                $data = LiveContest::whereBetween('amount', [201, $amount])->get();
                return response()->json($data);
            }elseif ($amount <= 400) {
                $data = LiveContest::whereBetween('amount', [301, $amount])->get();
                return response()->json($data);
            }elseif ($amount <= 500) {
                $data = LiveContest::whereBetween('amount', [401, $amount])->get();
                return response()->json($data);
            }elseif ($amount <= 700) {
                $data = LiveContest::whereBetween('amount', [501, $amount])->get();
                return response()->json($data);
            }elseif ($amount <= 1000) {
                $data = LiveContest::whereBetween('amount', [701, $amount])->get();
                return response()->json($data);
            }elseif ($amount <= 1500) {
                $data = LiveContest::whereBetween('amount', [1001, $amount])->get();
                return response()->json($data);
            }else{
                $data = LiveContest::whereBetween('amount', [1501, $amount])->get();
                return response()->json($data);
            }
        }

        $data = LiveContest::all();
        return response()->json($data);
    }

    public function loadPrize(Request $request)
    {
        $data = Prize::all();
        return response()->json($data);
    }

    public function loadBrand(Request $request)
    {
        $data = Brand::all();
        return response()->json($data);
    }

    public function liveContestDetail($id)
    {
        $livecontest = LiveContest::with('liveContestCount', 'liveImageGallery')->find($id);
        $count = count($livecontest->liveContestCount);
        return view('frontend.pages.contest-detail', compact('livecontest', 'count'));
    }

    public function liveContestDe(Request $request)
    {
        $livecontest = LiveContest::with('liveImageGallery')
                       ->where('id', $request->livecontestId)->first();
        return response()->json($livecontest);
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
        $question = Question::first();
        return view('frontend.pages.cart', compact('question'));
    }
    
    public function checkout()
    {
        return view('frontend.pages.check-out');
    }
}
