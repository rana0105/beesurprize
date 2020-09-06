<?php

namespace App\Http\Controllers\WebController\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Question;
use Illuminate\Http\Request;
use Image;
use Input;
use Intervention\Image\ImageManager;
use Storage;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $questions = Question::latest()->paginate(5);
        return view('backend.question.index', compact('questions'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($ans_ai = $request->file('ans_ai')) {
            $ansAfile = rand(10, 100) . time().'.'.$ans_ai->getClientOriginalExtension();
            $ansAlocation = public_path('/uploads/question/'. $ansAfile);
            Image::make($ans_ai)->resize(150, 150)->save($ansAlocation);
        }else{
            $ansAfile = null;
        }

        
        if ($ans_bi = $request->file('ans_bi')) {
            $ansBfile = rand(10, 100) . time().'.'.$ans_bi->getClientOriginalExtension();
            $ansBlocation = public_path('/uploads/question/'. $ansBfile);
            Image::make($ans_bi)->resize(150, 150)->save($ansBlocation);
        }else{
            $ansBfile = null;
        }

        
        if ($ans_ci = $request->file('ans_ci')) {
            $ansCfile = rand(10, 100) . time().'.'.$ans_ci->getClientOriginalExtension();
            $ansClocation = public_path('/uploads/question/'. $ansCfile);
            Image::make($ans_ci)->resize(150, 150)->save($ansClocation);
        }else{
            $ansCfile = null;
        }

        
        if ($ans_di = $request->file('ans_di')) {
            $ansDfile = rand(10, 100) . time().'.'.$ans_di->getClientOriginalExtension();
            $ansDlocation = public_path('/uploads/question/'. $ansDfile);
            Image::make($ans_di)->resize(150, 150)->save($ansDlocation);
        }else{
            $ansDfile = null;
        }

        $question = Question::create($request->except('ans_ai', 'ans_bi', 'ans_ci', 'ans_di')+
            [
                'ans_ai' => $ansAfile,
                'ans_bi' => $ansBfile,
                'ans_ci' => $ansCfile,
                'ans_di' => $ansDfile
            ]);
        toastr()->success('Qiestion created successfully.');
        return redirect()->route('questions.index');
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
}
