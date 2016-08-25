<?php
			include '../db.php';
			$name = $_POST["name"];
			$news = $_POST["news"];
			$picture = $_FILES["imgName"];
			if(isset($_POST['submit'])){
			$pic_file = date('dmYGis').basename($picture["name"]);
			$pic_dir = "../assets/image/".$pic_file;
			move_uploaded_file($picture["tmp_name"], $pic_dir);
			$sql = "INSERT INTO oxu (name,news,imgName) VALUES ('$name','$news','$pic_file')";
			$query = mysqli_query($db_con, $sql);
				header('Location: allNews.php');
			
			}
?>