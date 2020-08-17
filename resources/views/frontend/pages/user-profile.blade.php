@extends('frontend.layouts.main')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-12">
                <div class="profile">
                    <div class="profile-top"></div>
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"><i class="fas fa-camera"></i></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url(img/user.jpg);">
                            </div>
                        </div>
                    </div>
                    <div class="profile-name">
                        <h4>albert ownes</h4>
                        <small>ID: 112346546</small>
                    </div>
                </div>
                <div class="profile-items">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-myticket-tab" data-toggle="pill" href="#v-pills-myticket" role="tab" aria-controls="v-pills-myticket" aria-selected="true">My Tickets <span class="badge badge-pill float-right mt-1">04</span></a>
                        <a class="nav-link" id="v-pills-personalinfo-tab" data-toggle="pill" href="#v-pills-personalinfo" role="tab" aria-controls="v-pills-personalinfo" aria-selected="false">personal information</a>
                        <a class="nav-link" id="v-pills-myorder-tab" data-toggle="pill" href="#v-pills-myorder" role="tab" aria-controls="v-pills-myorder" aria-selected="false">my order</a>
                        <a class="nav-link" id="v-pills-referalprogram-tab" data-toggle="pill" href="#v-pills-referalprogram" role="tab" aria-controls="v-pills-referalprogram" aria-selected="false">referal program</a>
                        <a class="nav-link" id="v-pills-favticket-tab" data-toggle="pill" href="#v-pills-favticket" role="tab" aria-controls="v-pills-favticket" aria-selected="false">favorite tickets</a>
                        <a class="nav-link" href="#">log out</a>
                    </div>
                </div>
			</div>
            <div class="col-lg-9 col-sm-12">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-myticket" role="tabpanel" aria-labelledby="v-pills-myticket-tab">
                        <div class="upcoming-draw">
                            <h4>upcoming draw</h4>
                            <div class="row">
                                <div class="col-lg-3 col-md-6" style="padding: 0 7px">
                                    <div class="current-item upcoming-item">
                                        <a href="contest-detail.php">
                                            <div class="prize-img">
                                                <img src="img/cars.png">
                                            </div>
                                        </a>
                                        <div class="contest-name">BT2</div>
                                        <div class="answer">
                                            <a href="#" data-toggle="modal" data-target="#answerModal">
                                              <i class="fas fa-info-circle"></i>
                                            </a>
                                        </div>
                                        <div class="ticket-detail">
                                            <a href="contest-detail.php" class="prize-name">The Breeze  Zodiac IX</a>
                                            <div class="ticket-no">
                                                <div class="ticket-item">1</div>
                                                <div class="ticket-item">2</div>
                                                <div class="ticket-item">3</div>
                                                <div class="ticket-item">4</div>
                                                <div class="ticket-item">5</div>
                                                <div class="ticket-item">6</div>
                                                <div class="ticket-item">7</div>
                                                <div class="ticket-item">8</div>
                                                <div class="ticket-item">9</div>
                                            </div>
                                            <hr>
                                            <div class="ticket-info">
                                                <div id="countdown">
                                                    <div id='tiles'></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6" style="padding: 0 7px">
                                    <div class="current-item upcoming-item">
                                        <a href="contest-detail.php">
                                            <div class="prize-img">
                                                <img src="img/cars.png">
                                            </div>
                                        </a>
                                        <div class="contest-name">BT2</div>
                                        <div class="answer">
                                            <a href="#" data-toggle="modal" data-target="#answerModal">
                                              <i class="fas fa-info-circle"></i>
                                            </a>
                                        </div>
                                        <div class="ticket-detail">
                                            <a href="contest-detail.php" class="prize-name">The Breeze  Zodiac IX</a>
                                            <div class="ticket-no">
                                                <p>You have not bought any ticket</p>
                                            </div>
                                            <hr>
                                            <div class="ticket-info">
                                                <div id="countdown">
                                                    <div id='tiles'></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6" style="padding: 0 7px">
                                    <div class="current-item upcoming-item">
                                        <a href="contest-detail.php">
                                            <div class="prize-img">
                                                <img src="img/cars.png">
                                            </div>
                                        </a>
                                        <div class="contest-name">BT2</div>
                                        <div class="answer">
                                            <a href="#" data-toggle="modal" data-target="#answerModal">
                                              <i class="fas fa-info-circle"></i>
                                            </a>
                                        </div>
                                        <div class="ticket-detail">
                                            <a href="contest-detail.php" class="prize-name">The Breeze  Zodiac IX</a>
                                            <div class="ticket-no">
                                                <div class="ticket-item">1</div>
                                                <div class="ticket-item">2</div>
                                                <div class="ticket-item">3</div>
                                                <div class="ticket-item">4</div>
                                                <div class="ticket-item">5</div>
                                                <div class="ticket-item">6</div>
                                                <div class="ticket-item">7</div>
                                                <div class="ticket-item">8</div>
                                                <div class="ticket-item">9</div>
                                            </div>
                                            <hr>
                                            <div class="ticket-info">
                                                <div id="countdown">
                                                    <div id='tiles'></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6" style="padding: 0 7px">
                                    <div class="current-item upcoming-item">
                                        <a href="contest-detail.php">
                                            <div class="prize-img">
                                                <img src="img/cars.png">
                                            </div>
                                        </a>
                                        <div class="contest-name">BT2</div>
                                        <div class="answer">
                                            <a href="#" data-toggle="modal" data-target="#answerModal">
                                              <i class="fas fa-info-circle"></i>
                                            </a>
                                        </div>
                                        <div class="ticket-detail">
                                            <a href="contest-detail.php" class="prize-name">The Breeze  Zodiac IX</a>
                                            <div class="ticket-no">
                                                <div class="ticket-item">1</div>
                                                <div class="ticket-item">2</div>
                                                <div class="ticket-item">3</div>
                                                <div class="ticket-item">4</div>
                                                <div class="ticket-item">5</div>
                                                <div class="ticket-item">6</div>
                                                <div class="ticket-item">7</div>
                                                <div class="ticket-item">8</div>
                                                <div class="ticket-item">9</div>
                                            </div>
                                            <hr>
                                            <div class="ticket-info">
                                                <div id="countdown">
                                                    <div id='tiles'></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6" style="padding: 0 7px">
                                    <div class="current-item upcoming-item">
                                        <a href="contest-detail.php">
                                            <div class="prize-img">
                                                <img src="img/cars.png">
                                            </div>
                                        </a>
                                        <div class="contest-name">BT2</div>
                                        <div class="answer">
                                            <a href="#" data-toggle="modal" data-target="#answerModal">
                                              <i class="fas fa-info-circle"></i>
                                            </a>
                                        </div>
                                        <div class="ticket-detail">
                                            <a href="contest-detail.php" class="prize-name">The Breeze  Zodiac IX</a>
                                            <div class="ticket-no">
                                                <div class="ticket-item">1</div>
                                                <div class="ticket-item">2</div>
                                                <div class="ticket-item">3</div>
                                                <div class="ticket-item">4</div>
                                                <div class="ticket-item">5</div>
                                                <div class="ticket-item">6</div>
                                                <div class="ticket-item">7</div>
                                                <div class="ticket-item">8</div>
                                                <div class="ticket-item">9</div>
                                            </div>
                                            <hr>
                                            <div class="ticket-info">
                                                <div id="countdown">
                                                    <div id='tiles'></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6" style="padding: 0 7px">
                                    <div class="current-item upcoming-item">
                                        <a href="contest-detail.php">
                                            <div class="prize-img">
                                                <img src="img/cars.png">
                                            </div>
                                        </a>
                                        <div class="contest-name">BT2</div>
                                        <div class="answer">
                                            <a href="#" data-toggle="modal" data-target="#answerModal">
                                              <i class="fas fa-info-circle"></i>
                                            </a>
                                        </div>
                                        <div class="ticket-detail">
                                            <a href="contest-detail.php" class="prize-name">The Breeze  Zodiac IX</a>
                                            <div class="ticket-no">
                                                <p>You have not bought any ticket</p>
                                            </div>
                                            <hr>
                                            <div class="ticket-info">
                                                <div id="countdown">
                                                    <div id='tiles'></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6" style="padding: 0 7px">
                                    <div class="current-item upcoming-item">
                                        <a href="contest-detail.php">
                                            <div class="prize-img">
                                                <img src="img/cars.png">
                                            </div>
                                        </a>
                                        <div class="contest-name">BT2</div>
                                        <div class="answer">
                                            <a href="#" data-toggle="modal" data-target="#answerModal">
                                              <i class="fas fa-info-circle"></i>
                                            </a>
                                        </div>
                                        <div class="ticket-detail">
                                            <a href="contest-detail.php" class="prize-name">The Breeze  Zodiac IX</a>
                                            <div class="ticket-no">
                                                <p>You have not bought any ticket</p>
                                            </div>
                                            <hr>
                                            <div class="ticket-info">
                                                <div id="countdown">
                                                    <div id='tiles'></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6" style="padding: 0 7px">
                                    <div class="current-item upcoming-item">
                                        <a href="contest-detail.php">
                                            <div class="prize-img">
                                                <img src="img/cars.png">
                                            </div>
                                        </a>
                                        <div class="contest-name">BT2</div>
                                        <div class="answer">
                                            <a href="#" data-toggle="modal" data-target="#answerModal">
                                              <i class="fas fa-info-circle"></i>
                                            </a>
                                        </div>
                                        <div class="ticket-detail">
                                            <a href="contest-detail.php" class="prize-name">The Breeze  Zodiac IX</a>
                                            <div class="ticket-no">
                                                <p>You have not bought any ticket</p>
                                            </div>
                                            <hr>
                                            <div class="ticket-info">
                                                <div id="countdown">
                                                    <div id='tiles'></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="text-align: center;width: 100%;">
                                    <button class="show-more">show more <i class="fas fa-arrow-down"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="past-draw">
                            <h4>past draws</h4>
                            <table id="pastdraw" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>DRAW</th>
                                        <th>CONTEST NO</th>
                                        <th>RESULT</th>
                                        <th>STATUS</th>
                                        <th>MORE</th>
                                    </tr>
                                </thead>
                            </table>

                            <div class="dt-more-container">
                               <button class="show-more">show more <i class="fas fa-arrow-down"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-personalinfo" role="tabpanel" aria-labelledby="v-pills-personalinfo-tab">
                        <div class="personal-detail">
                            <h5>personal details</h5>
                            <p><span>Name</span>: Alber Ownes</p>
                            <p><span>Date of Birth</span>: 15-03-1980</p>
                            <p><span>Address</span>: 8198 Fieldstone Dr.La Crosse, WI 54601</p>
                        </div>
                        <div class="account-settings">
                            <h5>account settings</h5>
                            <p><span>Language</span>: English (UK)</p>
                            <p><span>Date of Birth</span>: (GMT-06:00) Central America</p>
                            <p><span>Address</span>: Active</p>
                        </div>
                        <div class="contact-settings">
                            <h5>contact settings</h5>
                            <p><span>Email</span>: +8801943869105</p>
                            <p><span>Mobile</span>: itsumrat@gmail.com</p>
                        </div>
                        <div class="security-settings">
                            <h5>security settings</h5>
                            <p><span>Password</span>: *********</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-myorder" role="tabpanel" aria-labelledby="v-pills-myorder-tab">
                        <div class="order-history">
                            <h5>my order</h5>
                            <table id="myorder" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>DATE</th>
                                        <th>CONTEST NO</th>
                                        <th>PRIZE</th>
                                        <th>STATUS</th>
                                        <th>MORE</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-referalprogram" role="tabpanel" aria-labelledby="v-pills-referalprogram-tab">
                        <div class="referal-link">
                            <h5>referal link</h5>
                            <span><img src="img/referal.png"></span>
                            <input type="text" class="form-control" value="https://rifa.com/?ref=albert24">
                            <button class="btn default-btn">copy link</button>
                        </div>
                        <div class="referal-income">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-5">
                                    <div class="card">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src="img/earn.png" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">$2956.00</h5>
                                                    <p class="card-text">Earned Referral</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="card">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src="img/last-income.png" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">$2956.00</h5>
                                                    <p class="card-text">Last Month</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="partner-list">
                            <h5>my partners:</h5>
                            <table id="mypartners" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>DATE</th>
                                        <th>Name</th>
                                        <th>EMAIL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>16-03-2020</td>
                                        <td>Let Gen Hasan</td>
                                        <td>hasan@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>16-03-2020</td>
                                        <td>Let Gen Hasan</td>
                                        <td>hasan@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>16-03-2020</td>
                                        <td>Let Gen Hasan</td>
                                        <td>hasan@gmail.com</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="dt-more-container">
                               <button class="show-more">show more <i class="fas fa-arrow-down"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-favticket" role="tabpanel" aria-labelledby="v-pills-favticket-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="upcoming-draw">
                                    <h4>upcoming draw</h4>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6" style="padding: 0 7px">
                                            <div class="current-item upcoming-item">
                                                <a href="contest-detail.php">
                                                    <div class="prize-img">
                                                        <img src="img/cars.png">
                                                    </div>
                                                </a>
                                                <div class="contest-name">BT2</div>
                                                <div class="answer">
                                                    <a href="#" data-toggle="modal" data-target="#answerModal">
                                                      <i class="fas fa-info-circle"></i>
                                                    </a>
                                                </div>
                                                <div class="ticket-detail">
                                                    <a href="contest-detail.php" class="prize-name">The Breeze  Zodiac IX</a>
                                                    <div class="ticket-no">
                                                        <div class="ticket-item">1</div>
                                                        <div class="ticket-item">2</div>
                                                        <div class="ticket-item">3</div>
                                                        <div class="ticket-item">4</div>
                                                        <div class="ticket-item">5</div>
                                                        <div class="ticket-item">6</div>
                                                        <div class="ticket-item">7</div>
                                                        <div class="ticket-item">8</div>
                                                        <div class="ticket-item">9</div>
                                                    </div>
                                                    <hr>
                                                    <div class="ticket-info">
                                                        <div id="countdown">
                                                            <div id='tiles'></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6" style="padding: 0 7px">
                                            <div class="current-item upcoming-item">
                                                <a href="contest-detail.php">
                                                    <div class="prize-img">
                                                        <img src="img/cars.png">
                                                    </div>
                                                </a>
                                                <div class="contest-name">BT2</div>
                                                <div class="answer">
                                                    <a href="#" data-toggle="modal" data-target="#answerModal">
                                                      <i class="fas fa-info-circle"></i>
                                                    </a>
                                                </div>
                                                <div class="ticket-detail">
                                                    <a href="contest-detail.php" class="prize-name">The Breeze  Zodiac IX</a>
                                                    <div class="ticket-no">
                                                        <p>You have not bought any ticket</p>
                                                    </div>
                                                    <hr>
                                                    <div class="ticket-info">
                                                        <div id="countdown">
                                                            <div id='tiles'></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6" style="padding: 0 7px">
                                            <div class="current-item upcoming-item">
                                                <a href="contest-detail.php">
                                                    <div class="prize-img">
                                                        <img src="img/cars.png">
                                                    </div>
                                                </a>
                                                <div class="contest-name">BT2</div>
                                                <div class="answer">
                                                    <a href="#" data-toggle="modal" data-target="#answerModal">
                                                      <i class="fas fa-info-circle"></i>
                                                    </a>
                                                </div>
                                                <div class="ticket-detail">
                                                    <a href="contest-detail.php" class="prize-name">The Breeze  Zodiac IX</a>
                                                    <div class="ticket-no">
                                                        <div class="ticket-item">1</div>
                                                        <div class="ticket-item">2</div>
                                                        <div class="ticket-item">3</div>
                                                        <div class="ticket-item">4</div>
                                                        <div class="ticket-item">5</div>
                                                        <div class="ticket-item">6</div>
                                                        <div class="ticket-item">7</div>
                                                        <div class="ticket-item">8</div>
                                                        <div class="ticket-item">9</div>
                                                    </div>
                                                    <hr>
                                                    <div class="ticket-info">
                                                        <div id="countdown">
                                                            <div id='tiles'></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6" style="padding: 0 7px">
                                            <div class="current-item upcoming-item">
                                                <a href="contest-detail.php">
                                                    <div class="prize-img">
                                                        <img src="img/cars.png">
                                                    </div>
                                                </a>
                                                <div class="contest-name">BT2</div>
                                                <div class="answer">
                                                    <a href="#" data-toggle="modal" data-target="#answerModal">
                                                      <i class="fas fa-info-circle"></i>
                                                    </a>
                                                </div>
                                                <div class="ticket-detail">
                                                    <a href="contest-detail.php" class="prize-name">The Breeze  Zodiac IX</a>
                                                    <div class="ticket-no">
                                                        <div class="ticket-item">1</div>
                                                        <div class="ticket-item">2</div>
                                                        <div class="ticket-item">3</div>
                                                        <div class="ticket-item">4</div>
                                                        <div class="ticket-item">5</div>
                                                        <div class="ticket-item">6</div>
                                                        <div class="ticket-item">7</div>
                                                        <div class="ticket-item">8</div>
                                                        <div class="ticket-item">9</div>
                                                    </div>
                                                    <hr>
                                                    <div class="ticket-info">
                                                        <div id="countdown">
                                                            <div id='tiles'></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="text-align: center;width: 100%;">
                                            <button class="show-more">show more <i class="fas fa-arrow-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="favorite-list">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="current-item favorite-item">
                                        <a href="contest-detail.php">
                                            <div class="prize-img">
                                                <img src="img/cars.png">
                                            </div>
                                        </a>
                                        <div class="fav-icon">
                                            <a href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="contest-no">
                                            <span>B2T</span>
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
                                    <div class="current-item favorite-item">
                                        <a href="contest-detail.php">
                                            <div class="prize-img">
                                                <img src="img/cars.png">
                                            </div>
                                        </a>
                                        <div class="fav-icon">
                                            <a href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="contest-no">
                                            <span>B2T</span>
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
                                    <div class="current-item favorite-item">
                                        <a href="contest-detail.php">
                                            <div class="prize-img">
                                                <img src="img/cars.png">
                                            </div>
                                        </a>
                                        <div class="fav-icon">
                                            <a href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="contest-no">
                                            <span>B2T</span>
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
                    </div>
                </div>
            </div>
		</div>
	</div>

@endsection