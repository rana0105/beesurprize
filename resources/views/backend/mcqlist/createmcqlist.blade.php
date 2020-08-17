@extends('backend.layouts.app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-md-6">
                <h6 class="m-0 font-weight-bold text-success">
                    Create MCQ
                </h6>
            </div>
            <div class="col-md-6" style="text-align: right">
                <h6 class="m-0 font-weight-bold text-success">
                    <a href="{{ route('mcqlist') }}">
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
        <form action="{{ route('blogs.store') }}" enctype="multipart/form-data" file="true" method="POST">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="title">
                    Question
                </label>
                <div class="col-sm-6">
                    <input class="form-control" id="title" name="title" type="text">
                    </input>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
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
                                <label class="col-sm-2 col-form-label" for="title">
                                    Ans D
                                </label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="title" name="title" type="text">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="title">
                                    Ans C
                                </label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="title" name="title" type="text">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="title">
                                    Ans B
                                </label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="title" name="title" type="text">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="title">
                                    Ans D
                                </label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="title" name="title" type="text">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="title">
                                    Select Ans
                                </label>
                                <div class="col-sm-6">
                                    <select class="form-control" id="makers" name="makers">
                                        <option value="">A</option>
                                        <option value="">B</option>
                                        <option value="">C</option>
                                        <option value="">D</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div aria-labelledby="pills-profile-tab" class="tab-pane fade" id="pills-profile" role="tabpanel">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="title">
                                    Ans A
                                </label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="title" name="title" type="file">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="title">
                                    Ans B
                                </label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="title" name="title" type="file">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="title">
                                    Ans C
                                </label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="title" name="title" type="file">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="title">
                                    Ans D
                                </label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="title" name="title" type="file">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="title">
                                    Select Ans
                                </label>
                                <div class="col-sm-6">
                                    <select class="form-control" id="makers" name="makers">
                                        <option value="">A</option>
                                        <option value="">B</option>
                                        <option value="">C</option>
                                        <option value="">D</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button class="btn btn-success" type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('script')
<script>
    // tinymce.init({
   //   selector: 'textarea#detail'
   // });
</script>
@endsection
