<?php

namespace App\Http\Controllers\WebController\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Blog;
use App\Model\Backend\LiveContest;
use App\Model\Backend\LiveImage;
use App\Model\Backend\TicketBook;
use App\Model\Backend\UpcomingContest;
use App\Model\Backend\UpcomingImage;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use Input;
use Intervention\Image\ImageManager;
use Storage;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livecontests = LiveContest::latest()->paginate(5);
        return view('backend.ticket.index', compact('livecontests'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ticket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $date = $request->end_date;
        $ed = date('Y-m-d H:i:s', strtotime($date));

        $gfiles = $request->file('g_image');
        $gfile = $request->hasFile('g_image');
        
        if ($f_image = $request->file('f_image')) {
            $ffilename = rand(10, 100) . time().'.'.$f_image->getClientOriginalExtension();
            $flocation = public_path('/uploads/livecontest/'. $ffilename);
            Image::make($f_image)->resize(512, 512)->save($flocation);
        }else{
            $ffilename = null;
        }

        
        if ($ans_ai = $request->file('ans_ai')) {
            $ansAfile = rand(10, 100) . time().'.'.$ans_ai->getClientOriginalExtension();
            $ansAlocation = public_path('/uploads/livecontest/'. $ansAfile);
            Image::make($ans_ai)->resize(300, 300)->save($ansAlocation);
        }else{
            $ansAfile = null;
        }

        
        if ($ans_bi = $request->file('ans_bi')) {
            $ansBfile = rand(10, 100) . time().'.'.$ans_bi->getClientOriginalExtension();
            $ansBlocation = public_path('/uploads/livecontest/'. $ansBfile);
            Image::make($ans_bi)->resize(300, 300)->save($ansBlocation);
        }else{
            $ansBfile = null;
        }

        
        if ($ans_ci = $request->file('ans_ci')) {
            $ansCfile = rand(10, 100) . time().'.'.$ans_ci->getClientOriginalExtension();
            $ansClocation = public_path('/uploads/livecontest/'. $ansCfile);
            Image::make($ans_ci)->resize(300, 300)->save($ansClocation);
        }else{
            $ansCfile = null;
        }

        
        if ($ans_di = $request->file('ans_di')) {
            $ansDfile = rand(10, 100) . time().'.'.$ans_di->getClientOriginalExtension();
            $ansDlocation = public_path('/uploads/livecontest/'. $ansDfile);
            Image::make($ans_di)->resize(300, 300)->save($ansDlocation);
        }else{
            $ansDfile = null;
        }

        $fileImage = null;
        DB::beginTransaction();
        try {
            $data = LiveContest::create($request->except('user_id', 'g_image', 'f_image', 'end_date', 'ans_ai', 'ans_bi', 'ans_ci', 'ans_di')+
                [
                    'g_image' => $fileImage,
                    'f_image' => $ffilename,
                    'ans_ai' => $ansAfile,
                    'ans_bi' => $ansBfile,
                    'ans_ci' => $ansCfile,
                    'ans_di' => $ansDfile,
                    'end_date' => $ed,
                    'user_id' => Auth::user()->id
                ]);
            if ($data) {
                if ($gfile != null) {
                    foreach ($gfiles as $file) {
                        $gfileimage = rand(10, 100) . time().'.'.$file->getClientOriginalExtension();
                        $glocationImage = public_path('/uploads/livecontest/'. $gfileimage);
                        Image::make($file)->resize(512, 512)->save($glocationImage);
                        $imageGallery = new LiveImage;
                        $imageGallery->live_contest_id = $data->id;
                        $imageGallery->live_image_gallery = $gfileimage;
                        $imageGallery->save();
                    }
                }
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json($e);
        }
        toastr()->success('Live contest created successfully.');
        return redirect()->route('live-competition.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.ticket.suspend');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contest = LiveContest::find($id);
        return view('backend.ticket.edit', compact('contest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function upcomingCompetition()
    {
        $upcomingcontests = UpcomingContest::all();
        return view('backend.ticket.upcomingCompetition', compact('upcomingcontests'));
    }

    public function upcomingCompetitionCreate()
    {
        return view('backend.ticket.upcomingCompetitionCreate');
    }

    public function upcomingCompetitionStore(Request $request)
    {
        //dd($request->all());
        $date = $request->start_date;
        $start = date('Y-m-d H:i:s', strtotime($date));

        $gfiles = $request->file('g_image');
        $gfile = $request->hasFile('g_image');
        
        if ($f_image = $request->file('f_image')) {
            $ffilename = rand(10, 100) . time().'.'.$f_image->getClientOriginalExtension();
            $flocation = public_path('/uploads/upcomingcontest/'. $ffilename);
            Image::make($f_image)->resize(512, 512)->save($flocation);
        }else{
            $ffilename = null;
        }

        
        if ($ans_ai = $request->file('ans_ai')) {
            $ansAfile = rand(10, 100) . time().'.'.$ans_ai->getClientOriginalExtension();
            $ansAlocation = public_path('/uploads/upcomingcontest/'. $ansAfile);
            Image::make($ans_ai)->resize(300, 300)->save($ansAlocation);
        }else{
            $ansAfile = null;
        }

        
        if ($ans_bi = $request->file('ans_bi')) {
            $ansBfile = rand(10, 100) . time().'.'.$ans_bi->getClientOriginalExtension();
            $ansBlocation = public_path('/uploads/upcomingcontest/'. $ansBfile);
            Image::make($ans_bi)->resize(300, 300)->save($ansBlocation);
        }else{
            $ansBfile = null;
        }

        
        if ($ans_ci = $request->file('ans_ci')) {
            $ansCfile = rand(10, 100) . time().'.'.$ans_ci->getClientOriginalExtension();
            $ansClocation = public_path('/uploads/upcomingcontest/'. $ansCfile);
            Image::make($ans_ci)->resize(300, 300)->save($ansClocation);
        }else{
            $ansCfile = null;
        }

        
        if ($ans_di = $request->file('ans_di')) {
            $ansDfile = rand(10, 100) . time().'.'.$ans_di->getClientOriginalExtension();
            $ansDlocation = public_path('/uploads/upcomingcontest/'. $ansDfile);
            Image::make($ans_di)->resize(300, 300)->save($ansDlocation);
        }else{
            $ansDfile = null;
        }

        $fileImage = null;
        DB::beginTransaction();
        try {
            $data = UpcomingContest::create($request->except('user_id', 'g_image', 'f_image', 'start_date', 'ans_ai', 'ans_bi', 'ans_ci', 'ans_di')+
                [
                    'g_image' => $fileImage,
                    'f_image' => $ffilename,
                    'ans_ai' => $ansAfile,
                    'ans_bi' => $ansBfile,
                    'ans_ci' => $ansCfile,
                    'ans_di' => $ansDfile,
                    'start_date' => $start,
                    'user_id' => Auth::user()->id
                ]);
            if ($data) {
                if ($gfile != null) {
                    foreach ($gfiles as $file) {
                        $gfileimage = rand(10, 100) . time().'.'.$file->getClientOriginalExtension();
                        $glocationImage = public_path('/uploads/upcomingcontest/'. $gfileimage);
                        Image::make($file)->resize(512, 512)->save($glocationImage);
                        $imageGallery = new UpcomingImage;
                        $imageGallery->upcoming_contest_id = $data->id;
                        $imageGallery->upcoming_image_gallery = $gfileimage;
                        $imageGallery->save();
                    }
                }
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json($e);
        }
        toastr()->success('Upcoming contest created successfully.');
        return redirect()->route('upcoming-competition')
                        ->with('success', 'Upcoming contest created successfully.');
    }

    public function toLive()
    {
        return view('backend.ticket.tolive');
    }

    public function allpostsave(Request $request) 
    {
        $data = $request->data['posts'];
        foreach ($data as $key => $value) {
            foreach ($value['ticket_no'] as $k => $ticket) {
                $t = new TicketBook;
                $t->user_id = Auth::user()->id;
                $t->live_contest_id = $value['id'];
                $t->ticket_number = $ticket;
                $t->save();
            }
            
        }
        return response()->json($t);
    }

    public function contestbook(Request $request) 
    {
        $data = TicketBook::where('live_contest_id', $request->livecontestId)->get();
        return response()->json($data);
    }

    public function ticketEdit($id) 
    {
        return view('frontend.pages.ticketEdit', compact('id'));
    }
}
