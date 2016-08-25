<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	</head>
	<body>
		<section class="container allNews">
			<?php
			include '../db.php';
			session_start();
			if(isset($_SESSION['admin'])){
			if($db_con){
			$sql = 'SELECT * FROM oxu';
			$query = mysqli_query($db_con, $sql);?>
			<h3>News</h3>
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>News</th>
					<th>Image</th>
					<th></th>
					<th></th>
				</tr>
				
				<?php while($row = mysqli_fetch_assoc($query)){ ?>
				<tr>
					<td><?=$row['id']; ?></td>
					<td><?=$row['name']; ?></td>
					<td><?=$row['news']; ?></td>
					<td><img src="../assets/image/<?=$row['imgName'];?>"></td>
					<td><a class="btn btn-success" href="updateNews.php?id=<?=$row['id'];?>">Update</a></td>
					<td><a class="btn btn-danger" href="delete.php?id=<?=$row['id'];?>">Delete</a></td>
				</tr>
				<?php } ?>
				
			</table>

			<form action="addNews.php" method="POST">
				<button type="submit" class="btn btn-primary pull-right" name="submit">Add News</button>
			</form>
			<?php }else{
					echo 'Not found database';
				}
			}else{
				
			}
			?>
		</section>
	</body>
</html>