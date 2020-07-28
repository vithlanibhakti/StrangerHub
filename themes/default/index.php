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

		<!-- Top Hero  -->
		<div class="parallax-container header_bg parallax_bg">
			<div class="section">
				<div class="container">
					<h1 class="header center"><?php echo __( 'Meet new and interesting people.' );?></h1>
					<div class="row center">
						<h5 class="header col s12 light"><?php echo __( 'Join' );?> <?php echo ucfirst( $config->site_name );?>, <?php echo __( 'where you could meet anyone, anywhere!' );?></h5>
					</div>
				</div>
			</div>
			<div class="parallax"><img src="<?php echo $theme_url;?>assets/img/dating.jpg"  alt="<?php echo ucfirst( $config->site_name );?>"></div>
		</div>
		<!-- End Top Hero  -->

        <!-- Filters  -->
		<div class="container">
			<div class="section dt_filters bg_gradient">
				<div class="row">
					<div class="input-field col s2">
						<select>
							<option value="1" selected="selected"><?php echo __( 'Male' );?></option>
							<option value="2"><?php echo __( 'Female' );?></option>
						</select>
						<label class="bold"><?php echo __( 'I am a' );?>:</label>
					</div>
					<div class="input-field col s2">
						<select>
						<option value="1"><?php echo __( 'Male' );?></option>
							<option value="2" selected="selected"><?php echo __( 'Female' );?></option>
						</select>
						<label class="bold"><?php echo __( 'I\'m looking for a' );?>:</label>
					</div>
					<div class="input-field col s2">
						<select>
							<option value="18" label="18">18</option>
							<option value="19" label="19">19</option>
							<option value="20" label="20" selected="selected">20</option>
							<option value="21" label="21">21</option>
							<option value="22" label="22">22</option>
							<option value="23" label="23">23</option>
							<option value="24" label="24">24</option>
							<option value="37" label="37">37</option>
						</select>
						<label class="bold"><?php echo __( 'Between ages' );?></label>
					</div>
					<div class="input-field col s2">
						<select>
							<option value="28" label="28">28</option>
							<option value="29" label="29">29</option>
							<option value="30" label="30" selected="selected">30</option>
							<option value="31" label="31">31</option>
							<option value="32" label="32">32</option>
							<option value="33" label="33">33</option>
							<option value="37" label="37">37</option>
						</select>
						<label class="bold"><?php echo __( 'and' );?></label>
					</div>
					<div class="col">
						<a href="<?php echo $site_url;?>/login" class="waves-effect waves-light btn-flat  bold btn_glossy"><?php echo __( 'Let\'s Begin' );?></a>
					</div>
				</div>
			</div>
		</div>
		<!-- End Filters  -->
		
        <?php if( $config->show_user_on_homepage == '1'){
            $siteUsers = GetSiteUsers();
            if( !empty($siteUsers) ){
            ?>
            <!-- Latest users  -->
            <div class="container-fluid bg_gradient">
                <div class="container">
                    <div class="section">
                        <div class="row">
                            <div class="col s12 center-align dt_get_start">
                                <h4 class="white-text light"><?php echo str_replace('{0}', ucfirst( $config->site_name ) , __( 'Latest {0} users.' ) );?></h4>
                                <div class="center">
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
										<img src="play-btn.png" height='100' width='100' alt="play" class="playBtn under">
														</span>
													</a>
										
										<?php
										 }
										?>
										
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Latest users  -->
        <?php }} ?>


		<br>
		
        		<!-- Get Started  -->
		<div class="container-fluid bg_gradient height">
			<div class="container">
				<div class="section">
					<div class="row">
						<div class="col s12 center-align dt_get_start">
							<h5 class="white-text light"><?php echo str_replace('{0}', ucfirst( $config->site_name ) , __( 'Connect with your perfect Soulmate here, on {0}.' ) );?></h5>
							<a href="<?php echo $site_url;?>/register" class="waves-effect waves-light btn-flat  bold btn_glossy"><?php echo __( 'Get Started' );?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Get Started  -->