<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Gnublin-Weatherballoon</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<!-- CSS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css" />
		<link href="css/layout.css" rel="stylesheet" media="screen" type="text/css" />
	
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	    <!--[if lt IE 9]>
	    	<script src="js/html5shiv.js"></script>
	    <![endif]-->
		
		<!-- Javascript -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body lang="de">
		<div class="container-narrow">
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						
						<a class="brand">gnublin weatherballoon</a>
						
						<div class="nav-collapse">
							<ul class="nav pull-right">
								<li class="active"><a href="#">Home</a></li>
								<li><a href="#project">Projekt</a></li>
								<li><a href="https://github.com/ramteid/gnublin-weatherballoon/" target="_blank">Git</a></li>
								<li class="dropdown">
									<a class="dropdown-toggle" href="#" data-toggle="dropdown">Login <strong class="caret"></strong></a>
									<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
										<form id="login-form" action="login.php" method="post">
											<input class="text" type="text" name="username" placeholder="Benutzername">
											<input class="text" type="password" name="password" placeholder="Passwort">
											<input type="checkbox" id="remember_me" name="remember_me">
											<label for="remember_me" class="string optional">Eingeloggt bleiben</label>
											<input class="submit" type="submit" class="btn btn-primary" value="Anmelden">
										</form>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<hr>
			
		</div>
	</body>
</html>