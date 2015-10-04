@extends('layouts.master')

@section('top')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Text Generator.</h1>
          <p>Click  on the button to create random text. It is fun!</p>
          <p><a class="btn btn-lg btn-primary" href="text" role="button">Sign up today</a></p>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.carousel -->
@endsection


@section('content')
  <div class="jumbotron">
    <p>This is where we put the results of the text generator.</p>
  </div>
@endsection
