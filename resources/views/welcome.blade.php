<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>


        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
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
</html>
