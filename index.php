<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="css/global.css"><!-- ????-->
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<!--Script-->

</head>
<body style="background-image: url('images/background.png');background-repeat:no-repeat;background-size:cover;">
	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">

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
				<a href="index.php">
					<img id="logoforum"class="img-responsive" src="images/logoforum.png" style="margin-bottom:5px;margin-top:5px;height:50px;"/>
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<!--
				<ul class="nav navbar-nav navbar-left">
				<li><a href=""><span class="glyphicon glyphicon-list"></span> Topics</a></li>
			</ul>
		-->

			<form id="loginform" class="navbar-form navbar-right" method="POST" role="search" action="pages/login.php">
				<div class="form-group">
					<input type="text" class="form-control" name="username"placeholder="Username">
					<input type="password" class="form-control" name="password"placeholder="Password">
				</div>
				<button type="submit" class="btn btn-success">Login</button>
			</form>


	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->
</nav>
<div class="container" style="margin:8% auto;">
	<div class="row">
	<div id="headercontainer" class="col-md-6">
		<h2 class="text-white" id="header">Silaturahim Pejuang Kesehatan</h2>
		<!-- <p class="text-white" id="contentheader">Kalau bukan sekarang kapanlagi.<br>Kalau bukan kita kapanlagi.<br>Indahnya kebersamaan <br>sehat dari kita untuk Bandung.
		</p> -->
	</div>

	<div id="signupform" class="col-md-6">


		<form method="POST" class="form-signin" action="functions/register.php">
			<h3 class="text-center" style="color:white;">Daftar Disini!</h3>
			<br>
			<div class="form-group">
				<input type="text" name="fname"placeholder="Nama Depan"class="form-control" required>
			</div>
			<div class="form-group">
				<input type="text" name="lname"placeholder="Nama Belakang"class="form-control" required>  </div>
				<div class="form-group">
					<select class="form-control" name="gender"required>
						<option value="" disabled selected>Jenis Kelamin</option>
						<option value="Male">Pria</option>
						<option value="Female">Wanita</option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" placeholder="Username" name="username"class="form-control" required>
				</div>
				<div class="form-group">
					<input type="password" placeholder="Password" name="password" class="form-control" required>
				</div>
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
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
