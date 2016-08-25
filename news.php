<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">


	
</head>
<body>
<?php
	include 'db.php';

?>

	<section id="news">
		<div class="container">
			<div class="row">
					<?php 
					$id = $_GET['id'];
					if($db_con){
						$sql = "SELECT * FROM oxu WHERE id=$id";
						$query = mysqli_query($db_con, $sql);
						$row=mysqli_fetch_assoc($query);
						
					?>
					<div class="col-sm-12 col-md-8 col-md-offset-2 col-xs-12">
							<div class="img">
							<img src="assets/image/<?=$row['imgName']?>"> </div>
							<h4><?=$row['name']?></h4>
							<p><?=$row['news']?></p>
						</div>
					</div>
					<?php 
					}else{
							echo 'Error';
						}
						
					?>
					
				</div>
		</div>
	</section>

</body>
</html>

