@extends('layouts.master')

@section('carousel')
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="User Generator">
      <div class="container">
        <div class="carousel-caption">
          <h1>User Generator.</h1>
          <p>Click  on the button to create a new user. It is fun!</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
        </div>
      </div>
    </div>
  </div>
@endsection


@section('content')
  <p>This is where we put the results of the user generator.</p>
@endsection
