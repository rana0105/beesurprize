@extends('frontend.layouts.main')
@section('content')

	<div class="container">
		<div class="contest-heading">
			<div class="row">
				<div class="col-md-8 offset-md-2 col-sm-12">
					<div class="contest-title">
						<h1>upcoming contest</h1>
						<p>See all of our upcoming contest</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
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
			<div class="col-md-2">
				<div class="form-group filering-element">
	                <select class="form-control">
	                    <option>Prize</option>
	                    <option>Car</option>
	                    <option>Bike</option>
	                    <option>Desktop</option>
	                    <option>Money</option>
	                </select>
	            </div>
			</div>
			<div class="col-md-2">
				<div class="form-group filering-element">
	                <select class="prize-brand form-control">
	                    <option>All makers</option>
	                    <option>BMW</option>
	                    <option>Ferrari</option>
	                    <option>Honda</option>
	                    <option>Yamaha</option>
	                    <option>Suzuki</option>
	                </select>
	            </div>
			</div>
			<div class="col-md-2">
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
            <div class="col-md-2">
                <div class="form-group">
                    <div class="wish-filtering">
                        <button><i class="fas fa-heart"></i></button>
                        <button><i class="fas fa-history"></i></button>
                    </div>
                </div>
            </div>
			<div class="col-md-2">
				<div class="form-group filering-element">
					<input type="search" class="form-control" placeholder="Search here">
				</div>
			</div>
			<div class="col-md-4">
                <div class="current-item">
                    <a href="{{ route('upcoming.contest.detail') }}">
                        <div class="prize-img">
                            <img src="img/cars.png">
                        </div>
                    </a>
                    <div class="ticket-detail">
                        <a href="{{ route('upcoming.contest.detail') }}" class="prize-name upcoming-prize">The Breeze  Zodiac IX</a>
                        <p class="ticket-price">$3.95</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="current-item">
                    <a href="upcoming-contest-detail.php">
                        <div class="prize-img">
                            <img src="img/motorcycle.png">
                        </div>
                    </a>
                    <div class="ticket-detail">
                        <a href="upcoming-contest-detail.php" class="prize-name upcoming-prize">The Breeze  Zodiac IX</a>
                        <p class="ticket-price">$3.95</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="current-item">
                    <a href="upcoming-contest-detail.php">
                        <div class="prize-img">
                            <img src="img/smartphone.png">
                        </div>
                    </a>
                    <div class="ticket-detail">
                        <a href="upcoming-contest-detail.php" class="prize-name upcoming-prize">The Breeze  Zodiac IX</a>
                        <p class="ticket-price">$3.95</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="current-item">
                    <a href="upcoming-contest-detail.php">
                        <div class="prize-img">
                            <img src="img/motorcycle.png">
                        </div>
                    </a>
                    <div class="ticket-detail">
                        <a href="upcoming-contest-detail.php" class="prize-name upcoming-prize">The Breeze  Zodiac IX</a>
                        <p class="ticket-price">$3.95</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="current-item">
                    <a href="upcoming-contest-detail.php">
                        <div class="prize-img">
                            <img src="img/smartphone.png">
                        </div>
                    </a>
                    <div class="ticket-detail">
                        <a href="upcoming-contest-detail.php" class="prize-name upcoming-prize">The Breeze  Zodiac IX</a>
                        <p class="ticket-price">$3.95</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="current-item">
                    <a href="upcoming-contest-detail.php">
                        <div class="prize-img">
                            <img src="img/motorcycle.png">
                        </div>
                    </a>
                    <div class="ticket-detail">
                        <a href="upcoming-contest-detail.php" class="prize-name upcoming-prize">The Breeze  Zodiac IX</a>
                        <p class="ticket-price">$3.95</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="current-item">
                    <a href="upcoming-contest-detail.php">
                        <div class="prize-img">
                            <img src="img/smartphone.png">
                        </div>
                    </a>
                    <div class="ticket-detail">
                        <a href="upcoming-contest-detail.php" class="prize-name upcoming-prize">The Breeze  Zodiac IX</a>
                        <p class="ticket-price">$3.95</p>
                    </div>
                </div>
            </div>
		</div>
	</div>

@endsection