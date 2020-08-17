@extends('frontend.layouts.main')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6 offset-md-3 col-sm-12">
						<div id="countdown">
							<p>This competition starts in:</p>
							<div id='tiles'></div>
							<div class="labels">
							    <li>Days</li>
							    <li>Hours</li>
							    <li>Minutes</li>
							    <li>Seconds</li>
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
									      	<div class="carousel-item active"> 
									      		<img src="http://placehold.it/1600x700?text=Product+01"> 
									      	</div>
									      	<div class="carousel-item"> 
									      		<img src="http://placehold.it/1600x700?text=Product+02"> 
									      	</div>
									      	<div class="carousel-item"> 
									      		<img src="http://placehold.it/1600x700?text=Product+03"> 
									      	</div>
									      	<div class="carousel-item"> 
									      		<img src="http://placehold.it/1600x700?text=Product+04"> 
									      	</div>
									      	<div class="carousel-item"> 
									      		<img src="http://placehold.it/1600x700?text=Product+05"> 
									      	</div>
									      	<div class="carousel-item"> 
									      		<img src="http://placehold.it/1600x700?text=Product+06"> 
									      	</div>
									    </div>
									</div>
								  	<div class="clearfix">
								    <div id="thumbcarousel" class="carousel slide" data-interval="false">
								      	<div class="carousel-inner">
								        	<div class="carousel-item active">
								          		<div data-target="#carousel" data-slide-to="0" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+01"></div>
								          		<div data-target="#carousel" data-slide-to="1" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+02"></div>
								          		<div data-target="#carousel" data-slide-to="2" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+03"></div>
								        	</div>
								        	<div class="carousel-item">
								          		<div data-target="#carousel" data-slide-to="3" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+04"></div>
								          		<div data-target="#carousel" data-slide-to="4" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+05"></div>
								          		<div data-target="#carousel" data-slide-to="5" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+06"></div>
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
								<h3 class="prize-name">The Breeze Zodiac IX</h3>
								<h2 class="ticket-price">$4.99 <span>per ticket</span></h2>
								<a href="#" class="btn btn-ticket" data-toggle="modal" data-target="#pollModal">Participate Poll</a>
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
					    <a class="nav-item nav-link active" id="nav-prizedesc-tab" data-toggle="tab" href="#nav-prizedesc" role="tab" aria-controls="nav-prizedesc" aria-selected="true">prize details</a>
					    <a class="nav-item nav-link" id="nav-comdet-tab" data-toggle="tab" href="#nav-comdet" role="tab" aria-controls="nav-comdet" aria-selected="false">Competition details</a>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-prizedesc" role="tabpanel" aria-labelledby="nav-prizedesc-tab">
							<div class="contest-detail-content">
								<h3>vehicle overview</h3>
						  		<p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
						  		<h3>specifications</h3>
						  		<div class="prize-spec">
						  			<div class="card mb-1">
										<div class="row no-gutters">
										    <div class="col-md-4">
										      	<img src="img/mph.png" class="card-img spec-icon" alt="...">
										    </div>
										    <div class="col-md-8">
										      	<div class="card-body">
										        	<h5 class="card-title spec-title">0-62mph</h5>
										        	<p class="card-text spec-text">4.0 secs</p>
										      	</div>
										    </div>
										</div>
									</div>
									<div class="card mb-1">
										<div class="row no-gutters">
										    <div class="col-md-4">
										      	<img src="img/speed.png" class="card-img spec-icon" alt="...">
										    </div>
										    <div class="col-md-8">
										      	<div class="card-body">
										        	<h5 class="card-title spec-title">Top Speed</h5>
										        	<p class="card-text spec-text">181 mph</p>
										      	</div>
										    </div>
										</div>
									</div>
									<div class="card mb-1">
										<div class="row no-gutters">
										    <div class="col-md-4">
										      	<img src="img/power.png" class="card-img spec-icon" alt="...">
										    </div>
										    <div class="col-md-8">
										      	<div class="card-body">
										        	<h5 class="card-title spec-title">Power</h5>
										        	<p class="card-text spec-text">542 bhp</p>
										      	</div>
										    </div>
										</div>
									</div>
									<div class="card mb-1">
										<div class="row no-gutters">
										    <div class="col-md-4">
										      	<img src="img/displacement.png" class="card-img spec-icon" alt="...">
										    </div>
										    <div class="col-md-8">
										      	<div class="card-body">
										        	<h5 class="card-title spec-title">Displacement</h5>
										        	<p class="card-text spec-text">4.0 ltr</p>
										      	</div>
										    </div>
										</div>
									</div>
									<div class="card mb-1">
										<div class="row no-gutters">
										    <div class="col-md-4">
										      	<img src="img/bhp.png" class="card-img spec-icon" alt="...">
										    </div>
										    <div class="col-md-8">
										      	<div class="card-body">
										        	<h5 class="card-title spec-title">bhp</h5>
										        	<p class="card-text spec-text">691</p>
										      	</div>
										    </div>
										</div>
									</div>
									<div class="card mb-1">
										<div class="row no-gutters">
										    <div class="col-md-4">
										      	<img src="img/year.png" class="card-img spec-icon" alt="...">
										    </div>
										    <div class="col-md-8">
										      	<div class="card-body">
										        	<h5 class="card-title spec-title">Year</h5>
										        	<p class="card-text spec-text">2019</p>
										      	</div>
										    </div>
										</div>
									</div>
						  		</div>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-comdet" role="tabpanel" aria-labelledby="nav-comdet-tab">
							Content
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection