<?php							include "config.php";

					$sql = "SELECT * FROM `payments` where `amount` = 100 and `pro_plan`=0";
	$result1 = mysqli_query($con, $sql);
	while($row1 = mysqli_fetch_assoc($result1)) 
	{
	$EC1=$row1["user_id"];
	$ar = [$EC1];
	$str= implode(', ', $ar);
	// echo "<br>"."userid=".$str;

	$update_query = "SELECT username,avater FROM `users` WHERE `id`=$EC1";
	$a= mysqli_query($con, $update_query);

	 while($row = mysqli_fetch_assoc($a)) 
	{ $location = $row['avater'];
		$username = $row['username'];
		?>
 <a href="<?php echo $site_url;?>/@<?php echo $username;?>" data-ajax="/@<?php echo $username;?>">
													
			<span class="videoContainer">
 		<img src="<?php echo $location; ?>" alt="<?php echo $username;?>"  class="circle over circ xuser">
													
									</span>
</a>
							

<?php
	}
	}
	?>
