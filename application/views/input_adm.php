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
					<li>
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
							<li>
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
					<li class="active opened active">
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
							<li class="active">
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
					<h1 class="title">User</h1>
					<p class="description"></p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-heading">
						<h3 class="panel-title">Input User</h3>
						</div>
						<div class="panel-body">
							<?php echo form_open('foodspot/saveUser');
								if (isset($adm)) {
									foreach ($adm as $key => $value) {
										$id = $value->id_admin;
										$user = $value->username;
										$pass = $value->password;
										$name = "";
										$email = "";
										$type = "";
										$phone = "";
									}
								}elseif(isset($users)){
									foreach ($users as $key => $value) {
										$id = $value->id_user;
										$name = $value->name;
										$email = $value->email;
										$user = $value->username;
										$type = $value->type;
										$phone = $value->phone;
									}
								}else{
									$id = "";
									$user = "";
									$pass = "";
									$name = "";
									$email = "";
									$type = "";
									$phone = "";
								}
							?>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1"></label>
									<div class="col-sm-10">
										<input class="" name="pilih" value="admin" type="radio" id="admin" required checked> Admin
										<input class="" name="pilih" value="user" type="radio" id="user" required> User
									</div>
								</div>
								<br><br>
								<div id="form_user" class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Email</label>
										<div class="col-sm-10">
											<input class="form-control" name="email" value="<?= $email;?>" id="field-1" type="text" placeholder="e.g. andrew@gmail.com" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Full Name</label>
										<div class="col-sm-10">
											<input class="form-control" name="name" value="<?= $name;?>" id="field-1" type="text" placeholder="e.g. Andrew Smith" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Username</label>
										<div class="col-sm-10">
											<input class="form-control" name="username" value="<?= $user;?>" id="field-1" type="text" placeholder="e.g. Andrew" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-2">Password</label>
										<div class="col-sm-10">
											<input class="form-control" name="password" id="field-2" type="password" placeholder="e.g. 12345" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-2">Retype Password</label>
										<div class="col-sm-10">
											<input class="form-control" name="repass" id="field-2" type="password" placeholder="e.g. 12345" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-2">Member Type</label>
										<div class="col-sm-10">
											<select class="form-control" name="member_type" required>
												<option value="free" <?php if($type == "free"){echo "selected";} ?>>Free Member</option>
												<option value="gold" <?php if($type == "gold"){echo "selected";} ?>>Gold Member</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-2">Phone Number</label>
										<div class="col-sm-10">
											<input class="form-control" name="phone" value="<?= $phone;?>" id="field-2" type="text" placeholder="e.g. 08123456789" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-2">Input Security Code</label>
										<div class="col-sm-10">
											<?=$image?>
											<input class="form-control" name="security_code" type="text" required>
										</div>
									</div>
									<div class="form-group">
										<button class="btn btn-success btn-single pull-right" name="submit">Submit</button>
										<input type="hidden" name="id" value="<?= $id;?>">
									</div>
								</div>
							<?php echo form_close();?>
							<?php echo form_open('foodspot/saveAdmin');
								if (isset($adm)) {
									foreach ($adm as $key => $value) {
										$id = $value->id_admin;
										$user = $value->username;
										$pass = $value->password;
									}
								}else{
									$id = "";
									$user = "";
									$pass = "";
								}
							?>
							
								<div id="form_admin" class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Username</label>
										<div class="col-sm-10">
											<input class="form-control" name="username" value="<?= $user;?>" id="field-1" type="text" placeholder="e.g. Andrew" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-2">Password</label>
										<div class="col-sm-10">
											<input class="form-control" name="password" value="<?= $pass;?>" id="field-2" type="password" placeholder="e.g. 12345" required>
										</div>
									</div>
									<div class="form-group">
										<button class="btn btn-success btn-single pull-right" name="submit">Submit</button>
										<input type="hidden" name="id" value="<?= $id;?>">
									</div>
								</div>
							<?php echo form_close();?>
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
					
					
					
					$("#admin").change(function(){
						$("#form_user").hide();
						$("#form_admin").show();
					})
					
					$("#user").change(function(){
						$("#form_admin").hide();
						$("#form_user").show();
					})
					
					<?php
						if(isset($adm)){
							echo "
								$('#form_user').hide();
								$('#user').prop('disabled', true);
								$('#admin').prop('disabled', false);
								$('#admin').prop('checked', true);
								$('#user').prop('checked', false);
								$('#form_admin').show();
								";
						}elseif(isset($users)){
							echo "
								$('#admin').prop('disabled', true);
								$('#user').prop('disabled', false);
								$('#user').prop('checked', true);
								$('#admin').prop('checked', false);
								$('#form_admin').hide();
								$('#form_user').show();
								";
						}else{
							echo "$('#form_user').hide();";
						}
					?>
					
				});
				</script>
			
			</div>
				
			</div>
			
		</div>
		<!-- end: Chat Section -->
		
		
	</div>
<?php include'footer.php'; ?>