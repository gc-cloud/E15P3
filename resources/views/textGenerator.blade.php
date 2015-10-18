@extends('layouts.master')

@section('carousel')
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="images/paperGray.jpg" alt="Text Generator">
      <div class="container">
        <div class="jumbotron">
          <!-- Display success message with new password-->
        <div class="carousel-caption">
          <h3> Generate random text with the style of the original author!</h3>
          {!! Form::open(array('route' => 'textgenerator', 'class' => 'form')) !!}
            <div class="row">
              <div class="col-sm-4">
                <label >Provided Content</label><br>
                {!!Form::radio('content','hamlet',true)!!} Hamlet<br>
                {!!Form::radio('content','songs')!!} Song Lyrics<br>
                {!!Form::radio('content','loremIpsum')!!} Lorem Ipsum<br>
              </div>
              <div class="col-sm-4">
                <label >Scrape a Web Site</label><br>
                {!!Form::radio('content','dwa15')!!} dwa15.com<br>
                {!!Form::radio('content','about-harvard')!!} harvard.edu/about<br>
              </div>
              <div class="col-sm-4">
                <label >Paragraphs</label>
                {!! Form::select('paragraphs', array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5),3) !!}
              </div>
              <div class="col-sm-4">
                <label >Words</label>
                  {!! Form::select('wordsToGenerate', array('50'=>50,'100'=>100,'150'=>150,'200'=>200,'250'=>250),100) !!}
              </div>
            </div>
            <div class="row">
                {!! Form::submit('New n-Gram Text!', array('class'=>'btn btn-primary')) !!}
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
        @if(!empty($allParagraphs)) {!!$allParagraphs!!} @endif
  </div>
@endsection
