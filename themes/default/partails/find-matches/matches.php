<link rel="stylesheet" href= 
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> 
    </script> 
    <script src= 
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> 
    </script> 

<style>
.height{
	height:120px;
}
.circ {
	width:150px;  height:150px;
  vertical-align: middle;
  border-radius: 50%;
  transition: box-shadow 0.3s;
}
.circ:hover {
  box-shadow: 0 0 0 10px white;
}
.under {

position: relative ;
    width: 60px;
    height: 60px;
	left : -65px;
	top:26px;
	margin-left: -70px;
	object-fit: cover;
}

.over {
	
	width: 180px;
    height: 180px;
    object-fit: cover;
    margin: 5px 10px;
    box-shadow: 0 2px 5px 0px rgba(0, 0, 0, 0.3);
  
}
</style>

    <script> 
        $(document).ready(function() { 
            var url = $("#Geeks3").attr('src'); 
            $("#Geeks2").on('hide.bs.modal', function() { 
                $("#Geeks3").attr('src', ''); 
            }); 
            $("#Geeks2").on('show.bs.modal', function() { 
                $("#Geeks3").attr('src', url); 
            }); 
        }); 
    </script> 								
<?php global $site_url; ?>
<?php
					
										include("config.php");
									
										$sql  = mysqli_query($con, "SELECT * FROM `users` WHERE `username` != 'guest' and role='vendor'");
											while($row = mysqli_fetch_assoc($sql)){
												$location = $row['avater'];
												$username = $row['username'];
												
												 ?>
				 <a href="<?php echo $site_url;?>/@<?php echo $username;?>" data-ajax="/@<?php echo $username;?>">
										
										<span class="videoContainer">
							<img src="<?php echo $location; ?>" alt="<?php echo $username;?>"  class="circle over circ xuser">

														</span>
													</a>
										
										<?php
										 }
										?>
