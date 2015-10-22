<?php include 'header.php';?>
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
							</li><li>
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
							<li class="active">
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
					<h1 class="title">Data User</h1>
					<p class="description">Contain about user</p>
				</div>
					
			</div>
			<!-- Responsive Table -->
			<div class="row">
				<div class="col-md-12">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Data Admin</h3>
							
						</div>
						<?php 
							if ($adm != null) {
						?>
						<div class="panel-body">
							
							<div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="false" data-add-focus-btn="false">
							
								<table cellspacing="0" class="table table-small-font table-bordered table-striped">
									<thead>
										<tr>
											<th>#</th>
											<th data-priority="1">Admin Id</th>
											<th data-priority="3">Username</th>
											<th data-priority="1">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$no=1;
											foreach ($adm as $key => $value):
										?>
										<tr>
											<th><?= $no++;?></th>
											<td><?= $value->id_admin;?></td>
											<td><?= $value->username;?></td>
											<td>
												<?= form_open('page/editAdmin');?>
												<input type="hidden"  name="id" value="<?= $value->id_admin;?>">
												<button class="btn btn-info btn-single">Update</button>
												<?= form_close();?>
											</td>
										</tr>
									<?php endforeach;?>
									</tbody>
								</table>
							
							</div>
								
							
						</div>
						<?php }else{
							echo "<label>No Data Inserted</label>";
						}?>
					
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Data User</h3>
							
						</div>
						<?php 
							if ($user != null) {
						?>
						<div class="panel-body">
							
							<div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="false" data-add-focus-btn="false">
							
								<table cellspacing="0" class="table table-small-font table-bordered table-striped">
									<thead>
										<tr>
											<th data-priority="1">User Id</th>
											<th data-priority="3">Full Name</th>
											<th data-priority="3">Email</th>
											<th data-priority="3">Username</th>
											<th data-priority="3">Type</th>
											<th data-priority="3">Phone</th>
											<th data-priority="1" colspan="2" class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$no=1;
											foreach ($user as $key => $value):
										?>
										<tr>
											<th><?= $value->id_user;?></th>
											<td><?= $value->name;?></td>
											<td><?= $value->email;?></td>
											<td><?= $value->username;?></td>
											<td><?php 
											if($value->type == "free"){
												echo "Free Member";
											}else{
												echo "Gold Member";
											}
											?></td>
											<td><?= $value->phone;?></td>
											<td>
												<?= form_open('page/editUser');?>
												<input type="hidden" name="id" value="<?= $value->id_user;?>">
												<button class="btn btn-info btn-single">Update</button>
												<?= form_close();?>
											</td>
											<td>
												<?= form_open('foodspot/delUser');?>
												<input type="hidden"  name="id" value="<?= $value->id_user;?>">
												<button class="btn btn-warning btn-single">Delete</button>
												<?= form_close();?>
											</td>
										</tr>
									<?php endforeach;?>
									</tbody>
								</table>
							
							</div>
							
							<script type="text/javascript">
							// This JavaScript Will Replace Checkboxes in dropdown toggles
							// jQuery(document).ready(function($)
							// {
							// 	setTimeout(function()
							// 	{
							// 		$(".checkbox-row input").addClass('cbr');
							// 		cbr_replace();
							// 	}, 0);
							// });
							</script>
								
							
						</div>
						<?php }else{
							echo "<label>No Data Inserted</label>";
						}?>
					
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
		
		
	</div>
<?php include 'footer.php';?>