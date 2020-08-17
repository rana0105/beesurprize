@extends('frontend.layouts.main')
@section('content')

	<div class="container">
		<div class="checkout-page">
			<div class="row">
				<div class="col-lg-7 col-md-12">
					<div class="checkout-signin">
						<div>
							<h4>Already a Bee Surprize Member?</h4>
							<small>Sign in to buy lottery easier!</small>
						</div>
						<div class="signin">
							<a href="#" data-toggle="modal" data-target="#staticBackdrop">
								<img src="img/login.png"> Sing in
							</a>
						</div>
					</div>
					<div class="or-signup">
						<h4>Share your Contact Details</h4>
						<hr>
						<form>
						  	<div class="row">
						    	<div class="col">
						      		<input type="text" class="form-control checkoutinfo" placeholder="Full name">
						    	</div>
						    	<div class="col">
						      		<input type="email" class="form-control checkoutinfo" placeholder="Enter your mail">
						    	</div>
						  	</div>
						  	<div class="row" style="margin-top: 1rem">
						    	<div class="col">
						      		<input type="text" class="form-control checkoutinfo" placeholder="Enter your phone no">
						    	</div>
						    	<div class="col">
						    	</div>
						  	</div>
						</form>
					</div>
					<div class="payment-option">
						<h4>Payment Option</h4>
						<hr>
						<nav class="nav nav-pills">
						    <a class="nav-item nav-link active" id="nav-creditcard-tab" data-toggle="tab" href="#nav-creditcard" role="tab" aria-controls="nav-creditcard" aria-selected="true"><img src="img/card.png" class="mb-1"><br>Credit Card</a>
						    <a class="nav-item nav-link" id="nav-debitcard-tab" data-toggle="tab" href="#nav-debitcard" role="tab" aria-controls="nav-debitcard" aria-selected="false"><img src="img/card.png" class="mb-1"><br>Debit Card</a>
						    <a class="nav-item nav-link" href="#"><img src="img/paypal.png" class="mb-2 mt-2"><br>PayPal</a>
						</nav>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-creditcard" role="tabpanel" aria-labelledby="nav-creditcard-tab">
								<p class="mt-5 mb-3">Enter Your Card Details</p>
								<form class="mb-3">
									<div class="form-group" style="position: relative;">
										<label>Card Details</label>
										<input type="text" class="form-control">
										<span><img src="img/secure.png"></span>
									</div>
									<div class="form-group">
										<label>Name on the Card</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group row">
										<div class="col">
											<label>Expiration</label>
											<input type="text" class="form-control" placeholder="MM/YY">
										</div>
										<div class="col">
											<label>CVV</label>
											<input type="text" class="form-control" placeholder="CVV">
										</div>
									</div>
									<button class="btn default-btn mt-2">Make Payment</button>
								</form>
								<small>By Clicking "Make Payment" you agree to the <a href="#">terms and condition</a></small>
							</div>
							<div class="tab-pane fade" id="nav-debitcard" role="tabpanel" aria-labelledby="nav-debitcard-tab">
								<p class="mt-5 mb-3">Enter Your Card Details</p>
								<form class="mb-3">
									<div class="form-group" style="position: relative;">
										<label>Card Details</label>
										<input type="text" class="form-control">
										<span><img src="img/secure.png"></span>
									</div>
									<div class="form-group">
										<label>Name on the Card</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group row">
										<div class="col">
											<label>Expiration</label>
											<input type="text" class="form-control" placeholder="MM/YY">
										</div>
										<div class="col">
											<label>CVV</label>
											<input type="text" class="form-control" placeholder="CVV">
										</div>
									</div>
									<button class="btn default-btn mt-2">Make Payment</button>
								</form>
								<small>By Clicking "Make Payment" you agree to the <a href="#">terms and condition</a></small>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 offset-lg-1 col-md-12">
					<div class="total-payment">
						<h4>Checkout</h4>
						<h5>Ticket Price <span>$39.92</span></h5>
						<hr>
						<h5>Total <span>$39.92</span></h5>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection