@extends('backend.layouts.app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-md-6">
                <h6 class="m-0 font-weight-bold text-success">
                    Live Competitions
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
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="prize_type">
                                    Status
                                </label>
                                <select class="form-control" id="prize_type" name="prize_type">
                                    <option value="">Active</option>
                                    <option value="">Suspend</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <button class="btn btn-success" type="submit" style="margin-top: 15px">
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
        
    });
</script>
@endsection
