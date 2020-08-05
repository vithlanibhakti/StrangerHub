<!-- <?php if( $profile->is_pro == 1 ){?><script>window.location = window.site_url;</script><?php } ?> -->
<?php if( $config->pro_system == 0 ){?><script>window.location = window.site_url;</script><?php } ?>
<?php if( isGenderFree($profile->gender) === true ){?><script>window.location = window.site_url;</script><?php } ?>
<!-- Premium user -->
<?php  include("config.php");
        session_start();
        $sql=mysqli_query($con,"SELECT `id`, `silver_amount_min`, `silver_time_min`, `silver_amount_hr`, `silver_time_hr`, `gold_amount_min`, `gold_time_min`, `gold_amount_hr`, `gold_time_hr`, `premium_amount_min`, `premium_time_min`, `premium_amount_hr`, `premium_time_hr` FROM `vcpro`  ");
                              while($row=mysqli_fetch_assoc($sql))
                                    {
                                        $silver_amount_min= $row['silver_amount_min'];
                                        $silver_amount_hr= $row['silver_amount_hr'];
              
                                        $gold_amount_min= $row['gold_amount_min'];
                                        $gold_amount_hr= $row['gold_amount_hr'];
                                        
                                        $premium_amount_min= $row['premium_amount_min'];
                                        $premium_amount_hr= $row['premium_amount_hr'];

                                        
                                        $stm = $row['silver_time_min'];
                                        
                                        $sth= $row['silver_time_hr'];
                                        
                                        $gtm =$row['gold_time_min'];
                                        
                                        $gth = $row['gold_time_hr'];
                                        
                                        $ptm = $row['premium_time_min'];
                                        
                                        $pth = $row['premium_time_hr'];
                           
                                    }
        ?>
		
