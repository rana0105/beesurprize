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
                    <span aria-hidden="true"><img src="{{ asset('frontend/img/close.png') }}"></span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label>NAME</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>USERNAME</label>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>EMAIL</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>PASSWORD</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>CONFIRM PASSWORD</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
                    <span aria-hidden="true"><img src="{{ asset('frontend/img/close.png') }}"></span>
                </button>        
                    <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
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
                    <span aria-hidden="true"><img src="{{ asset('frontend/img/close.png') }}"></span>
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


<!--------- Upcoming contest answer modal --------->
<div class="modal" id="answerModal" tabindex="-1" role="dialog" aria-labelledby="answerModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="answerModalTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{ asset('frontend/img/close.png') }}"></span>
                </button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('frontend/img/car.png') }}" class="img-fluid">
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
                    <span aria-hidden="true"><img src="{{ asset('frontend/img/close.png') }}"></span>
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

    <!--------- Ticket edit modal --------->
<div class="modal" id="ticketEditMlllodal" tabindex="-1" role="dialog" aria-labelledby="ticketEditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ticketEditModalLabel">choose your ticket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{ asset('frontend/img/close.png') }}"></span>
                </button>
            </div>
            <div class="modal-body">
                <input class="form-control getVal" type="text" name="" id="tId" value="">\
                <edit-ticket :ticket-id="()=> getElementById(tId).value()"></edit-ticket>
            </div>
            <div class="modal-footer">
                <a href="{{ route('live.contest') }}" class="btn default-btn">Continue Shopping</a>
                <a href="{{ route('cart') }}" class="btn btn-ticket">Go to Cart</a>
            </div>
        </div>
    </div>
</div>