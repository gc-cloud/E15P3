<!DOCTYPE html>
<!--html>
    <head>
        <title>Laravel</title>


        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>

      <img src="https://www.flickr.com/photos/21644167@N04/6693329889/"" class="img-rounded">
        <div class="container">
            <div class="content">
                <p class="title">Hello Visitor!</p>
                <p class="title">This is a placeholder for P3.</p>
                <p> Test a Bootstrap button</p>
                <a href="http://zudbu.com" class="btn btn-success"> Visit Zudbu</a>
                <p> Test a Laravel button</p>
                {!! Form::submit('Submit!') !!}
                <p> Test a Laravel button with Bootstrap styling</p>
                {!!Form::submit('Submit', ['class' => 'btn btn-success'],[link_to('http://zudbu.com')])!!}
            </div>
            <p>Powered by Laravel 5</p>
        </div>

    </body>
</html-->

@extends('layouts.master')
<p> this is the welcome blade</p>
<!--
@section('summary')
    <p class="title">This is the summary of this page .</p>
    <h1> Hello There!</h1>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
-->