<div class="container page-margin find_matches_cont">
	<div class="row r_margin">
		<div class="col l3">
			<?php require( $theme_path . 'main' . $_DS . 'sidebar.php' );?>
		</div>
		
		<div class="col l9">
			<div class="dt_premium dt_sections dt_pro_pg">
				<div class="dt_p_head center">
					<h2 class="light gold-text"><?php echo __( 'Amazing' );?> <?php echo ucfirst( $config->site_name );?> <?php echo __( 'features you can’t live without' );?>.</h2>
					<p class="bold"><?php echo __( 'Activating Premium will help you meet more people, faster.' );?></p>
				</div>
				<div class="row dt_prem_row">
					<div class="col s12 m7 l5">
						<div class="dt_choose_pro">
							<h2><?php echo __( 'Choose a Plan' );?></h2>
                            <p>
								<label>
									<input class="with-gap" name="pro_plan" type="radio" value="<?php echo $silver_amount_min;?>" data-price="<?php echo $silver_amount_min;?>"  />
									<span class="pln_name">
										<span class="duration">silver_amount</span>
										<span class="price"><?php echo $config->currency_symbol . $silver_amount_min." for ".$stm." min";?></span>
									</span>
								</label>
							</p>
				            <p>
								<label>
									<input class="with-gap" name="pro_plan" type="radio" value="<?php echo $silver_amount_hr;?>" data-price="<?php echo $silver_amount_hr;?>"  />
									<span class="pln_name">
										<span class="duration">silver_amount</span>
										<span class="price"><?php echo $config->currency_symbol . $silver_amount_hr." for ".$sth." hr";?></span>
									</span>
								</label>
							</p>
                            
                            <p>
								<label>
									<input class="with-gap" name="pro_plan" type="radio" value="<?php echo $gold_amount_min;?>" data-price="<?php echo $gold_amount_min;?>"  />
									<span class="pln_name">
										<span class="duration">gold_amount</span>
										<span class="price"><?php echo $config->currency_symbol . $gold_amount_min." for ".$gtm." min";?></span>
									</span>
								</label>
							</p>
                            <p>
								<label>
									<input class="with-gap" name="pro_plan" type="radio" value="<?php echo $gold_amount_hr;?>" data-price="<?php echo $gold_amount_hr;?>"  />
									<span class="pln_name">
										<span class="duration">gold_amount</span>
										<span class="price"><?php echo $config->currency_symbol . $gold_amount_hr." for ".$gth." hr";?></span>
									</span>
								</label>
							</p>
				            
                            <p>
								<label>
									<input class="with-gap" name="pro_plan" type="radio" value="<?php echo $premium_amount_min;?>" data-price="<?php echo $premium_amount_min;?>"  />
									<span class="pln_name">
										<span class="duration">premium_amount</span>
										<span class="price"><?php echo $config->currency_symbol . $premium_amount_min." for ".$ptm." min";?></span>
									</span>
								</label>
							</p>
				            <p>
								<label>
									<input class="with-gap" name="pro_plan" type="radio" value="<?php echo $premium_amount_hr;?>" data-price="<?php echo $premium_amount_hr;?>"  />
									<span class="pln_name">
										<span class="duration">premium_amount</span>
										<span class="price"><?php echo $config->currency_symbol . $premium_amount_hr." for ".$pth." hr";?></span>
									</span>
								</label>
							</p>
        
				            <div class="pay_using center">
								<p class="bold"><?php echo __( 'Pay Using' );?></p>
								<div class="pay_u_btns valign-wrapper">
									<button id="paypal" onclick="clickAndDisable(this);" class="btn paypal valign-wrapper">
										<span><?php echo __( 'PayPal' );?></span>
                                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                         <path fill="currentColor" d="M8.32,21.97C8.21,21.92 8.08,21.76 8.06,21.65C8.03,21.5 8,21.76 8.66,17.56C9.26,13.76 9.25,13.82 9.33,13.71C9.46,13.54 9.44,13.54 10.94,13.53C12.26,13.5 12.54,13.5 13.13,13.41C16.38,12.96 18.39,11.05 19.09,7.75C19.13,7.53 19.17,7.34 19.18,7.34C19.18,7.33 19.25,7.38 19.33,7.44C20.36,8.22 20.71,9.66 20.32,11.58C19.86,13.87 18.64,15.39 16.74,16.04C15.93,16.32 15.25,16.43 14.05,16.46C13.25,16.5 13.23,16.5 13,16.65C12.83,16.82 12.84,16.79 12.45,19.2C12.18,20.9 12.08,21.45 12.04,21.55C11.97,21.71 11.83,21.85 11.67,21.93L11.56,22H10C8.71,22 8.38,22 8.32,21.97V21.97M3.82,19.74C3.63,19.64 3.5,19.47 3.5,19.27C3.5,19 6.11,2.68 6.18,2.5C6.27,2.32 6.5,2.13 6.68,2.06L6.83,2H10.36C14.27,2 14.12,2 15,2.2C17.62,2.75 18.82,4.5 18.37,7.13C17.87,10.06 16.39,11.8 13.87,12.43C13,12.64 12.39,12.7 10.73,12.7C9.42,12.7 9.32,12.71 9.06,12.85C8.8,13 8.59,13.27 8.5,13.6C8.46,13.67 8.23,15.07 7.97,16.7C7.71,18.33 7.5,19.69 7.5,19.72L7.47,19.78H5.69C4.11,19.78 3.89,19.78 3.82,19.74V19.74Z"></path>
                                         </svg>
										<svg class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="spinner__path" fill="none" stroke-width="7" stroke-linecap="round" cx="33" cy="33" r="29"></circle></svg>
									</button>
                                    
									<button id="stripe_pro_new" class="btn stripe valign-wrapper">
                                    <?php echo __( 'Card' );?> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8H4V6H20M20,18H4V12H20M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"></path></svg></button>
<!--									<button id="stripe_pro_btn" class="hide"></button>-->
                                    <?php if(!empty($config->bank_description)){?>
                                        <button id="bank_transfer" class="btn valign-wrapper bank">
                                        <?php echo __( 'Bank Transfer' );?>
                                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                         <path fill="currentColor" d="M15,14V11H18V9L22,12.5L18,16V14H15M14,7.7V9H2V7.7L8,4L14,7.7M7,10H9V15H7V10M3,10H5V15H3V10M13,10V12.5L11,14.3V10H13M9.1,16L8.5,16.5L10.2,18H2V16H9.1M17,15V18H14V20L10,16.5L14,13V15H17Z"></path></svg></button>
                                    <?php } ?>

                                    <?php if(!empty($config->paysera_password)){?>
                                        <button id="sms_payment" onclick="PayProViaSms();" class="btn valign-wrapper sms"><?php echo __( 'SMS' );?> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M17,19V5H7V19H17M17,1A2,2 0 0,1 19,3V21A2,2 0 0,1 17,23H7C5.89,23 5,22.1 5,21V3C5,1.89 5.89,1 7,1H17M9,7H15V9H9V7M9,11H13V13H9V11Z"></path></svg></button>
                                    <?php } ?>
                                </div>

							</div>
						</div>
					</div>
				
