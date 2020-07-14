<?php
    
    include("config.php");
	$username=$_GET['username'];
    //echo $username;
	
	$sql=mysqli_query($con,"SELECT id from users where username='$username'");
	while($row=mysqli_fetch_assoc($sql))
		{
			foreach($row as $id)
			{
				//echo "<br>".$id;
			}
			
		}
		
	
?>
<!doctype html>
<html>
    <head>
        <style>
            video{
                float: left;
            }
        </style>
    </head>
    <body>
        <div>
          
        <?php
        $fetchVideos = mysqli_query($con, "SELECT * FROM videos where id='$id' ORDER BY id DESC");
        while($row = mysqli_fetch_assoc($fetchVideos)){
            $location = $row['location'];
            
            echo "<div >";
            echo "<video src='".$location."' controls width='320px' height='200px' >";
            echo "</div>";
        }
        ?>
          
        </div>

    </body>
</html>
