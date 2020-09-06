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
                            <div id="imagePreview" style="background-image: url({{ asset('frontend/img/user.jpg')}})">
                            </div>
                        </div>
                    </div>
                    <div class="profile-name">
                        <h4>{{ $user->name }}</h4>
                        <small>ID: {{ $user->id }}</small>
                    </div>
                </div>
                <div class="profile-items">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-myticket-tab" data-toggle="pill" href="#v-pills-myticket" role="tab" aria-controls="v-pills-myticket" aria-selected="true">My Tickets <span class="badge badge-pill float-right mt-1">04</span></a>
                        <a class="nav-link" id="v-pills-personalinfo-tab" data-toggle="pill" href="#v-pills-personalinfo" role="tab" aria-controls="v-pills-personalinfo" aria-selected="false">personal information</a>
                        <a class="nav-link" id="v-pills-myorder-tab" data-toggle="pill" href="#v-pills-myorder" role="tab" aria-controls="v-pills-myorder" aria-selected="false">my order</a>
                        <a class="nav-link" id="v-pills-referalprogram-tab" data-toggle="pill" href="#v-pills-referalprogram" role="tab" aria-controls="v-pills-referalprogram" aria-selected="false">referal program</a>
                        <a class="nav-link" id="v-pills-favticket-tab" data-toggle="pill" href="#v-pills-favticket" role="tab" aria-controls="v-pills-favticket" aria-selected="false">favorite tickets</a>
                        <a class="nav-link localStorageClear" href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">
                            </i>
                            log out
                        </a>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                            @csrf
                        </form>
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
                                                <img src="{{ asset('frontend/img/cars.png') }}">
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
                                                <img src="{{ asset('frontend/img/cars.png') }}">
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
                                                <img src="{{ asset('frontend/img/cars.png') }}">
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
                                                <img src="{{ asset('frontend/img/cars.png') }}">
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
                                                <img src="{{ asset('frontend/img/cars.png') }}">
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
                                                <img src="{{ asset('frontend/img/cars.png') }}">
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
                                                <img src="{{ asset('frontend/img/cars.png') }}">
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
                                                <img src="{{ asset('frontend/img/cars.png') }}">
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
                        <div class="row personal-detail">
                            <div class="col-md-6">
                                <h5>personal details</h5>
                                <p><span>Name</span>: {{ $user->name }}</p>
                                <p><span>Date of Birth</span>: {{ $user->dob }}</p>
                                <p><span>Address</span>: {{ $user->address }}</p>
                            </div>
                            <div class="col-md-6" align="right">
                                <a href="#" class="open_modal" data-toggle="modal" data-id="{{ $user->id }}" data-target="#nameModal"><i class="fa fa-edit" style="color: #fff"></i></a>
                            </div>
                        </div>
                        <div class="row account-settings">
                            <div class="col-md-6">
                                <h5>account settings</h5>
                                <p><span>Language</span>: {{ $user->language }}</p>
                                <p><span>Origion</span>: {{ $user->origion }}</p>
                                <p><span>Status</span>: 
                                    @if($user->status == 1)
                                    Active
                                    @elseif($user->status == 2)
                                    Unban
                                    @else
                                    Ban
                                    @endif
                                </p>
                            </div>
                            <div class="col-md-6" align="right">
                                <a href="#" class="open_modal" data-toggle="modal" data-id="{{ $user->id }}" data-target="#settingModal"><i class="fa fa-edit" style="color: #fff"></i></a>
                            </div>
                        </div>
                        <div class="row contact-settings">
                            <div class="col-md-6">
                                <h5>contact settings</h5>
                                <p><span>Email</span>: {{ $user->email }}</p>
                                <p><span>Mobile</span>: {{ $user->phone }}</p>
                            </div>
                            <div class="col-md-6" align="right">
                                <a href="#" class="open_modal" data-toggle="modal" data-id="{{ $user->id }}" data-target="#contactModal"><i class="fa fa-edit" style="color: #fff"></i></a>
                            </div>
                        </div>
                        <div class="row security-settings">
                            <div class="col-md-6">
                                <h5>security settings</h5>
                                <p><span>Password</span>: *********</p>
                            </div>
                            <div class="col-md-6" align="right">
                                <a href="#" class="open_modal" data-toggle="modal" data-id="{{ $user->id }}" data-target="#passwordModal"><i class="fa fa-edit" style="color: #fff"></i></a>
                            </div>
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
                            <span><img src="{{ asset('frontend/img/referal.png') }}"></span>
                            <input type="text" class="form-control" value="{{ $user->referal_link }}">
                            <button class="btn default-btn">copy link</button>
                        </div>
                        <div class="referal-income">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-5">
                                    <div class="card">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src="{{ asset('frontend/img/earn.png') }}" alt="...">
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
                                                <img src="{{ asset('frontend/img/last-income.png') }}" alt="...">
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
                                                        <img src="{{ asset('frontend/img/cars.png') }}">
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
                                                        <img src="{{ asset('frontend/img/cars.png') }}">
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
                                                        <img src="{{ asset('frontend/img/cars.png') }}">
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
                                                        <img src="{{ asset('frontend/img/cars.png') }}">
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
                                                <img src="{{ asset('frontend/img/cars.png') }}">
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
                                                <img src="{{ asset('frontend/img/cars.png') }}">
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
                                                <img src="{{ asset('frontend/img/cars.png') }}">
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

    {{-- modal --}}

    <div class="modal fade" id="nameModal" tabindex="-1" role="dialog" aria-labelledby="nameModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="nameModalLabel">Personal Details</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><img src="{{ asset('frontend/img/close.png') }}"></span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('personalIfo') }}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{ $user->id }}">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" name="name" class="form-control" id="name" value="">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Date of Birth:</label>
                <input type="date" name="dob" class="form-control" id="dob" value="">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Address:</label>
                <input type="text" name="address" class="form-control" id="address" value="">
              </div>
              <button type="submit" class="btn btn-primary">Send message</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="settingModal" tabindex="-1" role="dialog" aria-labelledby="settingModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="settingModalLabel">Account Settings</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><img src="{{ asset('frontend/img/close.png') }}"></span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('settingIfo') }}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{ $user->id }}">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Language:</label>
                <input type="text" name="language" class="form-control" id="language" value="">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Origion:</label>
                <input type="text" name="origion" class="form-control" id="origion" value="">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Status:</label>
                <select name="status" class="form-control" id="status">
                    <option value="1">Active</option>
                    <option value="3">Ban</option>
                    <option value="2">Unban</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Send message</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="contactModalLabel">Contact Settings</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><img src="{{ asset('frontend/img/close.png') }}"></span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('contactInfo') }}" method="POST">
              @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Email:</label>
                <input type="email" name="email" class="form-control" id="email" value="">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Phone:</label>
                <input type="text" name="phone" class="form-control" id="phone" value="">
              </div>
              <button type="submit" class="btn btn-primary">Send message</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="contactModalLabel">Security Settings</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><img src="{{ asset('frontend/img/close.png') }}"></span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('passwordInfo') }}" method="POST">
              @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Old Password</label>
                <input type="password" name="old_password" class="form-control" id="old_password" value="">
                @if(session('error'))
                    <div class="alert alert-danger old-pass">
                        {{ session('error') }}
                    </div>
                @endif
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">New Password</label>
                <input type="password" name="new_password" class="form-control" id="new_password" value="">
                @if ($errors->has('new_password'))
                    <span class="help-block errshow">
                        <strong class="errshow">{{ $errors->first('new_password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" value="">
                @if ($errors->has('password_confirmation'))
                    <span class="help-block errshow">
                        <strong class="errshow">{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
              </div>
              <button type="submit" class="btn btn-primary">Send message</button>
            </form>
          </div>
        </div>
      </div>
    </div>

@endsection
@section('script')
<script>
    $(document).ready(function() {
        $(document).on('click','.open_modal',function(){
            var url = "/loadUser";
            var userid= $(this).attr('data-id');
            $.get(url + '/' + userid, function (data) {
                $('#name').val(data.name);
                $('#dob').val(data.dob);
                $('#address').val(data.address);
                $('#language').val(data.language);
                $('#origion').val(data.origion);
                $('#status').val(data.status);
                $('#email').val(data.email);
                $('#phone').val(data.phone);
                $('#btn-save').val("update");
            }) 
        });

        $(document).on('click','.localStorageClear', function(){
            localStorage.removeItem("user");
        });
    });
</script>
@endsection