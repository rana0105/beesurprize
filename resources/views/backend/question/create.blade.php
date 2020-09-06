@extends('backend.layouts.app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-md-6">
                <h6 class="m-0 font-weight-bold text-success">
                    Question Create
                </h6>
            </div>
            <div class="col-md-6" style="text-align: right">
                <h6 class="m-0 font-weight-bold text-success">
                    <a href="{{ route('questions.index') }}">
                        <i aria-hidden="true" class="fas fa-sign-out-alt fa-sm fa-fw mr-2">
                        </i>
                        Back
                    </a>
                </h6>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>
                Whoops!
            </strong>
            There were some problems with your input.
            <br>
                <br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                </br>
            </br>
        </div>
        @endif
        <form action="{{ route('questions.store') }}" enctype="multipart/form-data" file="true" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="question">
                                    Question
                                </label>
                                <input class="form-control" id="question" name="question" type="text">
                                </input>
                            </div>
                            <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a aria-controls="pills-home" aria-selected="true" class="nav-link active" data-toggle="pill" href="#pills-home" id="pills-home-tab" role="tab">
                                        Text Ans
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a aria-controls="pills-profile" aria-selected="false" class="nav-link" data-toggle="pill" href="#pills-profile" id="pills-profile-tab" role="tab">
                                        Image Ans
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div aria-labelledby="pills-home-tab" class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="ans_a">
                                            Ans A
                                        </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="ans_a" name="ans_a" type="text">
                                            </input>
                                        </div>
                                        <label class="col-sm-2 col-form-label">
                                            <input class="form-check-input" type="radio" name="correct_a" value="A">
                                        </label>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="ans_b">
                                            Ans B
                                        </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="ans_b" name="ans_b" type="text">
                                            </input>
                                        </div>
                                        <label class="col-sm-2 col-form-label">
                                            <input class="form-check-input" type="radio" name="correct_a" value="B">
                                        </label>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="ans_c">
                                            Ans C
                                        </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="ans_c" name="ans_c" type="text">
                                            </input>
                                        </div>
                                        <label class="col-sm-2 col-form-label">
                                            <input class="form-check-input" type="radio" name="correct_a" value="C">
                                        </label>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="ans_d">
                                            Ans D
                                        </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="ans_d" name="ans_d" type="text">
                                            </input>
                                        </div>
                                        <label class="col-sm-2 col-form-label">
                                            <input class="form-check-input" type="radio" name="correct_a" value="D">
                                        </label>
                                    </div>
                                </div>
                                <div aria-labelledby="pills-profile-tab" class="tab-pane fade" id="pills-profile" role="tabpanel">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="ans_ai">
                                            Ans A
                                        </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="ans_ai" name="ans_ai" type="file">
                                            </input>
                                        </div>
                                        <label class="col-sm-2 col-form-label">
                                            <input class="form-check-input" type="radio" name="correct_a" value="A">
                                        </label>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="ans_bi">
                                            Ans B
                                        </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="ans_bi" name="ans_bi" type="file">
                                            </input>
                                        </div>
                                        <label class="col-sm-2 col-form-label">
                                            <input class="form-check-input" type="radio" name="correct_a" value="B">
                                        </label>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="ans_ci">
                                            Ans C
                                        </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="ans_ci" name="ans_ci" type="file">
                                            </input>
                                        </div>
                                        <label class="col-sm-2 col-form-label">
                                            <input class="form-check-input" type="radio" name="correct_a" value="C">
                                        </label>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="ans_di">
                                            Ans D
                                        </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="ans_di" name="ans_di" type="file">
                                            </input>
                                        </div>
                                        <label class="col-sm-2 col-form-label">
                                            <input class="form-check-input" type="radio" name="correct_a" value="D">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" style="margin-top: 15px;" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('style')
<style>
    .photo-left {
        float: left; 
    }
</style>
@endsection
@section('script')
</script>
<script>
    $(document).ready(function(){
        
    });
</script>
@endsection

            
