@extends('frontend.layouts.main')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6 offset-md-3 col-sm-12">
						<div id="countdown">
							<p>This competition ends in:</p>
							<div>
								<counter :livecontest-id="{{ $livecontest->id }}"></counter>
							</div>
						</div>
					</div>
				</div>
				<div class="contest-detail">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="contest-detail-left">
								<div class="product-slider">
									<div id="carousel" class="carousel slide" data-ride="carousel">
									    <div class="carousel-inner">
									    		@foreach($livecontest->liveImageGallery as $key => $slider1)
									      	<div id="carouselid" class="carousel-item {{$key == 0 ? 'active' : '' }}"> 
									      		<img src="{{ asset('uploads/livecontest/'. $slider1->live_image_gallery) }}"> 
									      	</div>
									      	@endforeach
									    </div>
									</div>
								  	<div class="clearfix">
								    <div id="thumbcarousel" class="carousel slide" data-interval="false">
								      	<div class="carousel-inner">
								        	<div class="carousel-item active">
								        		@foreach($livecontest->liveImageGallery as $key => $slider2)
									      		<div data-target="#carouselid" data-slide-to="0" class="thumb">
									      			<img src="{{ asset('uploads/livecontest/'. $slider2->live_image_gallery) }}">
									      		</div> 
									      		@endforeach
									      	</div>
								      	</div>
								      	<!-- /carousel-inner --> 
								      	<a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev"> <i class="fas fa-angle-left"></i> </a> <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next"><i class="fas fa-angle-right"></i> </a> 
								  	</div>
								    <!-- /thumbcarousel --> 
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="contest-detail-right">
								<h6>Enter now for a chance to win</h6>
								<h3 class="prize-name">{{ $livecontest->title }}</h3>
								<small>This competition has a maximum of {{ $livecontest->amount }} entries.</small>
								<p class="contest-no">Contest No: <span>{{ $livecontest->contest_no }}</span></p>
								<span>Tickets Sold</span> <br>
								<div class="starting-qty">{{ $count }}</div>
								<div class="total-qty">{{ $livecontest->amount }}</div>
								<div class="progress">
								  	<div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<small class="remaining-ticket"> Only {{ $livecontest->amount - $count }} remaining!</small>
								<h2 class="ticket-price">${{ $livecontest->price }} <span>per ticket</span></h2>
								@php $user = Auth::user(); @endphp
								<a href="#" class="btn btn-ticket" data-toggle="modal" data-target="#ticketSelectModal">buy tickets</a>
								<div class="social">
									<span>Share:</span>
								    <a href="#" id="share-wa" class="sharer button"><i class="fab fa-whatsapp"></i></a>
								  	<a href="#" id="share-fb" class="sharer button"><i class="fab fa-facebook-f"></i></a>
								  	<a href="#" id="share-tw" class="sharer button"><i class="fab fa-twitter"></i></a>
								  	<a href="#" id="share-li" class="sharer button"><i class="fab fa-linkedin-in"></i></a>
								  	<a href="#" id="share-em" class="sharer button"><i class="far fa-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="contest-detail-more">
					<nav class="nav nav-pills nav-justified">
					    <a class="nav-item nav-link active" id="nav-prizedesc-tab" data-toggle="tab" href="#nav-prizedesc" role="tab" aria-controls="nav-prizedesc" aria-selected="true">Prize details</a>
					    <a class="nav-item nav-link" id="nav-comdet-tab" data-toggle="tab" href="#nav-comdet" role="tab" aria-controls="nav-comdet" aria-selected="false">Competition details</a>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-prizedesc" role="tabpanel" aria-labelledby="nav-prizedesc-tab">
							<div class="contest-detail-content">
								<h3>vehicle overview</h3>
								{{-- {{ strip_tags( $livecontest->p_details ) }} --}}
						  		<p>{!! strip_tags( $livecontest->p_details ) !!}</p>
						  		<h3>specifications</h3>
						  		<div class="prize-spec">
						  			<div class="card mb-1">
										<div class="row no-gutters">
										    <div class="col-md-4">
										      	<img src="{{ asset('frontend/img/mph.png') }}" class="card-img spec-icon" alt="...">
										    </div>
										    <div class="col-md-8">
										      	<div class="card-body">
										        	<h5 class="card-title spec-title">0-62mph</h5>
										        	<p class="card-text spec-text">{{ $livecontest->mile }} secs</p>
										      	</div>
										    </div>
										</div>
									</div>
									<div class="card mb-1">
										<div class="row no-gutters">
										    <div class="col-md-4">
										      	<img src="{{ asset('frontend/img/speed.png') }}" class="card-img spec-icon" alt="...">
										    </div>
										    <div class="col-md-8">
										      	<div class="card-body">
										        	<h5 class="card-title spec-title">Top Speed</h5>
										        	<p class="card-text spec-text">{{ $livecontest->speed }} mph</p>
										      	</div>
										    </div>
										</div>
									</div>
									<div class="card mb-1">
										<div class="row no-gutters">
										    <div class="col-md-4">
										      	<img src="{{ asset('frontend/img/power.png') }}" class="card-img spec-icon" alt="...">
										    </div>
										    <div class="col-md-8">
										      	<div class="card-body">
										        	<h5 class="card-title spec-title">Power</h5>
										        	<p class="card-text spec-text">{{ $livecontest->power }} bhp</p>
										      	</div>
										    </div>
										</div>
									</div>
									<div class="card mb-1">
										<div class="row no-gutters">
										    <div class="col-md-4">
										      	<img src="{{ asset('frontend/img/displacement.png') }}" class="card-img spec-icon" alt="...">
										    </div>
										    <div class="col-md-8">
										      	<div class="card-body">
										        	<h5 class="card-title spec-title">Displacement</h5>
										        	<p class="card-text spec-text">{{ $livecontest->displacement }} ltr</p>
										      	</div>
										    </div>
										</div>
									</div>
									<div class="card mb-1">
										<div class="row no-gutters">
										    <div class="col-md-4">
										      	<img src="{{ asset('frontend/img/bhp.png') }}" class="card-img spec-icon" alt="...">
										    </div>
										    <div class="col-md-8">
										      	<div class="card-body">
										        	<h5 class="card-title spec-title">bhp</h5>
										        	<p class="card-text spec-text">{{ $livecontest->bhp }}</p>
										      	</div>
										    </div>
										</div>
									</div>
									<div class="card mb-1">
										<div class="row no-gutters">
										    <div class="col-md-4">
										      	<img src="{{ asset('frontend/img/year.png') }}" class="card-img spec-icon" alt="...">
										    </div>
										    <div class="col-md-8">
										      	<div class="card-body">
										        	<h5 class="card-title spec-title">Year</h5>
										        	<p class="card-text spec-text">{{ $livecontest->year }}</p>
										      	</div>
										    </div>
										</div>
									</div>
						  		</div>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-comdet" role="tabpanel" aria-labelledby="nav-comdet-tab">
							<div class="contest-detail-content">
								<p>{!! strip_tags( $livecontest->c_details ) !!}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--------- Ticket select modal --------->
<div class="modal" id="ticketSelectModal" tabindex="-1" role="dialog" aria-labelledby="ticketSelectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ticketSelectModalLabel">choose your ticket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{ asset('frontend/img/close.png') }}"></span>
                </button>
            </div>
            <div class="modal-body">
                <cart :livecontest-id="{{ $livecontest->id }}" ref="liveContest"></cart>
            </div>
            <div class="modal-footer">
                <a href="{{ route('live.contest') }}" class="btn default-btn">Continue Shopping</a>
                <a href="{{ route('cart') }}" class="btn btn-ticket">Go to Cart</a>
            </div>
        </div>
    </div>
</div>

	<!--------- login warning modal --------->
<div class="modal" id="logiWarningModal" tabindex="-1" role="dialog" aria-labelledby="logiWarningModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logiWarningModalLabel">Unauthorized users!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{ asset('frontend/img/close.png') }}"></span>
                </button>
            </div>
            <div class="modal-body">
                Please login your valid information!
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

@endsection