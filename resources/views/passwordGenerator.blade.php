@extends('layouts.master')


@section('carousel')
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="images/keys.jpg" alt="Password Generator">
      <div class="container">
        <div class="carousel-caption">
          <h1>Password Generator.</h1>
          {!! Form::open(array('route' => 'passwordgenerator', 'class' => 'form')) !!}
            <div class="row">
              <div class="col-sm-6">
                <label >Words</label>
              </div>
              <div class="col-sm-2">
                  {!! Form::select('wordCount', array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5),3) !!}
              </div>

            </div>
            <div class="row">
              <div class="col-sm-6">
                <label >Numbers</label>
              </div>
              <div class="col-sm-2">
                {!! Form::select('numberCount', array('0'=>0,'1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5),1) !!}
              </div>

            </div>
            <div class="row">
              <div class="col-sm-6">
                <label >Special Characters</label>
              </div>
              <div class="col-sm-2">
                {!! Form::select('specialCharacterCount', array('0'=>0,'1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5),1) !!}
              </div>

            </div>
            <div class="row">
              <div class="col-sm-6">
                <label>Use PascalCase</label>
              </div>
              <div class="col-sm-2">
                {!!Form::checkbox('PascalCase', 'true', false) !!}
              </div>

            </div>
            <div class="row">
              <div class="col-sm-12">
                {!! Form::submit('New Password!', array('class'=>'btn btn-primary')) !!}
              </div>
                <a href='http://xkcd.com/936/' class="alink">Inspiration : xkcd archive</a>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="container">
    <div class="row">
            @if(!empty($message)) <h3 class="glyphicon glyphicon-lock"> {{$message}}  </h3> @endif
          <h3> @if(!empty($password)) {{$password}} @endif</h3>
    </div>
  </div>
@endsection
