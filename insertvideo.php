<!doctype html>
<html>
    <head>
        <?php
        include("config.php");
     
        if(isset($_POST['but_upload'])){
            $maxsize = 5242880; // 5MB
                       
$videos=$_POST['videos'];
					   $name = $_FILES['file']['name'];
            $target_dir = "videos/";
            $target_file = $target_dir . $_FILES["file"]["name"];

            // Select file type
            $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

            // Check extension
            if( in_array($videoFileType,$extensions_arr) ){
                
                // Check file size
                if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                    echo "File too large. File must be less than 5MB.";
                }else{
                    // Upload
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                        // Insert record
                        $query = "INSERT INTO videos(name,location,id) VALUES('".$name."','".$target_file."','".$videos."')";

                        mysqli_query($con,$query);
                        echo "Upload successfully.";
                    }
                }

            }else{
                echo "Invalid file extension.";
            }
        
        }
        ?>
    </head>
    <body>
        <form method="post" action="" enctype='multipart/form-data'>
            <input type='file' name='file' />
            
			                  <select name="videos" required>
                                <?php 
                                $sql = mysqli_query($con, "SELECT id,username From users");
								$row = mysqli_num_rows($sql);
								while ($row = mysqli_fetch_array($sql)){
							echo "<option value='". $row['id'] ."'>" .$row['username'] ."</option>" ;
								}
								?>
                              </select>
            
			<input type='submit' value='Upload' name='but_upload'>
        </form>

    </body>
</html>
