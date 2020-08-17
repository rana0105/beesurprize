@extends('frontend.layouts.main')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="contact-form">
					<h1>contact</h1>
					<p>We’d love to talk about how we can work together. Send us a message below and we’ll respond as soon as possible.</p>
					<div class="row">
						<div class="col-lg-6 col-sm-12">
							<div class="contact-box">
								<h4>Drop us a message</h4>
								<form>
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" placeholder="Enter your full name">
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control" placeholder="Enter your email">
									</div>
									<div class="form-group">
										<label>Subject</label>
										<input type="text" class="form-control" placeholder="Enter your subject">
									</div>
									<div class="form-group">
										<label>Message</label>
										<textarea class="form-control" rows="5" placeholder="Write message here"></textarea>
									</div>
									<button class="btn default-btn">send message</button>
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12">
							<div class="contact-detail">
								<div>
									<img src="img/telephone-icon.png"> +0194323656
								</div>
								<div>
									<img src="img/email.png"> itsumrat@gmail.com
								</div>
							</div>
							<div class="support-img">
								<img src="img/contact-illustration.png">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="members-qty">
					<div>
						<div style="margin-bottom: 1rem"><a href="#" style="padding:12px 17px"><i class="fab fa-facebook-f"></i></a></div>
						<span>130k</span>
						<small>Followers</small>
					</div>
					<div>
						<div style="margin-bottom: 1rem"><a href="#"><i class="fas fa-users"></i></a></div>
						<span>130k</span>
						<small>Members</small>
					</div>
					<div>
						<div style="margin-bottom: 1rem"><a href="#"><i class="fab fa-twitter"></i></a></div>
						<span>130k</span>
						<small>Followers</small>
					</div>
					<div>
						<div style="margin-bottom: 1rem"><a href="#" style="padding: 12px 16px"><i class="fab fa-linkedin-in"></i></a></div>
						<span>130k</span>
						<small>Followers</small>
					</div>
					<div>
						<div style="margin-bottom: 1rem"><a href="#"><i class="fas fa-envelope"></i></a></div>
						<span>130k</span>
						<small>Subscribers</small>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection