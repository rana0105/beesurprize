@extends('frontend.layouts.main')
@section('content')

	<div class="container">
		<div class="how-work-page">
			<div class="row">
				<div class="col-md-12">
					<div class="how-work-content">
						<a href="#" class="btn default-btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#promoVideoModal">
                            Watch Video <i class="fas fa-video"></i>
                        </a>
					</div>
				</div>
			</div>
		</div>
        <div class="row">
            <div class="col-md-9">
                <div class="steps-to-apply">
                    <h6>Need to know about</h6>
                    <h1>how to play</h1>
                    <small>Follow these 3 easy steps!</small>
                    <div class="steps-list">
                        <div>
                            <img src="img/step1.png">
                            <h6>choose</h6>
                            <p>Register to SUEPRIZE & Choose your contest</p>
                        </div>
                        <div>
                            <img src="img/step2.png">
                            <h6>buy</h6>
                            <p>Pick Your Numbers & Complete your Purchase</p>
                        </div>
                        <div>
                            <img src="img/step3.png">
                            <h6>win</h6>
                            <p>Start Dreaming, you're almost there</p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/home-illustration.png" class="stepsbg">
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="steps-to-apply">
                    <h6>Dream Big Play Small</h6>
                    <h1>Will you be the <br>next Winner?</h1>
                    <small>Playing the lottery is something many of us do to bring a bit of <br> excitement to our day-to-day routine.</small>
                    <p>Don't miss out! Next draw</p>
                    <a href="#" class="btn default-btn" style="text-transform: uppercase; padding-top: 0.7rem;">buy ticket now!</a>
                    <div class="last-month-statistics">
                        <div>
                            23<span>Winners For Last Month</span>
                        </div>
                        <div>
                            2837K<span>Tickets Sold</span>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/highlighted.png" class="highlightedbg">
        </div>
        <div class="row">
            <img src="img/helpbg.png" class="helpbg">
            <div class="offset-lg-4 col-lg-8">
                <div class="help-content">
                    <h6>You Have Questions</h6>
                    <h1>WE HAVE ANSWERS</h1>
                    <small>Do not hesitate to send us an email if you can't find what you're looking for.</small>
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
                    <a href="faq.php" class="btn btn-more mt-2">Browse More</a>
                </div>
            </div>
        </div>
	</div>

@endsection