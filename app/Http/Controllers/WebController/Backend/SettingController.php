<?php

namespace App\Http\Controllers\WebController\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Question;
use App\Model\Backend\WinnerList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function siteSetting(Request $request)
    {
        $permissions = Permission::orderBy('id', 'DESC')->get();
        return view('backend.sitesetting.sitesetting', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSetting()
    {
        return view('backend.sitesetting.createSetting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function customerTestmonial()
    {
        return view('backend.testmonial.testmonial');
    }

    public function createcustomerTestmonial()
    {
        return view('backend.testmonial.testmonialCreate');
    }

    public function emailTemplate()
    {
        return view('backend.emailtemplate.emailtemplate');
    }

    public function createTemplate()
    {
        return view('backend.emailtemplate.createTemplate');
    }

    public function mcqList()
    {
        return view('backend.mcqlist.mcqlist');
    }

    public function createMcqList()
    {
        return view('backend.mcqlist.createmcqlist');
    }

    public function competitionlist()
    {
        $winnerlists = WinnerList::with('userList', 'questionList')->where('status', 'Won')
        ->get();
        return view('backend.mcqlist.competitionList', compact('winnerlists'));
    }

    public function questionAns(Request $request)
    {
        $checkAns = Question::where('id', $request->question_id)->first();
        if ($checkAns->correct_a == $request->question_ans) {
            $status = 'Won';
        }else{
            $status = 'Loss';
        }
        $data = WinnerList::create($request->except('user_id', 'status')+
                [
                    'user_id' => Auth::user()->id,
                    'status' => $status
                ]);
        toastr()->success('Quiz test created successfully.');
        return redirect()->route('checkout');
    }

    public function suscompetitionlist()
    {
        return view('backend.mcqlist.suscompetitionlist');
    }
}
