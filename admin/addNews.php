<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	</head>
	<body>
		<section class="container addNews">
			<?php if(isset($_POST['submit'])){?>

			<h3>Add News</h3>
			<form action='add.php' method="POST" enctype="multipart/form-data">
				<div class="form-group">
				<textarea class="form-control" rows="3" name="name" placeholder="Add Text Name.."></textarea> </div>
				<div class="form-group">
				<textarea class="form-control" rows="15" name="news" placeholder="Add Text.."></textarea> </div>
				<input type="file" name="imgName">
				<div class="form-group">
					<div class="pull-right">
						<button type="submit" name="submit" class="btn btn-default">Daxil ol</button>
					</div>
				</div>
			</form>
			<?php } 

			else{
			header('Location:index.php');
			}
			?>
		</section>
	</body>
</html>