@extends('backend.layouts.app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-md-6">
                <h6 class="m-0 font-weight-bold text-success">
                    Upcoming Competitions
                </h6>
            </div>
            <div class="col-md-6" style="text-align: right">
                <h6 class="m-0 font-weight-bold text-success">
                    <a href="{{ route('upcoming-competition') }}">
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
        <form action="{{ route('upcoming-competition.create') }}" enctype="multipart/form-data" file="true" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">
                                    Title
                                </label>
                                <input class="form-control" id="title" name="title" type="text">
                                </input>
                            </div>
                            <div class="form-group">
                                <label for="p_details">
                                    Prize Details
                                </label>
                                <textarea class="form-control" cols="30" id="p_details" name="p_details" rows="3">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="c_details">
                                    Competitions Details
                                </label>
                                <textarea class="form-control" cols="30" id="c_details" name="c_details" rows="3">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">
                                    Question
                                </label>
                                <input class="form-control" id="title" name="title" type="text">
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
                                                <option value="">
                                                    A
                                                </option>
                                                <option value="">
                                                    B
                                                </option>
                                                <option value="">
                                                    C
                                                </option>
                                                <option value="">
                                                    D
                                                </option>
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
                                                <option value="">
                                                    A
                                                </option>
                                                <option value="">
                                                    B
                                                </option>
                                                <option value="">
                                                    C
                                                </option>
                                                <option value="">
                                                    D
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <a aria-controls="collapseExample" aria-expanded="false" class="btn btn-success" data-toggle="collapse" href="#collapseExample" role="button">
                                    Specification
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="mile">
                                                Miles
                                            </label>
                                            <input class="form-control" id="mile" placeholder="Mile" type="text">
                                            </input>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="speed">
                                                Speed
                                            </label>
                                            <input class="form-control" id="speed" placeholder="Speed" type="text">
                                            </input>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="power">
                                                Power
                                            </label>
                                            <input class="form-control" id="power" placeholder="Power" type="text">
                                            </input>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="displacement">
                                                Displacement
                                            </label>
                                            <input class="form-control" id="displacement" placeholder="Displacement" type="text">
                                            </input>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="bhp">
                                                Bhp
                                            </label>
                                            <input class="form-control" id="bhp" placeholder="Bhp" type="text">
                                            </input>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="year">
                                                Year
                                            </label>
                                            <input class="form-control" id="year" placeholder="Year" type="text">
                                            </input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="price">
                                    Ticket Price
                                </label>
                                <input class="form-control" id="price" name="price" type="text">
                                </input>
                            </div>
                            <div class="form-group">
                                <label for="prize_type">
                                    Prize Type
                                </label>
                                <select class="form-control" id="prize_type" name="prize_type">
                                    <option value="">
                                        Bike
                                    </option>
                                    <option value="">
                                        Car
                                    </option>
                                    <option value="">
                                        Cycle
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="makers">
                                    Makers
                                </label>
                                <select class="form-control" id="makers" name="makers">
                                    <option value="">
                                        BMW
                                    </option>
                                    <option value="">
                                        Ferari
                                    </option>
                                    <option value="">
                                        Honda
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="c_details">
                                    Competitions Start Date
                                </label>
                                <input class="form-control" id="c_details" name="c_details" type="date">
                                </input>
                            </div>
                            <div class="form-group">
                                <label for="g_image">
                                    Gallery Image
                                </label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="g_image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="f_image">
                                    Featured Image
                                </label>
                                <div class="row">
                                    <div class="col-md">
                                        <div id="f_image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12 text-center" style="margin-top: 10px;">
                <button class="btn btn-success" type="submit">
                    Submit
                </button>
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
<script src="{{ asset('js/spartan-multi-image-picker-min.js') }}">
</script>
<script>
    tinymce.init({
     selector: 'textarea#detail'
   });
    $(document).ready(function(){
        $("#g_image").spartanMultiImagePicker({
            fieldName:        'g_image[]',
            maxCount:         5,
            rowHeight:        '100px',
            groupClassName:   'col-md-4 col-sm-4 col-xs-4 photo-left',
            maxFileSize:      '',
            dropFileLabel : "Drop Here",
            onExtensionErr : function(index, file){
                console.log(index, file,  'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr : function(index, file){
                console.log(index, file,  'file size too big');
                alert('File size too big');
            }
        });
        $("#f_image").spartanMultiImagePicker({
            fieldName:        'f_image',
            maxCount:         1,
            rowHeight:        '100px',
            groupClassName:   'col-md-4 col-sm-4 col-xs-4',
            maxFileSize:      '',
            dropFileLabel : "Drop Here",
            onExtensionErr : function(index, file){
                console.log(index, file,  'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr : function(index, file){
                console.log(index, file,  'file size too big');
                alert('File size too big');
            }
        });
    });
</script>
@endsection