<!-- End Premium  -->
<a href="javascript:void(0);" id="btnProSuccess" style="visibility: hidden;display: none;"></a>

<div class="bank_transfer_modal modal modal-fixed-footer">
	<div class="modal-dialog">
    <div class="modal-content dt_bank_trans_modal">
		<div class="modal-header">
			<h5 class="modal-title"><?php echo __( 'Bank Transfer' );?></h5>
		</div>
        <div class="modal-body">
            <div class="bank_info"><?php echo htmlspecialchars_decode($config->bank_description);?></div>
			<div class="dt_user_profile hide_alert_info_bank_trans">
                <span class="valign-wrapper">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M13,13H11V7H13M13,17H11V15H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path></svg> <?php echo __( 'Note' );?>:
                </span>
				<ul class="browser-default dt_prof_vrfy">
					<li><?php echo __( 'Please transfer the amount of' );?> <b><span id="bank_transfer_price"></span></b> <?php echo __( 'to this bank account to buy' );?> <b>"<span id="bank_transfer_description"></span>"</b> <?php echo __( 'Plan Premium Membership' );?></li>
					<li><?php echo $config->bank_transfer_note;?></li>
				</ul>
            </div>
			<p class="dt_bank_trans_upl_rec"><a href="javascript:void(0);" onclick="$('.bank_transfer_modal').addClass('up_rec_active'); return false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M13.5,16V19H10.5V16H8L12,12L16,16H13.5M13,9V3.5L18.5,9H13Z"></path></svg> <?php echo __( 'Upload Receipt' );?></a></p>
            <div class="upload_bank_receipts">
                <div onclick="document.getElementById('receipt_img').click(); return false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M13.5,16V19H10.5V16H8L12,12L16,16H13.5M13,9V3.5L18.5,9H13Z"></path></svg>
                    <p><?php echo __( 'Upload Receipt' );?></p>
					<img id="receipt_img_preview" src="">
                </div>
            </div>
            <input type="file" id="receipt_img" class="hide" accept="image/x-png, image/gif, image/jpeg" name="receipt_img">
        </div>
        <!--<span style="display: block;text-align: center;" id="receipt_img_path"></span>-->
    </div>
    <div class="modal-footer">
		<div class="bank_transfr_progress hide" id="img_upload_progress">
			<div class="progress">
				<div id="img_upload_progress_bar" class="determinate progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
			</div>
		</div>
		<button class="modal-close waves-effect btn-flat"><?php echo __( 'Close' );?></button>
        <button class="waves-effect waves-green btn btn-flat bold" disabled id="btn-upload-receipt" data-selected=""><?php echo __( 'Confirm' );?></button>
    </div>
	</div>
</div>

