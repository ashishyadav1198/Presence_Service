<!DOCTYPE html>
<html>
<head>
	<title>presence</title>
	<script src="bootstrap/js/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/style.css">
</head>
<body>
	<div class="container">            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Username</th>
        <th>In_Time</th>
      </tr>
    </thead>
    <tbody>
    <?php
    	require("db.php");
		session_start();
		$query = "SELECT * FROM `view_docs`";
		$result = mysqli_query($con,$query) or die(mysqli_error($con));
		$rows = mysqli_num_rows($result);
		if($rows > 0) {
			$username = array();
			$in_time = array();
			while ($data = mysqli_fetch_assoc($result)) {
				array_push($username, $data['username']);
				array_push($in_time, $data['in_time']);
			}
			for($i = 0; $i < $rows; $i++) {
	?>
			<tr>
		        <td><?php echo $username[$i]; ?></td>
		        <td><?php echo $in_time[$i]; ?></td>
	      	</tr>
	<?php
			}
		}

	?>
      
    </tbody>
  </table>
</div>
</body>
</html>