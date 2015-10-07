@extends('layouts.master')

@section('carousel')
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="User Generator">
      <div class="container">
        <div class="carousel-caption">
          <h1>User Generator.</h1>
          <p>Select your desired user characteristics and build it. It is fun!</p>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
<div class="container">

  <div class="jumbotron">
  {!! Form::open(array('route' => 'usergenerator', 'class' => 'form')) !!}
    <!-- Display new user-->
    @if(!empty($photo))  {!! HTML::image('images/'.$photo , 'a picture', array('class'=>'img-circle', 'width'=>'140', 'height'=>'140')) !!} @endif
    <p> @if(!empty($fullName)) {{$fullName}} @endif</p>
    <p> @if(!empty($hobby)) {{$hobby}} @endif</p>
    {!! Form::submit('New User Please', array('class'=>'btn btn-primary')) !!}
  {!! Form::close() !!}
  </div>
</div>
@endsection
