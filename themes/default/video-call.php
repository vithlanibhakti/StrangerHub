<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<style>
footer.page_footer {display: none}
</style>
 
<?php
 foreach($data as $item):
     $id= $item['id'];
    $from_id=$item['from_id'];
    $to_id=$item['to_id'];
    $active=$item['active'];
    $time=$item['time'];
endforeach;
// echo "<script>alert('$id')</script>"; 
// echo "<script>alert('$time')</script>"; 
//  echo "<br>";
$id = "<script>var pathArray=window.location.pathname.split('/');
var secondLevelLocation = pathArray[3];
document.write(secondLevelLocation);</script>";
include("config.php");
//echo "<br>".$id.$time.$active;
$cr= date("Y-m-d H:i:s");
// echo "<script>alert('current')</script>";                
// echo "<script>alert('$cr')</script>"; 
if($active=='1')
{
$date=date("Y-m-d H:i:s", $time);
// echo "<script>alert('database')</script>";                
// echo "<script>alert('$date')</script>";                
    $col=mysqli_query($con,"SELECT `amount`, `pro_plan` FROM `vcpayments` where `user_id`=$from_id");

            while($row2 = mysqli_fetch_assoc($col))
            {
                $amount=$row2['amount'];
                $pro_plan=$row2['pro_plan'];
                //echo "<script>alert('$amount')</script>";                
            
                if($amount=='50')
                {
                    $exdate=date('yy-m-d', strtotime($date. ' + 30 minutes')); 
                //    echo "<script>alert('$exdate')</script>"; 
                            if($add_min <= $cr)
                             {
                                    echo "<script>window.location.href = window.site_url;</script>"; 
                                   
                             } 
                }
                
                else if($amount =='100')
                {
                    $add_min = date("Y-m-d H:i:s", strtotime($date . "+60 minutes"));
                    //echo "<script>alert('$add_min')</script>"; 
                    if($add_min <= $cr)
                                   {
                                    header("Location: " . $wo['site_url']);
                                   } 
                }
                else if($amount == '80')
                {
                    $add_min = date("Y-m-d H:i:s", strtotime($date . "+30 minutes"));
                    // echo "<script>alert('ex')</script>";                
                    // echo "<script>alert('$add_min')</script>";
                    
                    //echo "<script>alert('$add_min')</script>"; 
                    if($add_min <= $cr)
                                   {
                                    echo "<script>window.location.href = window.site_url;</script>"; 
                                   } 
                }
                else if($amount =='120')
                {
                    $add_min = date("Y-m-d H:i:s", strtotime($date . "+60 minutes"));
                    // echo "<script>alert('ex')</script>";                
                    // echo "<script>alert('$add_min')</script>";
                    
                    if($add_min <= $cr)
                                   {
                                    
                                    echo "<script>window.location.href = window.site_url;</script>"; 

                                   } 
                }
                else if($amount =='100')
                {
                    $add_min = date("Y-m-d H:i:s", strtotime($date . "+30 minutes"));
                    //echo "<script>alert('$add_min')</script>"; 
                    if($add_min <= $cr)
                                   {
                                    echo "<script>window.location.href = window.site_url;</script>"; 
                                   } 
                }
                else if($amount =='150')
                {
                    $add_min = date("Y-m-d H:i:s", strtotime($date . "+30 minutes"));
                    //echo "<script>alert('$add_min')</script>"; 
                    if($add_min <= $cr)
                                   {
                                    
                                    participantDisconnected();

                                   } 
                }


            }
}
?>  
<div class="video-con">
	<div id="remote-media">
		<div class="lds-facebook"><div style="background: #a33596;"></div><div style="background: #a33596;"></div><div style="background: #a33596;"></div></div>
		<h3><?php echo __('Please wait..');?></h3>
	</div>
	<div id="controls">
		<div id="preview">
			<div id="local-media"><video id="basic-stream" class="hide videostream" autoplay=""></video></div>
		</div>
		<div id="invite-controls"></div>
		<div id="log"><p></p></div>
	</div>
	<button class="btn end_vdo_call hide">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12,9C10.4,9 8.85,9.25 7.4,9.72V12.82C7.4,13.22 7.17,13.56 6.84,13.72C5.86,14.21 4.97,14.84 4.17,15.57C4,15.75 3.75,15.86 3.5,15.86C3.2,15.86 2.95,15.74 2.77,15.56L0.29,13.08C0.11,12.9 0,12.65 0,12.38C0,12.1 0.11,11.85 0.29,11.67C3.34,8.77 7.46,7 12,7C16.54,7 20.66,8.77 23.71,11.67C23.89,11.85 24,12.1 24,12.38C24,12.65 23.89,12.9 23.71,13.08L21.23,15.56C21.05,15.74 20.8,15.86 20.5,15.86C20.25,15.86 20,15.75 19.82,15.57C19.03,14.84 18.14,14.21 17.16,13.72C16.83,13.56 16.6,13.22 16.6,12.82V9.72C15.15,9.25 13.6,9 12,9Z" /></svg> <?php echo __('End Call');?>
	</button>
</div>
  

 <script>
  setTimeout(function() {
  location.reload();
}, 30000);
// const queryString = window.location.href;
// const urlParams = new URLSearchParams(queryString);
// var pathArray = window.location.pathname.split('/');
// var secondLevelLocation = pathArray[3];

// alert(secondLevelLocation);


    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
    if (!navigator.getUserMedia) {
        $('#remote-media h3').text('Sorry, WebRTC is not available in your browser.');
    }

    var video = document.getElementById('basic-stream');

    Twilio.Video.connect('<?php echo $data['video_call']['access_token'];?>', { name: '<?php echo $data['video_call']['room'];?>' }).then(room => {
        //console.log('Connected to Room "%s"', room.name);

        room.participants.forEach(participantConnected);
        room.on('participantConnected', participantConnected);

        room.on('participantDisconnected', participantDisconnected);
        room.once('disconnected', error => room.participants.forEach(participantDisconnected));
        $(document).on('click', 'a[data-ajax]', function(e) {
            room.disconnect();
        });
        $(document).on('click', '.end_vdo_call', function(e) {
            room.disconnect();
            $('#basic-stream').addClass('hide');
            $('.end_vdo_call').addClass('hide');
        });
    });

    function participantConnected(participant) {
        //console.log('Participant "%s" connected', participant.identity);

        const div = document.createElement('div');
        div.id = participant.sid;
        //div.innerText = participant.identity;

        participant.on('trackAdded', track => trackAdded(div, track));
        participant.tracks.forEach(track => trackAdded(div, track));
        participant.on('trackRemoved', trackRemoved);

        $('#remote-media').html(div);
        if (navigator.getUserMedia) {
            navigator.mediaDevices.getUserMedia({audio: false, video: true}).then((stream) => {video.srcObject = stream});
            $('#basic-stream').removeClass('hide');
            $('.end_vdo_call').removeClass('hide');
        }
    }

    function participantDisconnected(participant) {
        //console.log('Participant "%s" disconnected', participant.identity);

        participant.tracks.forEach(trackRemoved);
        document.getElementById(participant.sid).remove();
        $('#basic-stream').addClass('hide');
        $('.end_vdo_call').addClass('hide');
        
        alert("Connection has been lost.");
        window.location.href = window.site_url;
    }

    function trackAdded(div, track) {
        div.appendChild(track.attach());
    }

    function trackRemoved(track) {
        track.detach().forEach(element => element.remove());
    }

</script>
