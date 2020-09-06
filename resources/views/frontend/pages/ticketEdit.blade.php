@extends('frontend.layouts.main')
@section('content')
		<div class="row justify-content-md-center" style="margin-top: -17%">
			<div class="col-md-8" style="background-color: #fff; border: 1px solid; border-radius: 5px; margin-bottom: 10px;">
				<edit-ticket :ticket-id="{{ $id }}"></edit-ticket>
			<a class="btn btn-info justify-content-md-center" style="margin: 10px 0 10px; float: right;" href="{{ route('cart') }}">Go Cart</a>
			</div>
		</div>
@endsection