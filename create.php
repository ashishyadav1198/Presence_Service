<!DOCTYPE html>
<html>
<head>
	<title>file creation</title>
	<script src="bootstrap/js/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/style.css">
</head>
<body>
	<div class="container mx-auto">
			<div class="card" style="height: 150px; width: 400px;">
				<div class="card-body">
					<form method="post" action="recieve.php" enctype="multipart/form-data">
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Enter file name" name="file_name" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<button type="submit" class="btn btn-success form-control">Create</button>
							</div>
						</div>
					</form>
				</div>
			</div>	
		</div>
	<div>
</body>
</html>