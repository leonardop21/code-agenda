<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Agenda Telefonica</title>

    <!-- Bootstrap -->
    <link href="css/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    	<div class="row">
    		<div class="col-lg-12 page-header">
    			<h1>
    				Code Education <br>
    			</h1>
    			<small>
	    			<i class="glyphicon glyphicon-phone-alt">
	    			 Agenda Telefonica
	    			</i>
    			</small>
    			<span class="pull-right">
    				<form class="form-iline" action="#" method="post">
				    	<div class="input-group">
					    	<input type="text" class="form-control" placeholder="Pesquisar Telefone">
					      <span class="input-group-btn">
					        <button class="btn btn-default" type="button"	><i class="fa fa-search" aria-hidden="true"></i>
					        </button>
					      </span>
				    	</div><!-- /input-group -->	
    				</form>
    			</span>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-lg-12">
    			@foreach(range('A','Z') as $letra)
    				<a href="#" class="btn btn-primary btn-xs">{{ $letra }}</a>
    			@endforeach	
    		</div>
    	</div>
    	 <div class="row">
    		@yield('content')
    	</div>
    </div>
   <script src="js/scripts.js"></script>
  </body>
</html>