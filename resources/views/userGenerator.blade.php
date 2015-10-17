@extends('layouts.master')

@section('carousel')
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="images/grayPeople.gif" alt="User Generator">
      <div class="container">
        <div class="carousel-caption">
          <h1>User Generator.</h1>
          <p>Select your desired user characteristics! It is fun!</p>
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
  {!! Form::open(array('route' => 'usergenerator', 'class' => 'form')) !!}
    <div class="row">
      <div class="col-xs-6">
        @if(!empty($photo))  {!! HTML::image('images/'.$photo , 'a picture', array('class'=>'img-circle', 'width'=>'140', 'height'=>'140')) !!} @endif
      </div>
      <div class="col-xs-6">
        <p> @if(!empty($fullName)) {{$fullName}} @endif</p>
        <p> @if(!empty($hobby)) {{$hobby}} @endif</p>
        <p> @if(!empty($birthDate)) {{$birthDate}} @endif</p>
      </div>
    </div>
    <!-- Iterate over results of eloquent query in user Generator Controller index-->
    <h1> About me: </h1>
      <ul>
        <li>I like {{$hobby}}</li>
      </ul>

  {!! Form::close() !!}

</div>
@endsection
