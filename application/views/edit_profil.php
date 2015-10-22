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
						<a href="<?= base_url();?>index.php/page/member" class="logo-expanded">
							<img src="<?= base_url();?>/assets/images/logo@2x.png" width="200" alt="" />
						</a>
						
						<a href="<?= base_url();?>index.php/page/member" class="logo-collapsed">
							<img src="<?= base_url();?>/assets/images/logo-collapsed@2x.png" width="40" alt="" />
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
						<a href="<?= base_url();?>index.php/page/member">
							<i class="linecons-cog"></i>
							<span class="title">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url();?>index.php/page/mEditFs">
							<i class="linecons-shop"></i>
							<span class="title">Edit Foodspot</span>
						</a>
					</li>
					<li class="active opened active">
						<a href="<?= base_url();?>index.php/page/member">
							<i class="linecons-user"></i>
							<span class="title">User</span>
						</a>
						<ul>
							<li>
								<a href="<?= base_url();?>index.php/page/profil">
									<span class="title">Profil</span>
								</a>
							</li>
							<li class="active">
								<a href="<?= base_url();?>index.php/page/editProfil">
									<span class="title">Edit Profil</span>
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
							<img src="<?= base_url();?>/assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								<?php 
									$nama = $this->db->where('id_user',$this->session->userdata['id_user'])->get('t_user')->row()->name;
									echo ucwords($nama);?>
								<i class="fa-angle-down"></i>
							</span>
						</a>
						
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li class="last">
								<a href="<?= base_url();?>index.php/page/editProfil">
									<i class="linecons-user"></i>
									Edit Profil
								</a>
							</li>
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
			<div class="row">
				<div class="col-md-12">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Edit Profil</h3>
							
						</div>
						<div class="panel-body">
							<?php echo form_open('foodspot/saveProfil'); ?>
							<?php 
								if (isset($det)&&$det != null) {
									foreach ($det as $key => $value):
							?>
								<div class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Name</label>
										<div class="col-sm-10">
											<input class="form-control" name="name" id="field-1" type="text" value="<?= $value->name;?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Username</label>
										<div class="col-sm-10">
											<input class="form-control" name="username" id="field-1" type="text" value="<?= $value->username;?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">New Password</label>
										<div class="col-sm-10">
											<input class="form-control" name="password" id="field-1" type="password" >
											<label class="text-italic">Blank the form if you don't want to change your password</label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Retype New Password</label>
										<div class="col-sm-10">
											<input class="form-control" name="repass" id="field-1" type="password" >
											<label class="text-italic">Blank the form if you don't want to change your password</label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Email</label>
										<div class="col-sm-10">
											<input class="form-control" name="email" id="field-1" type="email" value="<?= $value->email;?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Phone Number</label>
										<div class="col-sm-10">
											<input class="form-control" name="phone" id="field-1" type="text" value="<?= $value->phone;?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Old Password</label>
										<div class="col-sm-10">
											<input class="form-control" name="oldpass" id="field-1" type="password" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1"></label>
										<div class="col-sm-10">
											<input type="hidden" name="id" value="<?=$value->id_user?>">
											<input class="btn btn-info" type="submit" value="Update" required>
										</div>
									</div>
								</div>
							<?php echo form_close(); ?>
						</div>
					<?php endforeach;
				} elseif(isset($again)&&$again != null){
					//foreach ($again as $key => $value):
							?>
								<div class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Name</label>
										<div class="col-sm-10">
											<input class="form-control" name="name" id="field-1" type="text" value="<?= $again['name'];?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Username</label>
										<div class="col-sm-10">
											<input class="form-control" name="username" id="field-1" type="text" value="<?= $again["username"];?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">New Password</label>
										<div class="col-sm-10">
											<input class="form-control" name="password" id="field-1" type="password" >
											<label class="text-italic">Blank the form if you don't want to change your password</label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Retype New Password</label>
										<div class="col-sm-10">
											<input class="form-control" name="repass" id="field-1" type="password" >
											<label class="text-italic">Blank the form if you don't want to change your password</label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Email</label>
										<div class="col-sm-10">
											<input class="form-control" name="email" id="field-1" type="email" value="<?= $again["email"];?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Phone Number</label>
										<div class="col-sm-10">
											<input class="form-control" name="phone" id="field-1" type="text" value="<?= $again["phone"];?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Old Password</label>
										<div class="col-sm-10">
											<input class="form-control" name="oldpass" id="field-1" type="password" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1"></label>
										<div class="col-sm-10">
											<input type="hidden" name="id" value="<?=$again["id_user"]?>">
											<input class="btn btn-info" type="submit" value="Update" required>
										</div>
									</div>
								</div>
							<?php echo form_close(); ?>
						</div>
					<?php //endforeach;
				}else{
					echo "No Data";
				}?>
					
					</div>
				</div>
			</div>
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
		<!-- end: Chat Section -->
		
		
	</div>
	<script>
		$(document).ready(function(){
			
		  $("#thum1").on("click", function(){
			$("#mainImage").attr("src",$("#images1").attr("src"));
		  });
		  $("#thum2").on("click", function(){
			$("#mainImage").attr("src",$("#images2").attr("src"));
		  });
		  $("#thum3").on("click", function(){
			$("#mainImage").attr("src",$("#images3").attr("src"));
		  });
		  $("#thum4").on("click", function(){
			$("#mainImage").attr("src",$("#images4").attr("src"));
		  });
		  $("#thum5").on("click", function(){
			$("#mainImage").attr("src",$("#images5").attr("src"));
		  });
		});
	</script>
	
	<div class="page-loading-overlay">
		<div class="loader-2"></div>
	</div>
<?php include 'footer.php'; ?>