@extends('frontend.layouts.main')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="faq-page">
					<h6>You Have Questions</h6>
					<h1>WE HAVE ANSWERS</h1>
					<p>Do not hesitate to send us an email if you can't find what you are looking for.</p>
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					  	<li class="nav-item">
					    	<a class="default-btn nav-link active" id="pills-faq1-tab" data-toggle="pill" href="#pills-faq1" role="tab" aria-controls="pills-faq1" aria-selected="true">Tickets</a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="default-btn nav-link" id="pills-faq2-tab" data-toggle="pill" href="#pills-faq2" role="tab" aria-controls="pills-faq2" aria-selected="false">Banking</a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="default-btn nav-link" id="pills-faq3-tab" data-toggle="pill" href="#pills-faq3" role="tab" aria-controls="pills-faq3" aria-selected="false">Winning</a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="default-btn nav-link" id="pills-faq4-tab" data-toggle="pill" href="#pills-faq4" role="tab" aria-controls="pills-faq4" aria-selected="false">Results & Alerts</a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="default-btn nav-link" id="pills-faq5-tab" data-toggle="pill" href="#pills-faq5" role="tab" aria-controls="pills-faq5" aria-selected="false">About Surprize</a>
					  	</li>
					</ul>
				</div>
				<div class="tab-content" id="pills-tabContent">
				  	<div class="tab-pane fade show active" id="pills-faq1" role="tabpanel" aria-labelledby="pills-faq1-tab">
						<div class="accordion">
						    <div class="accordion-item">
						      <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why is the moon sometimes out during the day?</span><span class="icon" aria-hidden="true"></span></button>
						      <div class="accordion-content">
						        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
						      </div>
						    </div>
						    <div class="accordion-item">
						      <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Why is the sky blue?</span><span class="icon" aria-hidden="true"></span></button>
						      <div class="accordion-content">
						        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
						      </div>
						    </div>
						    <div class="accordion-item">
						      <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Will we ever discover aliens?</span><span class="icon" aria-hidden="true"></span></button>
						      <div class="accordion-content">
						        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
						      </div>
						    </div>
						    <div class="accordion-item">
						      <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">How much does the Earth weigh?</span><span class="icon" aria-hidden="true"></span></button>
						      <div class="accordion-content">
						        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
						      </div>
						    </div>
						    <div class="accordion-item">
						      <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">How do airplanes stay up?</span><span class="icon" aria-hidden="true"></span></button>
						      <div class="accordion-content">
						        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
						      </div>
						    </div>
						  </div>
				  	</div>
				  	<div class="tab-pane fade" id="pills-faq2" role="tabpanel" aria-labelledby="pills-faq2-tab">
				  		<div class="accordion">
						    <div class="accordion-item">
						      <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why is the moon sometimes out during the day?</span><span class="icon" aria-hidden="true"></span></button>
						      <div class="accordion-content">
						        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
						      </div>
						    </div>
						    <div class="accordion-item">
						      <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Why is the sky blue?</span><span class="icon" aria-hidden="true"></span></button>
						      <div class="accordion-content">
						        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
						      </div>
						    </div>
						</div>
				  	</div>
				  	<div class="tab-pane fade" id="pills-faq3" role="tabpanel" aria-labelledby="pills-faq3-tab">
				  		<div class="accordion">
						    <div class="accordion-item">
						      <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why is the moon sometimes out during the day?</span><span class="icon" aria-hidden="true"></span></button>
						      <div class="accordion-content">
						        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
						      </div>
						    </div>
						</div>
				  	</div>
				  	<div class="tab-pane fade" id="pills-faq4" role="tabpanel" aria-labelledby="pills-faq4-tab">
				  		<div class="accordion">
						    <div class="accordion-item">
						      <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why is the moon sometimes out during the day?</span><span class="icon" aria-hidden="true"></span></button>
						      <div class="accordion-content">
						        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
						      </div>
						    </div>
						</div>
				  	</div>
				  	<div class="tab-pane fade" id="pills-faq5" role="tabpanel" aria-labelledby="pills-faq5-tab">
				  		<div class="accordion">
						    <div class="accordion-item">
						      <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why is the moon sometimes out during the day?</span><span class="icon" aria-hidden="true"></span></button>
						      <div class="accordion-content">
						        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
						      </div>
						    </div>
						</div>
				  	</div>
				</div>
			</div>
		</div>
	</div>

@endsection