<!DOCTYPE html>
<html>
<head>
	
	<!-- Compiled and minified CSS -->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
</head>

<body>

	<!-- Dropdown Structure -->
	<ul id="dropdown1" class="dropdown-content">
		<li><a href="login.php">Entrar</a></li>
		<li class="divider"></li>
		<li><a href="register.php">Registrar</a></li>
	</ul>
	<nav>
		<div class="nav-wrapper teal lighten-2">
			<a href="#!" class="brand-logo">Logo</a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="sass.html">Sass</a></li>
				<li><a href="badges.html">Components</a></li>
				<!-- Dropdown Trigger -->
				<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Entrar<i class="material-icons right">arrow_drop_down</i></a></li>
			</ul>
			<ul class="side-nav teal lighten-4" id="mobile-demo">
				<li><a href="sass.html">Sass</a></li>
				<li class="divider"></li>
				<li><a href="badges.html">Components</a></li>
				<li class="divider"></li>
				<li><a href="collapsible.html">Javascript</a></li>
				<li class="divider"></li>
				<li><a href="mobile.html">Mobile</a></li>
			</ul>
		</div>
	</nav>
	
	
	<style>
		nav{
			margin-bottom: 15%; 
		}
		footer{
			margin-top:15%;
		}
	</style>      
