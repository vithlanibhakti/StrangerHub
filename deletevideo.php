<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<?php 

include("config.php");

?>
<div class="container-fluid">
    <div class="block-header">
        <h2>Users > Manage video</h2>
    </div>
                    <div class="clearfix"></div>
                    <div class="table-responsive1">
                            
                            <?php 
                            $q="SELECT `id`, `user_id`,`is_video`, `video_file` FROM `mediafiles` WHERE  `is_video` = '1'";
                            $result=mysqli_query($con,$q);
                               if($result === FALSE)
                              {
                                      die("Query Failed!".mysqli_error().$result);
                              }
                            
                              echo "<table border=3 id='tbl' class='table table-bordered table-striped table-hover'>";
                              echo "<center>	
                              <th style='padding-left:10px;padding-right:10px;'>id</th>
                              <th style='padding-left:10px;padding-right:10px;'>User_id</th>
                              <th style='padding-left:10px;padding-right:10px;'>is_video</th>
                              <th style='padding-left:10px;padding-right:10px;'>video_File</th>
                              <th style='padding-left:20px;padding-right:20px;'>Action</th>
                              
                              </center>";
                              while($row=mysqli_fetch_assoc($result))
                              {
                             
                                echo "<tr class'test'>";
				
				// echo "<td style='padding:5px;' >".$v."</td>";
				echo "<td class='ids'>" . $row['id'] . "</td>";
				echo "<td>" . $row['user_id'] . "</td>";
				echo "<td>" . $row['is_video'] . "</td>";
				//echo "<td>" . $row['video_file'] . "</td>";
          echo "<td><video src='".$row['video_file']."'  controls width='320px' height='200px' ></td>";    
  
        echo "<td><button class='btn btn-danger waves-effect waves-light' id='delete'>DELETE</button></td>";
        echo "<td><button class='btn  waves-effect waves-light' id='video'>Video</button></td>";
                                echo "</tr>";
                              }
                              echo "</table>";
                          ?>
                              </div>
<script type="text/javascript">
$(document).ready(function(){
	
$("#tbl").on('click', '#delete', function () {
  if (confirm("Are you sure you want to delete this user?") == false) {
    return false;
  }

      var rid=($(this).closest('td').parent()[0].sectionRowIndex);
	alert(rid);
		  
		   var tr = $(this).closest('tr');
         var id = tr.find('.ids').text();
         var tester = tr.find('.tester').text();
         alert('id: '+id);
		 debugger;
		   $.ajax({
			 url: "delete.php",
			 type: "POST",
			 data:{
			 id: id
			 },
			 success: function(dataResult){
			 alert("deleted");					
			 }
			 });
		 });
		   });  
        
</script>
