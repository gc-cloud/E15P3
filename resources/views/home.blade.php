@extends('layouts.master')

@section ('carousel')

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="images/paperGray.jpg" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Text Generator.</h1>
          <p>Create random text that sounds as if it was written by the original author!.</p>
          <p><a class="btn btn-lg btn-primary" href="textgenerator" role="button">Check it out!</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <!--img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide"-->
      <img class="second-slide" src="images/grayPeople.gif" alt="Second slide">

      <div class="container">
        <div class="carousel-caption">
          <h1>User Generator.</h1>
          <p>Create fake users for testing, posing or for fun!</p>
          <p><a class="btn btn-lg btn-primary" href="usergenerator" role="button">Create</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img class="third-slide" src="images/keys.jpg" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Password Generator.</h1>
          <p>Generate a hard to crack password that you can remember!.</p>
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

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <!--img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140"-->
          <img class="img-circle" src="images/randomText.gif" alt="we are random" width="140" height="140">

          <h2>Text Generator</h2>
          <p>To be or yite, the question that fields. A ghost is thy future</p>
          <p><a class="btn btn-default" href="textgenerator" role="button">Generate Text &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/person1.jpg" alt="random user" width="140" height="140">
          <h2>User Generator</h2>
          <p>My name is Pietra.  I was born in 1987. I don't like trouble.</p>
          <p><a class="btn btn-default" href="usergenerator" role="button">New User &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/oldLock.jpg" alt="random password" width="140" height="140">
          <h2>Password Generator</h2>
          <p>ThatIs1FastBycicle!.</p>
          <p><a class="btn btn-default" href="passwordgenerator" role="button">New Password &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
@endsection
