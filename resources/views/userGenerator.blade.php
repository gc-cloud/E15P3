@extends('layouts.master')

@section('carousel')
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="images/grayPeople.gif" alt="User Generator">
      <div class="container">
        <div class="carousel-caption">
          <h3>MVC User Generator.</h3>
          <p>Create fictional characters with the click of a button!</p>
          {!! Form::open(array('route' => 'usergenerator', 'class' => 'form')) !!}
            {!! Form::submit('New User', array('class'=>'btn btn-primary')) !!}
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
<div class="container">
  <div class="pictureContainer">
  <!-- <div class="col-xs-6"> -->
  @if(!empty($photo))  {!! HTML::image('images/'.$photo , 'a picture', array('class'=>'img-circle userPicture ')) !!} @endif
  </div>
  <!-- </div> -->
  <div class="userSummary">
    <!-- <div class="col-xs-6 userSummary"> -->
    <h3>  {{$name}}  {{$surname}} </h3>
    <ul>
      <li class="glyphicon glyphicon-calendar bullet"> Born {{$birthDate}}  </li>
      <li class="glyphicon glyphicon-heart bullet"> {{$hobby}}  </li>
      <li class="glyphicon glyphicon-envelope bullet"> {{$email}}  </li>
    </ul>
    <!-- </div> -->
  </div>
</div>
@endsection
