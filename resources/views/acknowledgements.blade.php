@extends('layouts.master')

@section('carousel')
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Acknowledgements">
      <div class="container">
        <div class="carousel-caption">
          <h1>Acknowledgements.</h1>
          <p>This project was made possible thanks to the contributiosn of:</p>
          <p><a class="btn btn-lg btn-primary" href="passwordgenerator" role="button">Sign up today</a></p>
        </div>
      </div>
    </div>
  </div>
@endsection


@section('content')
  <p>This is where we put the acknowledgements.</p>
@endsection
