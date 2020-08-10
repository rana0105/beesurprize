@extends('backend.layouts.app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-md-6">
                <h6 class="m-0 font-weight-bold text-success">
                    Create Ticket
                </h6>
            </div>
            <div class="col-md-6" style="text-align: right">
                <h6 class="m-0 font-weight-bold text-success">
                    <a href="{{ route('tickets.index') }}">
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
        <form action="{{ route('tickets.store') }}" enctype="multipart/form-data" file="true" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="title">
                        Title
                    </label>
                    <input class="form-control" id="title" name="title" type="text">
                    </input>
                </div>
                <div class="form-group col-md-6">
                    <label for="contest_no">
                        Contest No
                    </label>
                    <input class="form-control" id="contest_no" name="contest_no" type="text">
                    </input>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="amount">
                        Ticket Amount
                    </label>
                    <input class="form-control" id="amount" name="amount" type="text">
                    </input>
                </div>
                <div class="form-group col-md-6">
                    <label for="price">
                        Ticket Price
                    </label>
                    <input class="form-control" id="price" name="price" type="text">
                    </input>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="p_details">
                        Prize Details
                    </label>
                    <input class="form-control" id="p_details" name="p_details" type="text">
                    </input>
                </div>
                <div class="form-group col-md-6">
                    <label for="c_details">
                        Competitions Details
                    </label>
                    <input class="form-control" id="c_details" name="c_details" type="text">
                    </input>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="p_details">
                        Competitions Create Date
                    </label>
                    <input class="form-control" id="p_details" name="p_details" type="date">
                    </input>
                </div>
                <div class="form-group col-md-6">
                    <label for="c_details">
                        Competitions End Date
                    </label>
                    <input class="form-control" id="c_details" name="c_details" type="date">
                    </input>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="f_image">
                        Featured Image
                    </label>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="f_image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
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
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12 text-center">
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
            groupClassName:   'col-md-4 col-sm-4 col-xs-6 photo-left',
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
            groupClassName:   'col-md-4 col-sm-4 col-xs-6',
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
