<?php
			
			session_start();
			$id = $_SESSION['id'];
			include '../db.php';
			$name = $_POST["name"];
			$news = $_POST["news"];
			$picture = $_FILES["imgName"];
			if(isset($_POST['submit'])){
			$pic_file = date('dmYGis').basename($picture["name"]);

			$pic_dir = "../assets/image/".$pic_file;
			move_uploaded_file($picture["tmp_name"], $pic_dir);
			if($picture['size'] == 0){
				$sql1= "SELECT imgName FROM oxu WHERE id=$id";
				$query1 = mysqli_query($db_con, $sql1);
				$row = mysqli_fetch_assoc($query1);
				$pic_file = $row['imgName'];
			}else{
				$sql1 = "SELECT imgName FROM oxu WHERE id=".$id;
				$query1= mysqli_query($db_con,$sql1);
				$row = mysqli_fetch_assoc($query1);
				unlink("../assets/image/".$row['imgName']);
			}

			$sql = "UPDATE oxu SET name='$name', news='$news',imgName='$pic_file' WHERE id=$id";
			$query = mysqli_query($db_con, $sql);
				header('Location: allNews.php');
			
			}
?>