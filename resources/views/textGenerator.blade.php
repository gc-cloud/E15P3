@extends('layouts.master')

@section('carousel')
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="images/paperGray.jpg" alt="Text Generator">
      <div class="container">
        <div class="jumbotron">
          <!-- Display success message with new password-->
        <div class="carousel-caption">
          <h3>Text Preferences</h3>
          <!-- Display errors in form : this code is not needed since we have no validation
           we are keeping it to use as a reference for other forms
          <ul>
              @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul> -->
          {!! Form::open(array('route' => 'textgenerator', 'class' => 'form')) !!}
            <div class="row">
              <div class="col-sm-6">
                <label for='wordsToGenerate'># of Words</label>
              </div>
              <div class="col-sm-2">
                  {!! Form::select('wordsToGenerate', array('50'=>50,'100'=>100,'150'=>150,'200'=>200,'250'=>250),100) !!}
              </div>

            </div>
            <div class="row">
              <div class="col-sm-6">
                <label for='paragraphs'># of Paragraphs</label>
              </div>
              <div class="col-sm-2">
                {!! Form::select('paragraphs', array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5),3) !!}
              </div>

            </div>
            <div class="row">
              <div class="col-sm-6">
                <label for='content'>Source</label>
              </div>
              <div class="col-sm-2">
                {!! Form::select('content', array('loremIpsum'=>'Lorem Ipsum','songs'=>'Song Lyrics','hamlet'=>'Hamlet','cooking'=>'Cooking Recipes','dwa15'=>'dwa15.com '),'Lorem Ipsum') !!}
              </div>

            </div>

            <div class="row">
              <div class="col-sm-12">
                {!! Form::submit('New n-Gram Text!', array('class'=>'btn btn-primary')) !!}
              </div>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
  <div class="container">
      {!! Form::open(array('route' => 'textgenerator', 'class' => 'form')) !!}
            <p>@if(!empty($showThis)) {!!$showThis!!} @endif</p>
      {!! Form::close() !!}
  </div>
@endsection
