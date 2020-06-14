<!DOCTYPE html>
<html>
<head>
	<title>Share Page</title>
	<script src="bootstrap/js/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/style.css">
</head>
<body>
	<div class="container mt-2">
			<div class="card" style="height: auto; width: 400px;">
				<div class="card-body">
					<form method="post" action="shareProcess.php" enctype="multipart/form-data">
						<div class="form-group">
						</div>
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Enter email id" name="email" required>
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<button type="submit" class="btn btn-success form-control" name="private">Share</button>
							</div>
						</div>
					</form>
					<hr>
					<!--share to all -->
					<form method="post" action="shareProcess.php" enctype="multipart/form-data">
						<div class="form-group">
							<div class="input-group">
								<button type="submit" class="btn btn-warning form-control" name="public">Share to All</button>
							</div>
						</div>
					</form>
				</div>
			</div>	
		</div>
	<div>

	
</body>
</html>