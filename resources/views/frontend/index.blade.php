@extends('frontend.layouts.main')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="next-draw">
        <div>
          <h3>
              next draw
          </h3>
          <small>
              choose your dream car ticket
          </small>
        </div>
        <div>
          <p>
              entries close:
          </p>
          <span>
              45d | 15h | 51m | 44s
          </span>
        </div>
        <div>
          <a class="nav-link btn btn-ticket" href="{{ route('live.contest') }}">
              <img src="{{ asset('frontend/img/ticket-icon.png') }}">
                  buy tickets
              </img>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
      <div class="col-lg-9 col-md-12">
          <div class="steps-to-apply">
              <h6>
                  Need to know about
              </h6>
              <h1>
                  how to play
              </h1>
              <small>
                  Follow these 3 easy steps!
              </small>
              <div class="steps-list">
                  <div>
                      <img src="{{ asset('frontend/img/step1.png') }}">
                          <h6>
                              choose
                          </h6>
                          <p>
                              Register to SUEPRIZE & Choose your contest
                          </p>
                      </img>
                  </div>
                  <div>
                      <img src="{{ asset('frontend/img/step2.png') }}">
                          <h6>
                              buy
                          </h6>
                          <p>
                              Pick Your Numbers & Complete your Purchase
                          </p>
                      </img>
                  </div>
                  <div>
                      <img src="{{ asset('frontend/img/step3.png') }}">
                          <h6>
                              win
                          </h6>
                          <p>
                              Start Dreaming, you're almost there
                          </p>
                      </img>
                  </div>
              </div>
          </div>
      </div>
      <img class="stepsbg" src="{{ asset('frontend/img/home-illustration.png') }}">
      </img>
  </div>
</div>
<section id="current-contest">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="contest-list-title">
                  <h6>
                      Try your chance at winning
                  </h6>
                  <h1>
                      current contest
                  </h1>
                  <small>
                      Participants buy tickets and lots are drawn to determine the winners
                  </small>
              </div>
          </div>
          @if(sizeof($curentcontests)> 0)
          @foreach($curentcontests as $curentcontest)
          <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="current-item">
                  <a href="{{ route('live.contest.detail', $curentcontest->id) }}">
                      <div class="prize-img">
                          <img src="{{ asset('uploads/livecontest/'. $curentcontest->f_image) }}">
                      </div>
                  </a>
                  <div class="contest-no">
                      Contest No:
                      <br>
                          <span>
                              {{ $curentcontest->contest_no }}
                          </span>
                      </br>
                  </div>
                  @php
                  $date = $curentcontest->end_date;
                  $ed = date('Y-m-d', strtotime($date));
                  $currenDate = date('Y-m-d');
                  $currenDate = \Carbon\Carbon::createFromFormat('Y-m-d', $currenDate);
                  $ed = \Carbon\Carbon::createFromFormat('Y-m-d', $ed);
                  $diff = $currenDate->diffInDays($ed);
                  @endphp
                  <div class="ticket-detail">
                      <a class="prize-name" href="{{ route('live.contest.detail', $curentcontest->id) }}">
                          {{ $curentcontest->title }}
                      </a>
                      <p class="ticket-price">
                          ${{ $curentcontest->price }}
                      </p>
                      <hr>
                          <div class="ticket-info">
                              <i class="far fa-clock">
                              </i>
                              {{ $diff }}d
                              <span class="bar">
                                  |
                              </span>
                              <span class="float-right">
                                  <i class="fas fa-ticket-alt">
                                  </i>
                                  {{ $curentcontest->amount }}
                                  <b>
                                      Remaining
                                  </b>
                              </span>
                          </div>
                      </hr>
                  </div>
              </div>
          </div>
          @endforeach
          @else
          <div class="col-lg-4 col-md-6 col-sm-12">
            No Data Found!
          </div>
          @endif
          <div class="more-contest">
              <a class="btn btn-more" href="{{ route('live.contest') }}">
                  browse more
              </a>
          </div>
      </div>
  </div>
