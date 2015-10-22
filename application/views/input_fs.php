<?php include 'header.php'; ?>
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others fixed">
			
			<div class="sidebar-menu-inner">	
				
				<header class="logo-env">
					
					<!-- logo -->
					<div class="logo">
						<a href="<?= base_url();?>" class="logo-expanded">
							<img src="<?= base_url();?>assets/images/logo@2x.png" width="200" alt="" />
						</a>
						
						<a href="<?= base_url();?>" class="logo-collapsed">
							<img src="<?= base_url();?>assets/images/logo-collapsed@2x.png" width="40" alt="" />
						</a>
					</div>
					
					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
						<a href="#" data-toggle="user-info-menu">
							<i class="fa-bell-o"></i>
							<span class="badge badge-success">7</span>
						</a>
						
						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>
					
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
					
					
								
				</header>
						
				
						
				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<li>
						<a href="<?= base_url();?>index.php/page/admin">
							<i class="linecons-cog"></i>
							<span class="title">Dashboard</span>
						</a>
					</li>
					<li  class="active opened active">
						<a href="<?= base_url();?>">
							<i class="linecons-shop"></i>
							<span class="title">Foodspot</span>
						</a>
						<ul>
							<li>
								<a href="<?= base_url();?>index.php/page/dataFs">
									<span class="title">Data Foodspot</span>
								</a>
							</li>
							<li class="active">
								<a href="<?= base_url();?>index.php/page/inputFs">
									<span class="title">Input Foodspot</span>
								</a>
							</li>
							<li>
								<a href="<?= base_url();?>index.php/page/memberRequest">
									<span class="title">Gold Member Request</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?= base_url();?>">
							<i class="linecons-tag"></i>
							<span class="title">Categories</span>
						</a>
						<ul>
							<li>
								<a href="<?= base_url();?>index.php/page/dataCat">
									<span class="title">Data Categories</span>
								</a>
							</li>
							<li>
								<a href="<?= base_url();?>index.php/page/inputCat">
									<span class="title">Input Categories</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?= base_url();?>">
							<i class="linecons-user"></i>
							<span class="title">User</span>
						</a>
						<ul>
							<li>
								<a href="<?= base_url();?>index.php/page/dataUser">
									<span class="title">Data User</span>
								</a>
							</li>
							<li>
								<a href="<?= base_url();?>index.php/page/inputUser">
									<span class="title">Input User</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
						
			</div>
			
		</div>
		
		<div class="main-content">
					
			<!-- User Info, Notifications and Menu Bar -->
			<nav class="navbar user-info-navbar" role="navigation">
				
				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
					
					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>
					
				</ul>
				
				
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
					
					<li class="dropdown user-profile">
						<a href="#" data-toggle="dropdown">
							<img src="<?= base_url();?>assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								<?php echo ucwords($this->session->userdata['username']);?>
								<i class="fa-angle-down"></i>
							</span>
						</a>
						
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li class="last">
								<a href="<?= base_url();?>index.php/page/logout">
									<i class="fa-lock"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
					
				</ul>
				
			</nav>
			<div class="page-title">
				<div class="title-env">
					<h1 class="title">Food Spot</h1>
					<p class="description">Contains everything related to foodspot</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-heading">
						<h3 class="panel-title">Input Foodspot</h3>
						</div>
						<?php
							if (isset($edit)) {
								foreach ($edit as $key => $nil) {
									$id_resto	= $nil->id_resto;
									$nm_resto	= $nil->nm_resto;
									$desc_resto	= $nil->desc_resto;
									$lat_resto	= $nil->lat_resto;
									$lng_resto	= $nil->lng_resto;
									$foto_resto	= $nil->foto_resto;
									$address	= $nil->address;
									$price_min	= "";
									$price_max	= "";
								}
							}
							else{
								$id_resto	= "";
								$nm_resto	= "";
								$address	= "";
								$desc_resto	= "";
								$lat_resto	= "-6.17367067585439";
								$lng_resto	= "106.82676315307617";
								$foto_resto	= "";
								$price_min	= "";
								$price_max	= "";
							}
						?>
						<div class="panel-body">
							<?php echo form_open_multipart('foodspot/saveFs'); ?>
								<div class="form-horizontal" role="form">
									<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Name</label>
									<div class="col-sm-10">
										<input class="form-control" name="fs_name" id="field-1" type="text" value="<?= $nm_resto;?>" placeholder="e.g. Mak Nyus Restaurant" required>
									</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-2">Description</label>
										<div class="col-sm-10">
											<textarea class="form-control"  rows="3" id="editor1" name="fs_desc"><?php echo $desc_resto;?></textarea>
										</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Address</label>
									<div class="col-sm-10">
										<textarea class="form-control"  rows="3" name="address" placeholder="e.g. Jln Juanda" required><?php echo $address;?></textarea>
									</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">User Name</label>
									<div class="col-sm-10">
										<select class="form-control" name="user_id" id="user_id">
											<option value=""> </option>
											<?php 
												if($edit){
													$isi = $this->db->where('resto_id', $id_resto)->get('t_user')->row()->name;
													$id_user = $this->db->where('resto_id', $id_resto)->get('t_user')->row()->id_user;
													echo "<option value='$id_user' selected>".$isi."</option>";
													echo "<script>$('#user_id').prop('disabled',true);</script>";
												}else{
													$isi = $this->db->where('resto_id', '')->get('t_user')->result();
													foreach($isi as $key => $val){
														echo "<option value='".$val->id_user."'>".$val->name."</option>";
													}
												}
											?>
										</select>
									</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-6">Open Time</label>
										<div class="col-sm-10">
											<div class="col-sm-4">
												<input type="checkbox" id="sun" name="day_open[]" value="Sunday">&nbsp;Sunday&nbsp;
												<input type="text" id="sun_time" name="time_open[]" placeholder="12.00 pm - 11.00 am">
											</div>
											<div class="col-sm-4">
												<input type="checkbox" id="mon" name="day_open[]" value="Monday">&nbsp;Monday&nbsp;
												<input type="text" id="mon_time" name="time_open[]" placeholder="12.00 pm - 11.00 am">
											</div>
											<div class="col-sm-4">
												<input type="checkbox" id="tue" name="day_open[]" value="Tuesday">&nbsp;Tuesday&nbsp;
												<input type="text" id="tue_time" name="time_open[]" placeholder="12.00 pm - 11.00 am">
											</div>
											<div class="col-sm-4">
												<input type="checkbox" id="wed" name="day_open[]" value="Wednesday">&nbsp;Wednesday&nbsp;
												<input type="text" id="wed_time" name="time_open[]" placeholder="12.00 pm - 11.00 am">
											</div>
											<div class="col-sm-4">
												<input type="checkbox" id="thu" name="day_open[]" value="Thursday">&nbsp;Thursday&nbsp;
												<input type="text" id="thu_time" name="time_open[]" placeholder="12.00 pm - 11.00 am">
											</div>
											<div class="col-sm-4">
												<input type="checkbox" id="fri" name="day_open[]" value="Friday">&nbsp;Friday&nbsp;
												<input type="text" id="fri_time" name="time_open[]" placeholder="12.00 pm - 11.00 am">
											</div>
											<div class="col-sm-4">
												<input type="checkbox" id="sat" name="day_open[]" value="Saturday">&nbsp;Saturday&nbsp;
												<input type="text" id="sat_time" name="time_open[]" placeholder="12.00 pm - 11.00 am">
											</div>
										</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Price Range</label>
									<div class="col-sm-5">
										<label class="col-sm-2 control-label" for="field-3">Rp</label>
										<div class="col-sm-10">
											<input class="form-control" name="price_min" id="field-1" type="number" value="<?= $price_min;?>" placeholder="Price Minimum" required>
										</div>
									</div>
									<div class="col-sm-5">
										<label class="col-sm-2 control-label" for="field-3">Rp</label>
										<div class="col-sm-10">
											<input class="form-control" name="price_max" id="field-1" type="number" value="<?= $price_max;?>" placeholder="Price Maximum" required>
										</div>
									</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group" id="notes">
										<label class="col-sm-2 control-label" for="field-2">Notes</label>
										<div class="col-sm-10">
											<textarea class="form-control ckeditor"  rows="10" id="editor1" name="notes"><?php echo $desc_resto;?></textarea>
										</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-3">Latitude</label>
										<div class="col-sm-4">
											<input class="form-control" name="fs_lat" id="field-3" type="text" value="<?= $lat_resto;?>" placeholder="e.g. -7.870456" onchange="setMarker(this.value,fs_lng.value)" required>
										</div>
										<label class="col-sm-2 control-label" for="field-4">Longitude</label>
										<div class="col-sm-4">
											<input class="form-control" name="fs_lng" id="field-4" type="text" value="<?= $lng_resto;?>" placeholder="e.g. 111.497798" onchange="setMarker(fs_lat.value,this.value)" required>
										</div>
										<div class="col-sm-2"></div>
										<div class="col-sm-10">
											<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
											<script type="text/javascript">
												var map;
												var myCenter=new google.maps.LatLng(<?= $lat_resto;?>,<?= $lng_resto;?>);
												var markersArray = [];
												var perbesar = 13;

												function setMarker(lat,lng){
													if(lat!=null||lng!=null){
														var lokasi = new google.maps.LatLng(lat,lng);
														clearOverlays();
														var marker = new google.maps.Marker({
														  position: lokasi
														  });
														markersArray.push(marker);
														marker.setMap(map);

														var infowindow = new google.maps.InfoWindow({
														    content: 'Latitude: ' + lat + '<br>Longitude: ' + lng
														  });
														  infowindow.open(map,marker);

														  var mapProp = {
															  center:lokasi,
															  zoom:13,
															  mapTypeId:google.maps.MapTypeId.ROADMAP
															  };
													}
												}

												function clearOverlays() {
												  for (var i = 0; i < markersArray.length; i++ ) {
												   markersArray[i].setMap(null);
												  }
												}
												function initialize()
												{
												var mapProp = {
												  center:myCenter,
												  zoom:perbesar,
												  mapTypeId:google.maps.MapTypeId.ROADMAP
												  };

												  map = new google.maps.Map(document.getElementById("googleMap"),mapProp);


													var marker = new google.maps.Marker({
													  position: myCenter
													  });
													markersArray.push(marker);
													marker.setMap(map);

												  google.maps.event.addListener(map, 'click', function(event) {
												    clearOverlays();
												    placeMarker(event.latLng);
												    
												  });
												}

												function placeMarker(location) {
												  var marker = new google.maps.Marker({
												    position: location,
												    map: map,
												  });
												  markersArray.push(marker);
												  marker.setMap(map);
												  
												  var infowindow = new google.maps.InfoWindow({
												    content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
												  });
												  infowindow.open(map,marker);
												  
												  document.getElementById("field-3").value= location.lat();
												  document.getElementById("field-4").value= location.lng();
												  
												}

												google.maps.event.addDomListener(window, 'load', initialize);
												//clearOverlays();
											</script>
											<div class="panel panel-default panel-border" id="googleMap" style="height:400px; margin-top:7px;"></div>
										</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-5">Foodspot Photo</label>
										<div class="col-sm-2" id="foto1">
											<div class="fileinput fileinput-new" data-provides="fileinput">
											  <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 150px;">
												<img data-src="holder.js/100%x100%" src="<?php 
												if($foto_resto!=""){
													if (file_exists(FCPATH."uploads/".$foto_resto)){
														echo base_url()."uploads/".$foto_resto;
													}
												}else{
													echo base_url()."uploads/images.png";
												}
												?>" alt="...">
											  </div>
											  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
											  <div>
												<span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="userfile" class="form-control" id="inputFoto"></span>
												<a href="#" class="btn btn-info fileinput-exists" data-dismiss="fileinput">Remove</a>
											  </div>
											</div>
										</div>
										<div class="col-sm-2" id="foto2">
											<div class="fileinput fileinput-new" data-provides="fileinput">
											  <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 150px;">
												<img data-src="holder.js/100%x100%" src="<?php 
												if($foto_resto!=""){
													if (file_exists(FCPATH."uploads/".$foto_resto)){
														echo base_url()."uploads/".$foto_resto;
													}
												}else{
													echo base_url()."uploads/images.png";
												}
												?>" alt="...">
											  </div>
											  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
											  <div>
												<span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="userfile1" class="form-control" id="inputFoto"></span>
												<a href="#" class="btn btn-info fileinput-exists" data-dismiss="fileinput">Remove</a>
											  </div>
											</div>
										</div>
										<div class="col-sm-2" id="foto3">
											<div class="fileinput fileinput-new" data-provides="fileinput">
											  <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 150px;">
												<img data-src="holder.js/100%x100%" src="<?php 
												if($foto_resto!=""){
													if (file_exists(FCPATH."uploads/".$foto_resto)){
														echo base_url()."uploads/".$foto_resto;
													}
												}else{
													echo base_url()."uploads/images.png";
												}
												?>" alt="...">
											  </div>
											  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
											  <div>
												<span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="userfile2" class="form-control" id="inputFoto"></span>
												<a href="#" class="btn btn-info fileinput-exists" data-dismiss="fileinput">Remove</a>
											  </div>
											</div>
										</div>
										<div class="col-sm-2" id="foto4">
											<div class="fileinput fileinput-new" data-provides="fileinput">
											  <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 150px;">
												<img data-src="holder.js/100%x100%" src="<?php 
												if($foto_resto!=""){
													if (file_exists(FCPATH."uploads/".$foto_resto)){
														echo base_url()."uploads/".$foto_resto;
													}
												}else{
													echo base_url()."uploads/images.png";
												}
												?>" alt="...">
											  </div>
											  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
											  <div>
												<span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="userfile3" class="form-control" id="inputFoto"></span>
												<a href="#" class="btn btn-info fileinput-exists" data-dismiss="fileinput">Remove</a>
											  </div>
											</div>
										</div>
										<div class="col-sm-2" id="foto5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
											  <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 150px;">
												<img data-src="holder.js/100%x100%" src="<?php 
												if($foto_resto!=""){
													if (file_exists(FCPATH."uploads/".$foto_resto)){
														echo base_url()."uploads/".$foto_resto;
													}
												}else{
													echo base_url()."uploads/images.png";
												}
												?>" alt="...">
											  </div>
											  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
											  <div>
												<span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="userfile4" class="form-control" id="inputFoto"></span>
												<a href="#" class="btn btn-info fileinput-exists" data-dismiss="fileinput">Remove</a>
											  </div>
											</div>
										</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-6">Category</label>
										<div class="col-sm-10">
											<?php foreach ($cat as $key => $value):?>
											<div class="col-sm-4">
												<input type="checkbox" name="category[]" id="kat<?= $value->id_kat?>" value="<?= $value->id_kat?>">&nbsp;<?= ucwords($value->nama_kat);?>
											</div>
											<?php endforeach; ?>
										</div>
									</div>
									<div class="form-group">
										<?php
											if(isset($edit)){
												$id_user = $this->db->where('resto_id', $id_resto)->get('t_user')->row()->id_user;
												echo "
												<input type='hidden' name='user_id' value='$id_user'>
												";
											}
										?>
										<input type="submit" class="btn btn-success btn-single pull-right" name="submit" value="Submit">
										<input type="hidden" name="id" value="<?= $id_resto;?>">
									</div>


								</div>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<footer class="main-footer sticky footer-type-1">
				
				<div class="footer-inner">
				
					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy; 2015 
						<strong>Food Spots</strong> 
					</div>
					
					
					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up">
					
						<a href="#" rel="go-top">
							<i class="fa-angle-up"></i>
						</a>
						
					</div>
					
				</div>
				
			</footer>
		</div>
		
			
		<!-- start: Chat Section -->
		<div id="chat" class="fixed">
			
			<div class="chat-inner">
			
				
				<h2 class="chat-header">
					<a href="#" class="chat-close" data-toggle="chat">
						<i class="fa-plus-circle rotate-45deg"></i>
					</a>
					
					Chat
					<span class="badge badge-success is-hidden">0</span>
				</h2>
				
				<script type="text/javascript">
				// Here is just a sample how to open chat conversation box
				jQuery(document).ready(function($)
				{
					var $chat_conversation = $(".chat-conversation");
					
					$(".chat-group a").on('click', function(ev)
					{
						ev.preventDefault();
						
						$chat_conversation.toggleClass('is-open');
						
						$(".chat-conversation textarea").trigger('autosize.resize').focus();
					});
					
					$(".conversation-close").on('click', function(ev)
					{
						ev.preventDefault();
						$chat_conversation.removeClass('is-open');
					});
					
					$("#sun_time").toggle();
					$("#mon_time").hide();
					$("#tue_time").hide();
					$("#wed_time").hide();
					$("#thu_time").hide();
					$("#fri_time").hide();
					$("#sat_time").hide();
					
					$("#foto2").hide();
					$("#foto3").hide();
					$("#foto4").hide();
					$("#foto5").hide();
					$("#notes").hide();
					
					$("#sun").click(function(){
						$("#sun_time").toggle();
					})
					$("#mon").click(function(){
						$("#mon_time").toggle();
					})
					$("#tue").click(function(){
						$("#tue_time").toggle();
					})
					$("#wed").click(function(){
						$("#wed_time").toggle();
					})
					$("#thu").click(function(){
						$("#thu_time").toggle();
					})
					$("#fri").click(function(){
						$("#fri_time").toggle();
					})
					$("#sat").click(function(){
						$("#sat_time").toggle();
					})
					
					$("#user_id").change(function(){
						$.ajax({
							type		:"GET",
							url			:"getUserType?id="+$("#user_id").val(),
							dataType	:"text",
							success		:function(response){
								if(response=="gold"){
									$("#foto2").show();
									$("#foto3").show();
									$("#foto4").show();
									$("#foto5").show();
									$("#notes").show();
								}else{
									$("#foto2").hide();
									$("#foto3").hide();
									$("#foto4").hide();
									$("#foto5").hide();
									$("#notes").hide();
								}
							}
						})
					})
					
				});
				</script>
			
			</div>
				
			</div>
			<?php
				if(isset($edit)){
					$index = 0;
					foreach ($edit as $key => $nil) {
						$day_open	= explode(",",$nil->day_open);
						foreach($day_open as $key2 => $val){
							$time = $nil->time_open;
							$time_open = explode("|",$time);
							if($val == "Sunday"){
								echo "
								<script>
									$('#sun').attr('checked',true);
									$('#sun_time').toggle();
									$('#sun_time').val('".$time_open[$index]."');
								</script>";
							}elseif($val == "Monday"){
								echo "
								<script>
									$('#mon').attr('checked',true);
									$('#mon_time').toggle();
									$('#mon_time').val(".$time_open[$index].");
								</script>";
							}elseif($val == "Tuesday"){
								echo "
								<script>
									$('#tue').attr('checked',true);
									$('#tue_time').toggle();
									$('#tue_time').val(".$time_open[$index].");
								</script>";
							}elseif($val == "Wednesday"){
								echo "
								<script>
									$('#wed').attr('checked',true);
									$('#wed_time').toggle();
									$('#wed_time').val(".$time_open[$index].");
								</script>";
							}elseif($val == "Thursday"){
								echo "
								<script>
									$('#thu').attr('checked',true);
									$('#thu_time').toggle();
									$('#thu_time').val(".$time_open[$index].");
								</script>";
							}elseif($val == "Friday"){
								echo "
								<script>
									$('#fri').attr('checked',true);
									$('#fri_time').toggle();
									$('#fri_time').val(".$time_open[$index].");
								</script>";
							}elseif($val == "Saturday"){
								echo "
								<script>
									$('#sat').attr('checked',true);
									$('#sat_time').toggle();
									$('#sat_time').val(".$time_open[$index].");
								</script>";
							}
							$index++;
						}
						$categories = explode(",",$nil->id_kat);
						foreach($categories as $key3 => $val2){
							echo "
								<script>
									$('#kat".$val2."').attr('checked',true);
								</script>";
						}
					}
				}
			?>
		</div>
		<!-- end: Chat Section -->
		
		
	</div>
<?php include'footer.php'; ?>