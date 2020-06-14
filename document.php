<!DOCTYPE html>
<html>
<head>
	<title>document dashboard</title>
	<script src="bootstrap/js/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/style.css">
</head>
<body>
	<div>
		<header>

			<!---Avatar --->
			
			<!-- ------->
			<nav class="nav navbar-expand-lg navbar-light">
				<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-navigation="Toggle Navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse"></div>
				<div class="collapse navbar-collapse" id="navbarMenu">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<?php require("avatar.php"); ?>
						</li>
						<li class="nav-item">
							<a href="presence.php" class="nav-link">Present</a>
						</li>
						<li class="nav-item">
							<a href="share.php" class="nav-link">Share</a>
						</li>
					</ul>

					<form class="form-inline my-2 my-lg-0">
					<?php
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
	<hr>
	
</body>
</html>