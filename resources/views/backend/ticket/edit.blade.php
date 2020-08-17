@extends('backend.layouts.app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-md-6">
                <h6 class="m-0 font-weight-bold text-success">
                    Live Competitions Update
                </h6>
            </div>
            <div class="col-md-6" style="text-align: right">
                <h6 class="m-0 font-weight-bold text-success">
                    <a href="{{ route('live-competition.index') }}">
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
        <form action="{{ route('live-competition.store') }}" enctype="multipart/form-data" file="true" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">
                                    Title
                                </label>
                                <input class="form-control" id="title" name="title" type="text" value="Server Requirements">
                                </input>
                            </div>
                            <div class="form-group">
                                <label for="p_details">
                                    Prize Details
                                </label>
                                <textarea class="form-control" id="p_details" name="p_details" cols="30" rows="4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</textarea>
                            </div>
                            <div class="form-group">
                                <label for="c_details">
                                    Competitions Details
                                </label>
                                <textarea class="form-control" id="c_details" name="c_details" cols="30" rows="4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</textarea>
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
                            <p>
                              <a class="btn btn-success" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Specification
                              </a>
                            </p>
                            <div class="collapse" id="collapseExample">
                              <div class="card card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                      <label for="mile">Miles</label>
                                      <input type="text" class="form-control" id="mile" placeholder="Mile">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="speed">Speed</label>
                                      <input type="text" class="form-control" id="speed" placeholder="Speed">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="power">Power</label>
                                      <input type="text" class="form-control" id="power" placeholder="Power">
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-4">
                                      <label for="displacement">Displacement</label>
                                      <input type="text" class="form-control" id="displacement" placeholder="Displacement">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="bhp">Bhp</label>
                                      <input type="text" class="form-control" id="bhp" placeholder="Bhp">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="year">Year</label>
                                      <input type="text" class="form-control" id="year" placeholder="Year">
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
                                <label for="contest_no">
                                    Contest No
                                </label>
                                <input class="form-control" id="contest_no" name="contest_no" type="text" value="T20">
                                </input>
                            </div>
                            <div class="form-group">
                                <label for="amount">
                                    Ticket Amount
                                </label>
                                <input class="form-control" id="amount" name="amount" type="text" value="2000">
                                </input>
                            </div>
                            <div class="form-group">
                                <label for="price">
                                    Ticket Price
                                </label>
                                <input class="form-control" id="price" name="price" type="text" value="120">
                                </input>
                            </div>
                            <div class="form-group">
                                <label for="prize_type">
                                    Prize Type
                                </label>
                                <select class="form-control" id="prize_type" name="prize_type">
                                    <option value="">Bike</option>
                                    <option value="">Car</option>
                                    <option value="">Cycle</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="makers">
                                    Makers
                                </label>
                                <select class="form-control" id="makers" name="makers">
                                    <option value="">BMW</option>
                                    <option value="">Ferari</option>
                                    <option value="">Honda</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="c_details">
                                    Competitions End Date
                                </label>
                                <input class="form-control" id="c_details" name="c_details" type="date" value="07/08/2020">
                                </input>
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
            groupClassName:   'col-md-2 col-sm-2 col-xs-4 photo-left',
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
            groupClassName:   'col-md-6 col-sm-6 col-xs-6',
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
