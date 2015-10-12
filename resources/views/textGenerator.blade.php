@extends('layouts.master')

@section('carousel')
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Text Generator">
      <div class="container">
        <div class="carousel-caption">
          <h1>Text Generator.</h1>
          <p>Click  on the button to create random text. It is fun!</p>
          <p><a class="btn btn-lg btn-primary" href="textgenerator" role="button">Sign up today</a></p>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')

<div class="container">
  <div class="jumbotron">
    <!-- Display success message with new password-->
    <h3>Select Text Preferences</h3>
    <!-- Display errors in form : this code is not needed since we have no validation
     we are keeping it to use as a reference for other forms
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul> -->
    {!! Form::open(array('route' => 'textgenerator', 'class' => 'form')) !!}


      <div class="row">
        <div class="col-sm-2">
            {!! Form::select('wordsToGenerate', array('50'=>50,'100'=>100,'150'=>150,'200'=>200,'250'=>250),200) !!}
        </div>
        <div class="col-sm-6">
          <label for='wordsToGenerate'># of Words</label>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2">
          {!! Form::select('paragraphs', array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5),3) !!}
        </div>
        <div class="col-sm-6">
          <label for='paragraphs'># of Paragraphs</label>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2">
          {!! Form::select('source', array('songs'=>'songs','loremIpsum'=>'loremIpsum','repeatable'=>'repeatable','hamlet'=>'hamlet','ladyGaga'=>'ladyGaga','hamlet'=>'hamlet'),'songs') !!}
        </div>
        <div class="col-sm-6">
          <label for='source'>Content</label>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          {!! Form::submit('New Text!', array('class'=>'btn btn-primary')) !!}
        </div>
      </div>
      <div class="row">
        <!-- Display success message with new password-->
          <p>@if(!empty($showThis)) {!!$showThis!!} @endif</p>

      </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
