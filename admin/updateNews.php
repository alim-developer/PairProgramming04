<?php
	session_start();
	include '../db.php';
	$id = $_GET['id'];
		$sql1 = "SELECT * FROM oxu WHERE id='$id'";
		$query1 = mysqli_query($db_con, $sql1);
		$row1 = mysqli_fetch_assoc($query1);

	$_SESSION['id'] = $id;
			
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	</head>
	<body>
		<section class="container addNews">
		<h3>Update News</h3>
			<form action='update.php' method="POST" enctype="multipart/form-data">
				<div class="form-group">
				<textarea class="form-control" rows="3" name="name"><?=$row1['name'];?></textarea> </div>
				<div class="form-group">
				<textarea class="form-control" rows="15" name="news" ><?=$row1['news'];?></textarea> </div>
				<img width="100px" height="100px" src="../assets/image/<?=$row1['imgName'];?>">
				<input type="file" name="imgName" >
				<div class="form-group">
					<div class="pull-right">
						<button type="submit" name="submit" class="btn btn-default">Yenile</button>
					</div>
				</div>
			</form>
		</section>
	</body>
</html>