
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>The Random House</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>

<!-- NAVBAR
================================================== -->
  <body>

    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand pull-left" href="/">DWA15-P3</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <!-- Note to me: need to fix active class based on URL-->
                <!--li class="active"><a href="textgenerator">Text Generator</a></li-->
                <li><a href="textgenerator">Text Generator</a></li>
                <li><a href="usergenerator">User Generator</a></li>
                <li><a href="passwordgenerator">Password Generator</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>


    <!-- Carousel. Suggested usage: main message
    =============================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      @yield('carousel')
    </div>
    <!-- /.carousel -->


    <!-- Main content. Suggested usage: forms, form output
    ========================================================= -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
      @yield('content')
    <!-- /.jumbotron -->

      <!-- FOOTER
      ========================================================= -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p><a href="http://www.zudbu.com">&copy; 2015 Zudbu.</p>
      </footer>

    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!--script src="assets/js/vendor/holder.min.js"></script-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
