@extends('frontend.layouts.main')
@section('content')

	<div class="container">
		<div class="cart-page">
			<div class="title">
				<h1>my cart</h1>
			</div>
			<div class="row">
				<div class="col-lg-7 col-md-12">
					<div class="cart-list">
						<div class="title">
							<h4>Your tickets</h4>
							<button class="clear-btn">clear all</button>
						</div>
						<div class="item-list">
							<div class="item">
								<img src="img/dream-car.png">
								<div>
									<h3>The Breeze Zodiac IX</h3>
									<p>Contest No: <span>BT2</span></p>
								</div>
							</div>
							<div class="ticket-number">
			                    <div class="item">11</div>
			                    <div class="item">11</div>
			                    <div class="item">11</div>
			                    <div class="item">11</div>
			                    <div class="item">11</div>
			                    <div class="item">11</div>
			                    <div class="item">11</div>
			                </div>
			                <div class="cart-edit">
			                	<a href="#" data-toggle="modal" data-target="#ticketSelectModal"><i class="fas fa-pencil-alt"></i></a>
			                	<a href="#"><i class="far fa-trash-alt"></i></a>
			                </div>
			                <hr>
						</div>
						<div class="item-list">
							<div class="item">
								<img src="img/dream-car.png">
								<div>
									<h3>The Breeze Zodiac IX</h3>
									<p>Contest No: <span>BT2</span></p>
								</div>
							</div>
							<div class="ticket-number">
			                    <div class="item">11</div>
			                    <div class="item">11</div>
			                    <div class="item">11</div>
			                    <div class="item">11</div>
			                    <div class="item">11</div>
			                    <div class="item">11</div>
			                    <div class="item">11</div>
			                </div>
			                <div class="cart-edit">
			                	<a href="#" data-toggle="modal" data-target="#ticketSelectModal"><i class="fas fa-pencil-alt"></i></a>
			                	<a href="#"><i class="far fa-trash-alt"></i></a>
			                </div>
			                <hr>
						</div>
						<div class="item-list">
							<div class="item">
								<img src="img/dream-car.png">
								<div>
									<h3>The Breeze Zodiac IX</h3>
									<p>Contest No: <span>BT2</span></p>
								</div>
							</div>
							<div class="ticket-number">
			                    <div class="item">11</div>
			                    <div class="item">12</div>
			                    <div class="item">12</div>
			                    <div class="item">12</div>
			                    <div class="item">12</div>
			                    <div class="item">12</div>
			                    <div class="item">12</div>
			                    <div class="item">11</div>
			                </div>
			                <div class="cart-edit">
			                	<a href="#" data-toggle="modal" data-target="#ticketSelectModal"><i class="fas fa-pencil-alt"></i></a>
			                	<a href="#"><i class="far fa-trash-alt"></i></a>
			                </div>
			                <hr>
						</div>
					</div>
				</div>
				<div class="col-lg-4 offset-lg-1 col-md-12">
					<div class="total-payment">
						<h4>Checkout</h4>
						<h5>Ticket Price <span>$39.92</span></h5>
						<hr>
						<h5>Total <span>$39.92</span></h5>
						<a href="#" class="btn default-btn" data-toggle="modal" data-target="#questionModal">Play Now</a>
					</div>
					<a href="#" class="rules-modal" data-toggle="modal" data-target="#gameRulesModal">* See how to play</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="similar-contest">
					<h1>More Contest</h1>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
                <div class="current-item">
                    <a href="contest-detail.php">
                        <div class="prize-img">
                            <img src="img/cars.png">
                        </div>
                    </a>
                    <div class="contest-no">
                        Contest No:<br><span>B2T</span>
                    </div>
                    <div class="ticket-detail">
                        <a href="contest-detail.php" class="prize-name">The Breeze  Zodiac IX</a>
                        <p class="ticket-price">$3.95</p>
                        <hr>
                        <div class="ticket-info">
                            <i class="far fa-clock"></i> 5d  <span class="bar">|</span>
                            <span class="float-right"><i class="fas fa-ticket-alt"></i> 9805 <b>Remaining</b></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="current-item">
                    <a href="contest-detail.php">
                        <div class="prize-img">
                            <img src="img/cars.png">
                        </div>
                    </a>
                    <div class="contest-no">
                        Contest No:<br><span>B2T</span>
                    </div>
                    <div class="ticket-detail">
                        <a href="contest-detail.php" class="prize-name">The Breeze  Zodiac IX</a>
                        <p class="ticket-price">$3.95</p>
                        <hr>
                        <div class="ticket-info">
                            <i class="far fa-clock"></i> 5d  <span class="bar">|</span>
                            <span class="float-right"><i class="fas fa-ticket-alt"></i> 9805 <b>Remaining</b></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="current-item">
                    <a href="contest-detail.php">
                        <div class="prize-img">
                            <img src="img/cars.png">
                        </div>
                    </a>
                    <div class="contest-no">
                        Contest No:<br><span>B2T</span>
                    </div>
                    <div class="ticket-detail">
                        <a href="contest-detail.php" class="prize-name">The Breeze  Zodiac IX</a>
                        <p class="ticket-price">$3.95</p>
                        <hr>
                        <div class="ticket-info">
                            <i class="far fa-clock"></i> 5d  <span class="bar">|</span>
                            <span class="float-right"><i class="fas fa-ticket-alt"></i> 9805 <b>Remaining</b></span>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>

@endsection