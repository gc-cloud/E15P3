<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head
      content must come *after* these tags -->
        <title>The Random House</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="/css/app.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
      <div class="container">
        <header class="panel-header">
          <h1> Header content goes here </h1>
          <img src="images/logo.png" >
        </header>


        <div class="jumbotron">
            @yield('summary')
        </div>

        <div class="jumbotron">
            @yield('content')
        </div>

        <footer class="panel-footer">
          <p> Footer content goes here</p>
          <p>Powered by Laravel 5</p>
        </footer>
  </div> <!-- End main container -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html-->
