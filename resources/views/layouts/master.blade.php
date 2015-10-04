
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
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">Home</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="textgenerator">Text Generator</a></li>
                <li><a href="textgenerator"></a></li>
                <li><a href="usergenerator">User Generator</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More Stuff <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="passwordgenerator">Password Generator</a></li>
                    <li><a href="acknowledgements">Acknowledgements</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    @section ('top')
        <!-- Carousel
        ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/paperGray.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Text Generator.</h1>
              <p>Create random text that sounds as if it was written by the original author!.</p>
              <p><a class="btn btn-lg btn-primary" href="textgenerator" role="button">Check it out!</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <!--img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide"-->
          <img class="second-slide" src="images/grayPeople.gif" alt="Second slide">

          <div class="container">
            <div class="carousel-caption">
              <h1>User Generator.</h1>
              <p>Create fake users for testing, posing or for fun!</p>
              <p><a class="btn btn-lg btn-primary" href="usergenerator" role="button">Create</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/keys.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Password Generator.</h1>
              <p>Generate a hard to crack password that you can remember!.</p>
              <p><a class="btn btn-lg btn-primary" href="passwordgenerator" role="button">New Password</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
@show

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
@section ('content')
    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <!--img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140"-->
          <img class="img-circle" src="images/randomText.jpg" alt="we are random" width="140" height="140">

          <h2>Text Generator</h2>
          <p>To be or yite, the question that fields. A ghost is thy future</p>
          <p><a class="btn btn-default" href="textgenerator" role="button">Generate Text &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/person1.jpg" alt="random user" width="140" height="140">
          <h2>User Generator</h2>
          <p>My name is Pietra.  I was born in 1910. I don't like trouble.</p>
          <p><a class="btn btn-default" href="usergenerator" role="button">New User &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/oldLock.jpg" alt="random password" width="140" height="140">
          <h2>Password Generator</h2>
          <p>ThatIs1FastBycicle!.</p>
          <p><a class="btn btn-default" href="passwordgenerator" role="button">New Password &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
@show


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 Zudbu.</p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
