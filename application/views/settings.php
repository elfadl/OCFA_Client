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
					<li>
						<a href="<?= base_url();?>/index.php/page/admin">
							<i class="fa fa-cogs"></i>
							<span class="title">Web Settings</span>
						</a>
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
							if (isset($set)) {
								foreach ($set as $key => $nil) {
									switch($nil->name){
										case "description":
											$desc = $nil->value;
											break;
										case "welcome":
											$welcome = $nil->value;
											break;
										case "about":
											$about = $nil->value;
											break;
										case "android":
											$android = $nil->value;
											break;
										case "ios":
											$ios = $nil->value;
											break;
										case "email":
											$email = $nil->value;
											break;
										case "phone":
											$phone = $nil->value;
											break;
										case "facebook":
											$facebook = $nil->value;
											break;
										case "twitter":
											$twitter = $nil->value;
											break;
										case "google_plus":
											$google_plus = $nil->value;
											break;
										default :
											break;
									}
								}
							}
							else{
								$desc		= "";
								$welcome	= "";
								$about		= "";
								$android	= "";
								$ios		= "";
								$email		= "";
								$phone		= "";
								$facebook 	= "";
								$twitter 	= "";
								$google_plus = "";
							}
						?>
						<div class="panel-body">
							<?php echo form_open_multipart('foodspot/saveSettings'); ?>
								<div class="form-horizontal" role="form">
									<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Website Description</label>
									<div class="col-sm-10">
										<textarea class="form-control ckeditor"  rows="10" id="editor3" name="desc"><?= $desc;?></textarea>
									</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Welcome Text</label>
									<div class="col-sm-10">
										<textarea class="form-control" name="welcome" rows="10" ><?= $welcome;?></textarea>
									</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-2">About</label>
										<div class="col-sm-10">
											<textarea class="form-control ckeditor"  rows="10" id="editor1" name="about"><?= $about;?></textarea>
										</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Android Apps Download Link </label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="android" placeholder="http://www.foodspots.co.id/download/android" value="<?= $android;?>" required>
									</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">iOS Apps Download Link </label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="ios" placeholder="http://www.foodspots.co.id/download/ios" value="<?= $ios;?>" required>
									</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group" id="email">
										<label class="col-sm-2 control-label" for="field-2">Email</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="email" placeholder="admin@foodspots.co.id" value="<?= $email;?>" required>
										</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group" id="phone">
										<label class="col-sm-2 control-label" for="field-2">Phone Number</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="phone" placeholder="+62 123 450 450" value="<?= $phone;?>" required>
										</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group" id="phone">
										<label class="col-sm-2 control-label" for="field-2">Facebook Link</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="facebook" placeholder="http://www.facebook.com/" value="<?= $facebook;?>" required>
										</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group" id="phone">
										<label class="col-sm-2 control-label" for="field-2">Twitter Link</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="twitter" placeholder="http://www.twitter.com/" value="<?= $twitter;?>" required>
										</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group" id="phone">
										<label class="col-sm-2 control-label" for="field-2">Google Plus Link</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="google_plus" placeholder="http://plus.google.com/" value="<?= $google_plus;?>" required>
										</div>
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-success btn-single pull-right" name="submit" value="Save">
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