<div class="modal fade" id="stripe_modal_pro" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content add_money_modal add_address_modal">
            <h5 class="modal-title text-center">Stripe</h5>
            <div class="modal-body">
                <div id="stripe_alert" style="    color: red;"></div>
                <form id="stripe_form" method="post">
                    <div class="form-group">
                        <input class="form-control shop_input" type="text" placeholder="<?php echo __( 'Name' );?>"  value="<?php echo $profile->full_name;?>" id="stripe_name">
                    </div>
                    <div class="form-group">
                        <input class="form-control shop_input" type="email" placeholder="<?php echo __( 'Email' );?>" value="" data-email="<?php echo base64_encode($profile->email);?>" id="stripe_email">
                    </div>
                    <div class="form-group">
                        <input id="stripe_number" class="form-control shop_input" type="text" placeholder="<?php echo __( 'Card Number' );?>">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select id="stripe_month" type="text" class="form-control shop_input" autocomplete="off" placeholder="<?php echo __( 'Month' );?> (01)">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select id="stripe_year" type="text" class="form-control shop_input" autocomplete="off" placeholder="<?php echo __( 'Year' );?> (2019)">
                                    <?php for ($i=date('Y'); $i <= date('Y')+15; $i++) {  ?>
                                        <option value="<?php echo($i) ?>"><?php echo($i) ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input id="stripe_cvc" type="text" class="form-control shop_input" autocomplete="off" placeholder="CVC" maxlength="3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-main" onclick="SH_StripeRequestPro()" id="stripe_button_pro"><?php echo __( 'Pay' );?></button>
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal"><?php echo __( 'Cancel' );?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
                         
<script>

    document.getElementById('stripe_pro_new').addEventListener('click', function(e) {
        $('#stripe_email').val(atob($('#stripe_email').attr('data-email')));
        $('#stripe_number').val('');
        $('#stripe_cvc').val('');
        $('#stripe_modal_pro').removeClass('up_rec_img_ready, up_rec_active');
        $('#stripe_modal_pro').modal('open');
    });


    function PayProViaSms() {
        window.location = window.ajax + 'sms/generate_pro_link?price=' + getPrice() + '00';
    }

    function getDescription() {
        var plans = document.getElementsByName('pro_plan');
        for (index=0; index < plans.length; index++) {
            if (plans[index].checked) {
                return plans[index].value;
                break;
            }
        }
    }

    function getPrice() {
        var plans = document.getElementsByName('pro_plan');
        for (index=0; index < plans.length; index++) {
            if (plans[index].checked) {
                return plans[index].getAttribute('data-price');
                break;
            }
        }
    }

    document.getElementById('paypal').addEventListener('click', function(e) {
        $.post(window.ajax + 'paypal/generate_link', {description:getDescription(), amount:getPrice(), mode: "premium-membarship"}, function (data) {
            if (data.status == 200) {
                window.location.href = data.location;
            } else {
                $('.modal-body').html('<i class="fa fa-spin fa-spinner"></i> Payment declined ');
            }
        });

        e.preventDefault();
    });


    document.getElementById('bank_transfer').addEventListener('click', function(e) {
        $('#bank_transfer_price').text('<?php echo $config->currency_symbol;?>' + getPrice());
        $('#bank_transfer_description').text(getDescription());
        $('#receipt_img_path').html('');
        $('#receipt_img_preview').attr('src', '');
		$('.bank_transfer_modal').removeClass('up_rec_img_ready, up_rec_active');
        $('.bank_transfer_modal').modal('open');
    });

    document.getElementById('receipt_img').addEventListener('change', function(e) {
        let imgPath = $(this)[0].files[0].name;
        if (typeof(FileReader) != "undefined") {
            let reader = new FileReader();
            reader.onload = function(e) {
                $('#receipt_img_preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
        $('#receipt_img_path').html(imgPath);
		$('.bank_transfer_modal').addClass('up_rec_img_ready');
        $('#btn-upload-receipt').removeAttr('disabled');
        $('#btn-upload-receipt').removeClass('btn-flat').addClass('btn-success');
    });

    document.getElementById('btn-upload-receipt').addEventListener('click', function(e) {
        e.preventDefault();
        let bar = $('#img_upload_progress');
        let percent = $('#img_upload_progress_bar');

        let formData = new FormData();
        formData.append("description", getDescription());
        formData.append("price", getPrice());
        formData.append("mode", 'membership');
        formData.append("receipt_img", $("#receipt_img")[0].files[0], $("#receipt_img")[0].files[0].value);
        bar.removeClass('hide');
        $.ajax({
            xhr: function() {
                let xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt){
                    if (evt.lengthComputable) {
                        let percentComplete = evt.loaded / evt.total;
                        percentComplete = parseInt(percentComplete * 100);
                        //status.html( percentComplete + "%");
                        percent.width(percentComplete + '%');
                        percent.html(percentComplete + '%');
                        if (percentComplete === 100) {
                            bar.addClass('hide');
                            percent.width('0%');
                            percent.html('0%');
                        }
                    }
                }, false);
                return xhr;
            },
            url: window.ajax + 'profile/upload_receipt',
            type: "POST",
            async: true,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            timeout: 60000,
            dataType: false,
            data: formData,
            success: function(result) {
                if( result.status == 200 ){
                    $('.bank_transfer_modal').modal('close');
                    M.toast({html: '<?php echo __('Your receipt uploaded successfully.');?>'});
                    return false;
                }
            }
        });
    });
</script>