@extends('layouts.master')


@section('carousel')
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Password Generator">
      <div class="container">
        <div class="carousel-caption">
          <h1>Password Generator.</h1>
          <p>Click  on the button to generate a hard to crack password . It is fun!</p>
          <p><a class="btn btn-lg btn-primary" href="passwordgenerator" role="button">New Password</a></p>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
<div class="container">
  <div class="jumbotron">
    <h3>Select password requirements</h3>
    <!-- Display errors in form : this code is not needed since we have no validation
     we are keeping it to use as a reference for other forms
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul> -->
    {!! Form::open(array('route' => 'passwordgenerator', 'class' => 'form')) !!}


      <div class="row">
        <div class="col-sm-2">
            {!! Form::select('wordCount', array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5),3) !!}
        </div>
        <div class="col-sm-6">
          <label for='wordCount'># of Words</label>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2">
          {!! Form::select('numberCount', array('0'=>0,'1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5),1) !!}
        </div>
        <div class="col-sm-6">
          <label for='numberCount'># of Numbers</label>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2">
          {!! Form::select('specialCharacterCount', array('0'=>0,'1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5),1) !!}
        </div>
        <div class="col-sm-6">
          <label for='specialCharacterCount'># of Special Characters</label>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2">
          {!!Form::checkbox('camelCase', 'true', false) !!}
        </div>
        <div class="col-sm-6">
          <label>Use CamelCase</label>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          {!! Form::submit('New Password!', array('class'=>'btn btn-primary')) !!}
        </div>
      </div>
      <div class="row">
        <!-- Display success message with new password-->
          <h3>@if(!empty($message)) {{$message}} @endif @if(!empty($password)) {{$password}} @endif</h3>
          <a href='http://xkcd.com/936/' class="alink">Inspiration : xkcd archive</a>
      </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
