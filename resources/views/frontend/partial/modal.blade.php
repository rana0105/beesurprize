<!-- Login Modal -->
<div class="modal" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">welcome back</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{ asset('frontend/img/close.png') }}"></span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label>EMAIL</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>PASSWORD</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="remind-password">
                        <label class="form-check-label" for="remind-password">Remember Password</label>
                    </div>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                    <button class="btn default-btn" type="submit">LOG IN</button>
                    <p>Don't have an account? <a data-toggle="modal" href="#signupModal">sign up now <span>>></span></a></p>
                    <div class="social-login">
                        Or log in via social media 
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Sing up Modal -->
<div class="modal" id="signupModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">open free account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="img/close.png"></span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>EMAIL</label>
                        <input type="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label>PASSWORD</label>
                        <input type="text" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>CONFIRM PASSWORD</label>
                        <input type="text" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="agree-terms" required="">
                        <label class="form-check-label" for="agree-terms">I agree to the terms & conditions</label>
                    </div>
                    <button class="btn default-btn">SIGN UP</button>
                    <div class="social-login mt-5">
                        Or log in via social media 
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!------- Promo Video --------->
<div class="modal" id="promoVideoModal" tabindex="-1" role="dialog" aria-labelledby="promoVideoModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="img/close.png"></span>
                </button>        
                    <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
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
                    <span aria-hidden="true"><img src="img/close.png"></span>
                </button>
            </div>
            <div class="modal-body">
                <a href="#" class="default-btn"><i class="fas fa-random"></i> Select randomly</a>
                <span class="quantity-title">Quantity</span>
                <div class="range-wrap">
                    <input type="range" class="range">
                    <output class="bubble"></output>
                </div>
                <a href="#" class="default-btn"><i class="far fa-trash-alt"></i> Remove ticket</a>
                <div class="ticket-number">
                    <div class="item">11</div>
                    <div class="item">12</div>
                    <div class="item">12</div>
                    <div class="item">12</div>
                    <div class="item">12</div>
                    <div class="item">12</div>
                    <div class="item">12</div>
                </div>
                <div class="ticket-number-list">
                    <button class="btn">1</button>
                    <button class="btn">2</button>
                    <button class="btn">3</button>
                    <button class="btn">4</button>
                    <button class="btn">5</button>
                    <button class="btn">6</button>
                    <button class="btn">7</button>
                    <button class="btn">8</button>
                    <button class="btn">9</button>
                    <button class="btn">10</button>
                    <button class="btn">11</button>
                    <button class="btn">12</button>
                    <button class="btn">13</button>
                    <button class="btn">14</button>
                    <button class="btn">15</button>
                    <button class="btn">16</button>
                    <button class="btn">17</button>
                    <button class="btn">18</button>
                    <button class="btn">19</button>
                    <button class="btn">20</button>
                </div>
            </div>
            <div class="modal-footer">
                <a href="contest.php" class="btn default-btn">Continue Shopping</a>
                <a href="cart.php" class="btn btn-ticket">Go to Cart</a>
            </div>
        </div>
    </div>
</div>

<!--------- Games rules --------->
<div class="modal" id="gameRulesModal" tabindex="-1" role="dialog" aria-labelledby="gameRulesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gameRulesModalLabel">How to play</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="img/close.png"></span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="rules-item">
                    <li>1. Lorem Ipsum is simply dummy text of the printing and typesetting</li>
                    <li>2. Lorem Ipsum is simply dummy text of the printing and typesetting</li>
                    <li>3. Lorem Ipsum is simply dummy text of the printing and typesetting</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--------- Question modal --------->
<div class="modal" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="questionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="questionModalLabel">Select the answer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="img/close.png"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-sm-12">
                            <h6>Which of these car brand doesn't currently manufacture SUV?</h6>
                        </div>
                        <div class="col-lg-9 col-sm-12">
                            <form method="POST" action="check-out.php">
                                <div class="mcq-div">
                                    <div class="imageandtext image_grid">
                                        <label for="selimg1">
                                            <img src="http://yaitisme.com/images/getImage.jpg" class="img-thumbnail">
                                        </label>
                                        <input type="checkbox" name="selimg" id="selimg1">
                                        <div class="caption">
                                            <p>Painting</p>
                                        </div>
                                    </div>
                                    <div class="imageandtext image_grid">
                                        <label for="selimg2">
                                            <img src="http://yaitisme.com/images/getImage.jpg" class="img-thumbnail">
                                        </label>
                                        <input type="checkbox" name="selimg" id="selimg2">
                                        <div class="caption">
                                            <p>Photography</p>
                                        </div>
                                    </div>
                                    <div class="imageandtext image_grid">
                                        <label for="selimg3">
                                            <img src="http://yaitisme.com/images/getImage.jpg" class="img-thumbnail">
                                        </label>
                                        <input type="checkbox" name="selimg" id="selimg3">
                                        <div class="caption">
                                            <p>Photography</p>
                                        </div>
                                    </div>
                                    <button class="btn default-btn">Confirm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--------- Upcoming contest answer modal --------->
<div class="modal" id="answerModal" tabindex="-1" role="dialog" aria-labelledby="answerModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="answerModalTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="img/close.png"></span>
                </button>
            </div>
            <div class="modal-body">
                <img src="img/car.png" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<!--------- poll modal --------->
<div class="modal" id="pollModal" tabindex="-1" role="dialog" aria-labelledby="pollModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pollModalTitle">Give your opinion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="img/close.png"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="opinion-content">
                    <form>
                        <h5>Do you want this to happen?</h5>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="yes">Yes
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="no">No
                            </label>
                        </div>
                        <button class="btn default-btn">Send Opinion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>