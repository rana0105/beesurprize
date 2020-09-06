@extends('frontend.layouts.main')
@section('content')

	<div class="container">
		<div class="contest-heading">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-sm-12">
					<div class="contest-title">
						<h1>current contest</h1>
						<p>See all of our current contest</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<live-contest></live-contest>
		</div>
	</div>

@endsection