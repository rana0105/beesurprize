@extends('backend.layouts.app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-md-6">
                <h6 class="m-0 font-weight-bold text-success">
                    Create Testmonial
                </h6>
            </div>
            <div class="col-md-6" style="text-align: right">
                <h6 class="m-0 font-weight-bold text-success">
                    <a href="{{ route('customer-testmonial') }}">
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
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" file="true">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="title">
                    Title
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title">
                    </input>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="inputPassword">
                    Comment
                </label>
                <div class="col-sm-10">
                    <textarea name="detail" id="detail" cols="30" rows="5" class="form-control"></textarea>
                    </input>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="title">
                    Customer
                </label>
                <div class="col-sm-10">
                    <select class="form-control" id="makers" name="makers">
                        <option value="">Sumrat</option>
                        <option value="">Mahin</option>
                        <option value="">Boby</option>
                    </select>
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