
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

    <title>SEVA TRUST</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
	    <div class="col-md-2 col-xs-2 col-sm-2 text-left">
	    	<h3><a href="/"><i class="glyphicon glyphicon-home color-white"></i></a></h3>
	    </div>
	    <div class="col-md-6 col-xs-6 col-sm-6 text-center">
	    	<h3 class="color-white">SEVA TRUST</h3>
	    </div>    
	    <div class="col-md-2 col-xs-2 col-sm-2 text-right">
	    	<h3><a href="/@yield('add')"><i class="glyphicon glyphicon-plus-sign color-white"></i></a></h3>
	    </div>
	    <div class="col-md-2 col-xs-2 col-sm-2 text-right">
	    	<h3><a href="/@yield('list')"><i class="glyphicon glyphicon-th-list color-white"></i></a></h3>
	    </div>
    </nav>

    <div class="container">

     <div class="col-md-12 pad-top60">
     <div class="clear">&nbsp;</div>
     @section('content')
     @show

       

     </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.min.js"></script>   
    <script src="/js/bootstrap.min.js"></script>

  </body>
</html>
