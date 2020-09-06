@extends('frontend.layouts.main')
@section('content')
<div class="container">
    <div class="cart-page">
        <div class="title">
            <h1>
                my cart
            </h1>
        </div>
        
            <cartedit></cartedit>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="similar-contest">
                <h1>
                    More Contest
                </h1>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="current-item">
                <a href="contest-detail.php">
                    <div class="prize-img">
                        <img src="img/cars.png">
                        </img>
                    </div>
                </a>
                <div class="contest-no">
                    Contest No:
                    <br>
                        <span>
                            B2T
                        </span>
                    </br>
                </div>
                <div class="ticket-detail">
                    <a class="prize-name" href="contest-detail.php">
                        The Breeze  Zodiac IX
                    </a>
                    <p class="ticket-price">
                        $3.95
                    </p>
                    <hr>
                        <div class="ticket-info">
                            <i class="far fa-clock">
                            </i>
                            5d
                            <span class="bar">
                                |
                            </span>
                            <span class="float-right">
                                <i class="fas fa-ticket-alt">
                                </i>
                                9805
                                <b>
                                    Remaining
                                </b>
                            </span>
                        </div>
                    </hr>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="current-item">
                <a href="contest-detail.php">
                    <div class="prize-img">
                        <img src="img/cars.png">
                        </img>
                    </div>
                </a>
                <div class="contest-no">
                    Contest No:
                    <br>
                        <span>
                            B2T
                        </span>
                    </br>
                </div>
                <div class="ticket-detail">
                    <a class="prize-name" href="contest-detail.php">
                        The Breeze  Zodiac IX
                    </a>
                    <p class="ticket-price">
                        $3.95
                    </p>
                    <hr>
                        <div class="ticket-info">
                            <i class="far fa-clock">
                            </i>
                            5d
                            <span class="bar">
                                |
                            </span>
                            <span class="float-right">
                                <i class="fas fa-ticket-alt">
                                </i>
                                9805
                                <b>
                                    Remaining
                                </b>
                            </span>
                        </div>
                    </hr>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="current-item">
                <a href="contest-detail.php">
                    <div class="prize-img">
                        <img src="img/cars.png">
                        </img>
                    </div>
                </a>
                <div class="contest-no">
                    Contest No:
                    <br>
                        <span>
                            B2T
                        </span>
                    </br>
                </div>
                <div class="ticket-detail">
                    <a class="prize-name" href="contest-detail.php">
                        The Breeze  Zodiac IX
                    </a>
                    <p class="ticket-price">
                        $3.95
                    </p>
                    <hr>
                        <div class="ticket-info">
                            <i class="far fa-clock">
                            </i>
                            5d
                            <span class="bar">
                                |
                            </span>
                            <span class="float-right">
                                <i class="fas fa-ticket-alt">
                                </i>
                                9805
                                <b>
                                    Remaining
                                </b>
                            </span>
                        </div>
                    </hr>
                </div>
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
                    <span aria-hidden="true"><img src="{{ asset('frontend/img/close.png') }}"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-sm-12">
                            <h6>{{ $question->question }} ?</h6>
                        </div>
                        <div class="col-lg-9 col-sm-12">
                            <form method="POST" action="{{ route('questionAns') }}">
                                @csrf
                                <input type="hidden" name="question_id" value="{{ $question->id }}">
                                <div class="row mcq-div">
                                    <div class="col-md-3 imageandtext image_grid">
                                        <label for="selimg1">
                                            <img src="{{ asset('uploads/question/'. $question->ans_ai) }}" class="img-thumbnail">
                                        </label>
                                        <input type="radio" name="question_ans" id="selimg1" value="A">
                                        <div class="caption">
                                            <p>Painting</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 imageandtext image_grid">
                                        <label for="selimg2">
                                            <img src="{{ asset('uploads/question/'. $question->ans_bi) }}" class="img-thumbnail">
                                        </label>
                                        <input type="radio" name="question_ans" id="selimg2" value="B">
                                        <div class="caption">
                                            <p>Photography</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 imageandtext image_grid">
                                        <label for="selimg3">
                                            <img src="{{ asset('uploads/question/'. $question->ans_ci) }}" class="img-thumbnail">
                                        </label>
                                        <input type="radio" name="question_ans" id="selimg3" value="C">
                                        <div class="caption">
                                            <p>Photography</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 imageandtext image_grid">
                                        <label for="selimg4">
                                            <img src="{{ asset('uploads/question/'. $question->ans_di) }}" class="img-thumbnail">
                                        </label>
                                        <input type="radio" name="question_ans" id="selimg4" value="D">
                                        <div class="caption">
                                            <p>Photography</p>
                                        </div>
                                    </div>
                                    <confirm-post></confirm-post>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--------- login warning modal --------->
<div class="modal" id="logiWarningModal" tabindex="-1" role="dialog" aria-labelledby="logiWarningModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logiWarningModalLabel">Unauthorized users!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{ asset('frontend/img/close.png') }}"></span>
                </button>
            </div>
            <div class="modal-body">
                Please login your valid information!
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

@endsection
