@extends('layouts.master')

@section('top')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Password Generator.</h1>
          <p>Click  on the button to generate a hard to crack password . It is fun!</p>
          <p><a class="btn btn-lg btn-primary" href="passwordgenerator" role="button">Sign up today</a></p>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.carousel -->
@endsection


@section('content')
  <div class="jumbotron">
    <p>This is where we put the results of the passwordgenerator generator.</p>
  </div>
@endsection
