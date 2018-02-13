<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/ftuk.css">
	<script type="text/javascript">
	$(document).ready(function(){
		$("span#search").click(function(){
			$("div.jumbotron").toggle();
		});
	});
	</script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" id="myNav" role="navigation">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftuk-navbar" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#">
			<img style="height: 40px; margin-top: -10px" src="img/highland_cattle.png" alt="fling to UK"/>
		  <a>
		  <a class="navbar-brand" href="#">Flying to UK</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="ftuk-navbar">
		  <ul class="nav navbar-nav">
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service 
			  <span class="caret"></span></a>
			  <ul class="dropdown-menu" style="background-color:#6793db">
				<li><a href="#">Small group tour</a></li>
				<li><a href="#">Airport shuttle</a></li>
				<li><a href="#">Move house & others</a></li>
			  </ul>
			</li>
			<li><a href="#">Join Us</a></li>
			<li><a href="#">Help</a></li>
		  </ul>
		  
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#"><span id="search" class="glyphicon glyphicon-search"></span></a></li>
			<li><a href="#">Sign in</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->		
	  </div><!-- /.container -->
	  
	  <div class="jumbotron text-center">
		<form>
			<div class="input-group">
				<div class="input-group-btn">
					<button type="button" class="btn btn-search btn-default dropdown-toggle" data-toggle="dropdown">
						<span class="glyphicon glyphicon-search"></span>
						<span class="label-icon">Search</span>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu pull-left" role="menu">
					   <li>
							<a href="#">
								<span class="glyphicon glyphicon-map-marker"></span>
								<span class="label-icon">Which tour?</span>
							</a>
						</li>
						<li>
							<a href="#">
							<span class="glyphicon glyphicon-user"></span>
							<span class="label-icon">Which talent?</span>
							</a>
						</li>
					</ul>
				</div>

				<input type="text" class="form-control" size="50" placeholder="Where are you going or which talent are you looking?" required>
			
				<div class="input-group-btn">
					<button type="button" class="btn btn-search btn-default">GO</button>					
				</div>
			</div>  
		</form>   
	  </div>
	  
	</nav>
</body>
</html>