</section>
<section id="latest-winners" style="display: none">
  <div class="background-img">
      <div class="bg1">
      </div>
      <div class="bg2">
          <h6>
              Meet the latest winners from your favorite contest
          </h6>
          <h1>
              They Just Won Big!
          </h1>
          <small>
              Check your ticket number(s) to see if you are a Winner in the Dream Lottery
          </small>
      </div>
      <div class="bg3">
      </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="latest-winners-list">
                  <nav class="nav nav-pills flex-column flex-sm-row">
                      <a aria-controls="nav-car" aria-selected="true" class="flex-sm-fill text-sm-center nav-link active" data-toggle="tab" href="#nav-car" id="nav-car-tab" role="tab">
                          <img src="{{ asset('frontend/img/dream-car.png') }}">
                              <br>
                                  Dream Car
                              </br>
                          </img>
                      </a>
                      <a aria-controls="nav-bikes" aria-selected="false" class="flex-sm-fill text-sm-center nav-link" data-toggle="tab" href="#nav-bikes" id="nav-bikes-tab" role="tab">
                          <img src="{{ asset('frontend/img/bikes.png') }}">
                              <br>
                                  Bikes
                              </br>
                          </img>
                      </a>
                      <a aria-controls="nav-watch" aria-selected="false" class="flex-sm-fill text-sm-center nav-link" data-toggle="tab" href="#nav-watch" id="nav-watch-tab" role="tab">
                          <img src="{{ asset('frontend/img/watch.png') }}">
                              <br>
                                  watch
                              </br>
                          </img>
                      </a>
                      <a aria-controls="nav-others" aria-selected="false" class="flex-sm-fill text-sm-center nav-link" data-toggle="tab" href="#nav-others" id="nav-others-tab" role="tab">
                          <img src="{{ asset('frontend/img/others.png') }}">
                              <br>
                                  others
                              </br>
                          </img>
                      </a>
                      <a aria-controls="nav-money" aria-selected="false" class="flex-sm-fill text-sm-center nav-link" data-toggle="tab" href="#nav-money" id="nav-money-tab" role="tab">
                          <img src="{{ asset('frontend/img/money.png') }}">
                              <br>
                                  money
                              </br>
                          </img>
                      </a>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                      <div aria-labelledby="nav-car-tab" class="tab-pane fade show active" id="nav-car" role="tabpanel">
                          <div class="row">
                              <div class="col-lg-4">
                                  <div class="check-ticket">
                                      <form>
                                          <h6>
                                              check my numbers
                                          </h6>
                                          <small>
                                              Are you holding on to a winning ticket? Here's an easy way to find out.
                                          </small>
                                          <input class="form-control" placeholder="Enter contact no" type="text">
                                              <small>
                                                  Enter Your Lottery Numbers
                                              </small>
                                              <input class="ticketno form-control" placeholder="00-00-00-00-00-00-00-00" type="text"/>
                                              <div style="text-align: center;">
                                                  <button class="btn default-btn">
                                                      check my number
                                                  </button>
                                              </div>
                                          </input>
                                      </form>
                                  </div>
                              </div>
                              <div class="col-lg-8">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
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
                      <div aria-labelledby="nav-bikes-tab" class="tab-pane fade" id="nav-bikes" role="tabpanel">
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="check-ticket">
                                      <form>
                                          <h6>
                                              check my numbers
                                          </h6>
                                          <small>
                                              Are you holding on to a winning ticket? Here's an easy way to find out.
                                          </small>
                                          <input class="form-control" placeholder="Enter contact no" type="text">
                                              <small>
                                                  Enter Your Lottery Numbers
                                              </small>
                                              <input class="ticketno form-control" placeholder="00-00-00-00-00-00-00-00" type="text"/>
                                              <div style="text-align: center;">
                                                  <button class="btn default-btn">
                                                      check my number
                                                  </button>
                                              </div>
                                          </input>
                                      </form>
                                  </div>
                              </div>
                              <div class="col-md-8">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
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
                      <div aria-labelledby="nav-watch-tab" class="tab-pane fade" id="nav-watch" role="tabpanel">
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="check-ticket">
                                      <form>
                                          <h6>
                                              check my numbers
                                          </h6>
                                          <small>
                                              Are you holding on to a winning ticket? Here's an easy way to find out.
                                          </small>
                                          <input class="form-control" placeholder="Enter contact no" type="text">
                                              <small>
                                                  Enter Your Lottery Numbers
                                              </small>
                                              <input class="ticketno form-control" placeholder="00-00-00-00-00-00-00-00" type="text"/>
                                              <div style="text-align: center;">
                                                  <button class="btn default-btn">
                                                      check my number
                                                  </button>
                                              </div>
                                          </input>
                                      </form>
                                  </div>
                              </div>
                              <div class="col-md-8">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
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
                      <div aria-labelledby="nav-others-tab" class="tab-pane fade" id="nav-others" role="tabpanel">
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="check-ticket">
                                      <form>
                                          <h6>
                                              check my numbers
                                          </h6>
                                          <small>
                                              Are you holding on to a winning ticket? Here's an easy way to find out.
                                          </small>
                                          <input class="form-control" placeholder="Enter contact no" type="text">
                                              <small>
                                                  Enter Your Lottery Numbers
                                              </small>
                                              <input class="ticketno form-control" placeholder="00-00-00-00-00-00-00-00" type="text"/>
                                              <div style="text-align: center;">
                                                  <button class="btn default-btn">
                                                      check my number
                                                  </button>
                                              </div>
                                          </input>
                                      </form>
                                  </div>
                              </div>
                              <div class="col-md-8">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
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
                      <div aria-labelledby="nav-money-tab" class="tab-pane fade" id="nav-money" role="tabpanel">
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="check-ticket">
                                      <form>
                                          <h6>
                                              check my numbers
                                          </h6>
                                          <small>
                                              Are you holding on to a winning ticket? Here's an easy way to find out.
                                          </small>
                                          <input class="form-control" placeholder="Enter contact no" type="text">
                                              <small>
                                                  Enter Your Lottery Numbers
                                              </small>
                                              <input class="ticketno form-control" placeholder="00-00-00-00-00-00-00-00" type="text"/>
                                              <div style="text-align: center;">
                                                  <button class="btn default-btn">
                                                      check my number
                                                  </button>
                                              </div>
                                          </input>
                                      </form>
                                  </div>
                              </div>
                              <div class="col-md-8">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="winners">
                                              <div class="card mb-3">
                                                  <div class="row no-gutters">
                                                      <div class="col-md-4 prizebg">
                                                          <img alt="..." class="card-img" src="{{ asset('frontend/img/car.png') }}">
                                                          </img>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="card-body">
                                                              <div class="card-title">
                                                                  <p class="prize-name">
                                                                      The Breeze  Zodiac IX
                                                                  </p>
                                                                  <p class="draw-date">
                                                                      Draw took place on
                                                                      <br>
                                                                          <span>
                                                                              Saturday April 20,2020
                                                                          </span>
                                                                      </br>
                                                                  </p>
                                                              </div>
                                                              <div class="winners-pic" style="background-image: url(img/user.jpg);">
                                                              </div>
                                                              <hr>
                                                                  <div class="card-text">
                                                                      <div>
                                                                          <span>
                                                                              Winning Numbers
                                                                          </span>
                                                                          <br>
                                                                              1122212122212121212
                                                                          </br>
                                                                      </div>
                                                                      <div>
                                                                          <span>
                                                                              Contest No
                                                                          </span>
                                                                          <br>
                                                                              B2T
                                                                          </br>
                                                                      </div>
                                                                  </div>
                                                              </hr>
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
                      <div class="more-winners">
                          <a class="btn btn-more" href="#">
                              browse more
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<section id="customer-feedback" style="display: none">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="feedback-home">
                  <h6>
                      Testimonial
                  </h6>
                  <h1>
                      our Happy Customers All Around the World
                  </h1>
                  <small>
                      With over 12 years of experience as the world’s leading online lottery service provider.
                      Find out what our members have to say about us!
                  </small>
              </div>
          </div>
          <div class="col-lg-8 offset-lg-2 col-sm-12">
              <div class="testimonial-content">
                  <img src="{{ asset('frontend/img/user.jpg') }}">
                      <h6 class="customer-name">
                          dave ford
                      </h6>
                      <p>
                          “Unbelievable this is a dream come true,no way would I ever think I would own a car like this”
                      </p>
                  </img>
              </div>
              <div class="more-contest">
                  <a class="btn btn-more" href="#">
                      browse more
                  </a>
              </div>
          </div>
      </div>
  </div>
