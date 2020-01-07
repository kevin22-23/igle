<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
	<title>IBB El Bosque</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    	<?php include("barra_menu.php"); ?>


    <!-- Carousel
    ================================================== -->
	<div class="container-fluid">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
			<div class="item active">
			  <img class="first-slide" src="images/inicio.jpg" alt="First slide">
			  <div class="container">
				<div class="carousel-caption">
				  <h1>Te Esperamos.</h1>
				  <p>Si quieres conocer más de nuestras reuniones entra aquí</p>
				  <p><a class="btn btn-lg btn-primary" href="#" role="button">Reuniones</a></p>
				</div>
			  </div>
			</div>
			<div class="item">
			  <img class="second-slide" src="images/igle1.jpg" alt="Second slide">
			  <div class="container">
				<div class="carousel-caption">
				  <h1>Another example headline.</h1>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				  <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
				</div>
			  </div>
			</div>
			<div class="item">
			  <img class="third-slide" src="images/igle1.jpg" alt="Third slide">
			  <div class="container">
				<div class="carousel-caption">
				  <h1>One more for good measure.</h1>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
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
	</div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
	<br>
    <div class="container-fluid marketing" align="center">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="images/pastor_cesar.jpg" alt="Generic placeholder image" width="140" height="140">
          <h3>Nuestro Pastor</h3>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/biblia.jpg" alt="Generic placeholder image" width="140" height="140">
          <h3>¿Qué creemos?</h3>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/ministerios.jpg" alt="Generic placeholder image" width="140" height="140">
          <h3>Ministerios</h3>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
<!--
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Sabías Qué? <span class="text-muted">Cristo murió por ti!</span></h2>
          <p class="lead">Sabías que tu y yo somos pecadores?<br>
		  Sabías que el pecado nos separa de Dios?<br>
		  Sabías que el pecado te condena al infierno?</p>
		  <p class="lead">Sabías que Dios quiere limpiar tu pecado?<br>
		  Sabías que Dios anhela una comunión contigo?.<br>
		  Sabías que Dios, por amor, envió a su Hijo a morir por ti?.<br>
		  Quieres saber más de Cristo?.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>
-->	  
	  <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Actividades</h2>
          <p class="lead">Sabías que tu y yo somos pecadores?<br>
		  Sabías que el pecado nos separa de Dios?<br>
		  Sabías que el pecado te condena al infierno?</p>
		  <p class="lead">Sabías que Dios quiere limpiar tu pecado?<br>
		  Sabías que Dios anhela una comunión contigo?.<br>
		  Sabías que Dios, por amor, envió a su Hijo a morir por ti?.<br>
		  Quieres saber más de Cristo?.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Invitación <span class="text-muted">Reuniones</span></h2>
          <p class="lead">Te queremos invitar a que nos acompañes en nuestras reuniones, para que juntos podamos adorar y aprender de Dios alrededor de su Palabra.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Dónde estamos. <span class="text-muted">Paradero 35 Gn. Avda.</span></h2>
          <p class="lead">Nos ubicamos a unas cuadras del paradero 35 de la Gran Avenida José Miguel Carrera,
		  específicamente en Claudio Arrau #435. Aquí te indicamos cómo llegar.</p>
        </div>
        <div class="col-md-5">
          <!--<img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
			-->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.544595778992!2d-70.68065438514905!3d-33.5652067107963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662dbcf1e97fda5%3A0x750f3be7062ef293!2sIBB+EL+BOSQUE!5e0!3m2!1ses!2scl!4v1466560515518" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
		<?php include("footer.php"); ?>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 	
  </body>
</html>
