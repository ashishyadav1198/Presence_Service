<!DOCTYPE html>
<html>
<head>
	<title>view</title>
	<script src="bootstrap/js/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/style.css">
</head>
<body>
	<div>
		<header>
			<nav class="nav navbar-expand-lg navbar-light">
				<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-navigation="Toggle Navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse"></div>
				<div class="collapse navbar-collapse" id="navbarMenu">
					<ul class="navbar-nav mr-auto">
						
						<li class="nav-item">
							<a href="" class="nav-link">View documents</a>
						</li>
						<li class="nav-item">
							<a href="create.php" class="nav-link">Create documents</a>
						</li>
					</ul>

					<form class="form-inline my-2 my-lg-0">
					<?php
						session_start();
						if(isset($_SESSION['username']))
							echo"<a class='btn btn-danger' id='menu' href='logout.php'>Log out</a>";
						else
						{
						echo"<a class='btn btn-success' id='menu' href='login.php'>Log In</a>";
						}
					?>
					</form>
				</div>
			</nav>

		</header>
	</div>
	<hr>
</body>
</html>