</section>
<section id="customer-support">
  <div class="container">
      <div class="row">
          <div class="col-lg-8 offset-lg-2 col-sm-12">
              <div class="title">
                  <h6>
                      Get in touch with our friendly support
                  </h6>
                  <h1>
                      Customer Support
                  </h1>
                  <small>
                      Have a question or need help? Contact our friendly support team.
                  </small>
              </div>
          </div>
          <div class="col-md-6 col-sm-12">
              <div class="support-left">
                  <div class="card mb-3">
                      <div class="row no-gutters">
                          <div class="col-lg-4 call-center">
                              <img alt="..." class="card-img" src="{{ asset('frontend/img/support1.png') }}">
                              </img>
                          </div>
                          <div class="col-lg-8">
                              <div class="card-body">
                                  <div class="card-title">
                                      Talk to our support team
                                  </div>
                                  <div class="card-text">
                                      <p>
                                          Got a question about Lotteries? Get in touch with our friendly staff.
                                      </p>
                                      <a class="btn support-btn" href="tel:+8801943869105">
                                          Call us
                                          <i class="fas fa-mobile-alt">
                                          </i>
                                      </a>
                                      <a class="btn support-btn" href="mailto: itsumrat@gmail.com">
                                          Email us
                                          <i class="far fa-envelope">
                                          </i>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-sm-12">
              <div class="support-right">
                  <div class="card mb-3">
                      <div class="row no-gutters">
                          <div class="col-lg-4 help-center">
                              <img alt="..." class="card-img" src="{{ asset('frontend/img/support2.png') }}">
                              </img>
                          </div>
                          <div class="col-lg-8">
                              <div class="card-body">
                                  <div class="card-title">
                                      Our Guide
                                  </div>
                                  <div class="card-text">
                                      <p>
                                          Check out our FAQs to see if we can help you out.
                                      </p>
                                      <a class="btn support-btn" href="{{ route('faq') }}">
                                          FAQs & Help
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
