@extends('layouts.master')
@section ('carousel')
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="images/paperGray.jpg" alt="n-Gram Text Generator">
      <div class="container">
        <div class="carousel-caption">
          <h3>n-Gram Text Generator.</h3>
          <p>Create random text that mimics the original author!</p>
          <p><a class="btn btn-lg btn-primary" href="textgenerator" role="button">Check it out!</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img class="second-slide" src="images/grayPeople.gif" alt="User Generator">
      <div class="container">
        <div class="carousel-caption">
          <h3>MVC User Generator.</h3>
          <p>Create fictional users with one button!</p>
          <p><a class="btn btn-lg btn-primary" href="usergenerator" role="button">Create</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img class="third-slide" src="images/keys.jpg" alt="Password Generator">
      <div class="container">
        <div class="carousel-caption">
          <h3>Password Generator.</h3>
          <p>Create a strong password that you can remember!</p>
          <p><a class="btn btn-lg btn-primary" href="passwordgenerator" role="button">New Password</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
@endsection

@section ('content')
    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle picture" src="images/randomText.gif" alt="we are random" >
          <h2>n-Gram Text Generator</h2>
          <p><a class="btn btn-default" href="textgenerator" role="button">Generate Text &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="img-circle picture" src="images/person1.jpg" alt="random user" >
          <h2>User Generator</h2>
          <p><a class="btn btn-default" href="usergenerator" role="button">New User &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="img-circle picture" src="images/oldLock.jpg" alt="random password" >
          <h2>Password Generator</h2>
          <p><a class="btn btn-default" href="passwordgenerator" role="button">New Password &raquo;</a></p>
        </div>
      </div>
    </div>
@endsection
