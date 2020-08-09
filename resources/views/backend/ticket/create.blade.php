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
                    <input class="form-control" id="f_image" name="f_image" type="file">
                    </input>
                </div>
                <div class="form-group col-md-6">
                    <label for="g_image">
                        Gallery Image
                    </label>
                    <input class="form-control" id="g_image" name="g_image" type="file">
                    </input>
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
    tinymce.init({
     selector: 'textarea#detail'
   });
</script>
@endsection
