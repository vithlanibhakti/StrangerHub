<?php
	include 'config.php';
    $id=$_POST['id'];
    echo json_encode(array($id));
	// $sql = "DELETE FROM `mediafiles` WHERE  id=$id AND is_video='1'";
	// if (mysqli_query($con, $sql)) {
	// 	echo json_encode(array("statusCode"=>200));
	// } 
	// else {
	// 	echo json_encode(array("statusCode"=>201));
	// }
	mysqli_close($con);
?>