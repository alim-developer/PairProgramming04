<?php
	

include "../db.php";
$sql1 = "SELECT imgName FROM oxu WHERE id=".$_GET['id'];
$query1= mysqli_query($db_con,$sql1);
$row = mysqli_fetch_assoc($query1);
$sql = "DELETE FROM oxu WHERE id=".$_GET['id'];

$query= mysqli_query($db_con,$sql);


if($query){

	unlink("../assets/image/".$row['imgName']);

header("Location:allNews.php");

}else{

echo "Data silinmedi";

}



?>