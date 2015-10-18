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
    <div class="row">
      <div class="col-xs-4">
        @if(!empty($photo))  {!! HTML::image('images/'.$photo , 'a picture', array('class'=>'img-circle', 'width'=>'140', 'height'=>'140')) !!} @endif
      </div>
      <div class="col-xs-8">
        <h3>  {{$name}}  {{$surname}} </h3>
          <ul>
            <li class="glyphicon glyphicon-calendar"> Born {{$birthDate}}  </li>
            <li class="glyphicon glyphicon-heart"> {{$hobby}}  </li>
            <li class="glyphicon glyphicon-envelope"> {{$email}}  </li>
          </ul>

      </div>
    </div>
</div>
@endsection
