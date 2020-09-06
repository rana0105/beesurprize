@extends('backend.layouts.app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-md-6">
                <h6 class="m-0 font-weight-bold text-success">
                    Brand Create
                </h6>
            </div>
            <div class="col-md-6" style="text-align: right">
                <h6 class="m-0 font-weight-bold text-success">
                    <a href="{{ route('brand.index') }}">
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
        <form action="{{ route('brand.store') }}" enctype="multipart/form-data" file="true" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">
                                    Name
                                </label>
                                <input class="form-control" id="name" name="name" type="text">
                                </input>
                            </div>
                            <div class="form-group">
                                <label for="status">
                                    Status
                                </label>
                                <select class="form-control" name="status" id="status">
                                    <option value="1">Active</option>
                                    <option value="1">Deactive</option>
                                </select>
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

            
