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
			<div class="col-lg-2 col-md-4">
				<div class="form-group filering-element">
	                <select class="form-control">
	                    <option>Sort by</option>
	                    <option>Newest</option>
	                    <option>Oldest</option>
	                    <option>Price high to low</option>
	                    <option>Price low to high</option>
	                </select>
	            </div>
			</div>
			<div class="col-lg-2 col-md-4">
				<div class="form-group filering-element">
	                <select class="form-control prize-brand">
	                    <option>Prize</option>
	                    <option value="Car">Car</option>
	                    <option value="Bike">Bike</option>
	                    <option value="Desktop">Desktop</option>
	                    <option value="Money">Money</option>
	                    <option value="Cycle">Cycle</option>
	                </select>
	            </div>
			</div>
			<div class="col-lg-2 col-md-4">
				<div class="form-group filering-element">
	                <select class="prize-brand form-control">
	                    <option>All makers</option>
	                    <option value="BMW">BMW</option>
	                    <option value="Ferrari">Ferrari</option>
	                    <option value="Honda">Honda</option>
	                    <option value="Yamaha">Yamaha</option>
	                    <option value="Suzuki">Suzuki</option>
	                </select>
	            </div>
			</div>
			<div class="col-lg-2 col-md-4">
				<div class="form-group">
					<div class="rangewrapper">
					  	<div class="sliderfill">
					  		<input class="customrange" type="range" min="0" max="100" value="30">
					  	</div>
					  	<div class="sliderthumb"></div>
					  	<div class="slidervalue">50</div>
					</div>
				</div>
			</div>
            <div class="col-lg-2 col-md-4">
                <div class="form-group">
                    <div class="wish-filtering">
                        <button><i class="fas fa-heart"></i></button>
                        <button><i class="fas fa-history"></i></button>
                    </div>
                </div>
            </div>
			<div class="col-lg-2 col-md-4">
				<div class="form-group filering-element">
					<input type="search" class="form-control" placeholder="Search here">
				</div>
			</div>
            @if(sizeof($livecontests) > 0)
            @foreach($livecontests as $livecontest)
			<div class="col-lg-4 col-md-6">
                <div class="current-item">
                    <a href="{{ route('live.contest.detail', $livecontest->id) }}">
                        <div class="prize-img">
                            <img src="{{ asset('uploads/livecontest/'. $livecontest->f_image) }}">
                        </div>
                    </a>
                    <div class="fav-icon">
                        <a href="#"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="contest-no">
                        Contest No:<br><span>{{ $livecontest->contest_no }}</span>
                    </div>
                    @php
	                  $date = $livecontest->end_date;
	                  $ed = date('Y-m-d', strtotime($date));
	                  $currenDate = date('Y-m-d');
	                  $currenDate = \Carbon\Carbon::createFromFormat('Y-m-d', $currenDate);
	                  $ed = \Carbon\Carbon::createFromFormat('Y-m-d', $ed);
	                  $diff = $currenDate->diffInDays($ed);
	                  @endphp
                    <div class="ticket-detail">
                        <a href="{{ route('live.contest.detail', $livecontest->id) }}" class="prize-name">{{ $livecontest->title }}</a>
                        <p class="ticket-price">${{ $livecontest->price }}</p>
                        <hr>
                        <div class="ticket-info">
                            <i class="far fa-clock"></i> {{ $diff }}d  <span class="bar">|</span>
                            <span class="float-right"><i class="fas fa-ticket-alt"></i> {{ $livecontest->amount }} <b>Remaining</b></span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-lg-4 col-md-6">
                Data not found.
            </div>
            @endif
		</div>
	</div>

@endsection