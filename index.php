<!DOCTYPE html>
<html>
	<head>

		<title>Oxu</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		
	</head>
	<body>
	
	<?php
		include "db.php";
	?>
		<section id="main">
			<div class="container">
				<div class="row">
					<?php 
					if($db_con){
						$sql = "SELECT * FROM oxu";
						$query = mysqli_query($db_con, $sql);
						while($row=mysqli_fetch_assoc($query)){
					?>
					<div class="col-sm-6 col-md-4 col-xs-12">
					<a href="news.php?id=<?=$row['id']?>">
						<div class="thumbnail">
							<div class="img">
							<img src="assets/image/<?=$row['imgName']?>"> </div>
							<div class="caption">
								<h4><?=$row['name']?></h4>
								
							</div>
						</div>
					</a>
					</div>
					<?php 	 
						}
					}else{
							echo 'Error';
						}
						
					?>
					
				</div>
				
			</div>
		</section>
	</body>
</html>