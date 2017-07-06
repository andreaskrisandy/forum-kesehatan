<html>
<head>
	<title></title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<!--Script-->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('images/background.jpg');background-repeat:no-repeat">
	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">

			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll" style="float:right;">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="index.php"></a>
			</div>
			<div class="navbar-header">
				<a href="index.php"><img id="logoforum"class="img-responsive" src="images/logoforum.png" style="margin-bottom:5px;margin-top:5px;height:75px;"/></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<!--
				<ul class="nav navbar-nav navbar-left">
				<li><a href=""><span class="glyphicon glyphicon-list"></span> Topics</a></li>
			</ul>
		-->
		<div>
			<form id="loginform" class="navbar-form navbar-right" method="POST"role="search" action="pages/login.php">
				<div class="form-group">
					<input type="text" class="form-control" name="username"placeholder="Username">
					<input type="password" class="form-control" name="password"placeholder="Password">
				</div>
				<button type="submit" class="btn btn-success">Login</button>
			</form>
		</div>

	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->
</nav>
<div class="container" style="margin:8% auto;">
	<div class="col-sm-4 col-md-3">
		<h2 class="text-white" id="header">Forum Dinas Kesehatan Kota Bandung</h2>
		<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</div>
	<div id="signupform" class="col-sm-5 col-md-4">
		<div class="row">
			<form method="POST" class="form-signin" action="functions/register.php">
				<h3 class="text-center" style="color:white;">Daftar Disini!</h3>
				<br>
				<input type="text" name="fname"placeholder="Nama Depan"class="form-control" required>
				<br>
				<input type="text" name="lname"placeholder="Nama Belakang"class="form-control" required>
				<br>
				<select class="form-control" name="gender"required>
					<option value="" disabled selected>Jenis Kelamin</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				<br>
				<input type="text" placeholder="Username" name="username"class="form-control" required>
				<br>
				<input type="password" placeholder="Password" name="password" class="form-control" required>
				<br>
				<input type="submit" value="Daftar" class="btn btn-success" style="width:100%;">
			</form>
		</div>
	</div>
</div>
<!-- <hr> -->
<!-- <div class="footer">
<nav align="center">
<ul class="nav navbar-nav">
<li><a href="">About</a></li>
<li><a href="">Developers</a></li>
<li><a href="">Terms and Conditions</a></li>
</ul>
</nav>
</div> -->

</body>
</html>
