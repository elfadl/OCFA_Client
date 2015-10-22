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
						<a href="<?= base_url();?>">
							<i class="linecons-cog"></i>
							<span class="title">Dashboard</span>
						</a>
					</li>
					<li class="active opened active">
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
					<h1 class="title">Detail Food Spots</h1>
					<p class="description">Contains detail about Food Spots</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-heading">
						<h3 class="panel-title">Detail FoodSpots</h3>
						</div>
						<div class="panel-body">
							<?php 
								if ($det != null) {
									foreach ($det as $key => $value):
							?>
								<div class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-2 control-label">FoodSpots Id</label>
										<div class="col-sm-10">
											<strong class="form-control"><?= $value->id_resto;?></strong>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">User Id</label>
										<div class="col-sm-10">
											<div class="form-control"><?php echo $this->db->where('resto_id',$value->id_resto)->get('t_user')->row()->id_user?></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">FoodSpots Name</label>
										<div class="col-sm-10">
											<div class="form-control"><?= $value->nm_resto;?></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">FoodSpots Description</label>
										<div class="col-sm-10">
											<div class="form-control"><?= $value->desc_resto;?></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">FoodSpots Address</label>
										<div class="col-sm-10">
											<div class="form-control"><?= $value->address;?></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">FoodSpots Open Time</label>
										<div class="col-sm-10">
											<table class="table">
												<thead>
													<th>Open Day</th>
													<th>Open Time</th>
												</thead>
												<tbody>
													<?php
														$day_arr = explode(",",$value->day_open);
														$time_arr = explode("|",$value->time_open);
														$index = 0;
														foreach($day_arr as $key => $val){
															switch ($val){
																case "Sunday":
																	echo "
																	<tr>
																		<td>Sunday</td>
																		<td id='sun'>".$time_arr[$index]."</td>
																	</tr>";
																	break;
																case "Monday":
																	echo "
																	<tr>
																		<td>Monday</td>
																		<td id='mon'>".$time_arr[$index]."</td>
																	</tr>";
																	break;
																case "Tuesday":
																	echo "
																	<tr>
																		<td>Tuesday</td>
																		<td id='tue'>".$time_arr[$index]."</td>
																	</tr>";
																	break;
																case "Wednesday":
																	echo "
																	<tr>
																		<td>Wednesday</td>
																		<td id='wed'>".$time_arr[$index]."</td>
																	</tr>";
																	break;
																case "Thursday":
																	echo "
																	<tr>
																		<td>Thursday</td>
																		<td id='thu'>".$time_arr[$index]."</td>
																	</tr>";
																	break;
																case "Friday":
																	echo "
																	<tr>
																		<td>Friday</td>
																		<td id='fri'>".$time_arr[$index]."</td>
																	</tr>";
																	break;
																case "Saturday":
																	echo "
																	<tr>
																		<td>Saturday</td>
																		<td id='sat'>".$time_arr[$index]."</td>
																	</tr>";
																	break;
															}
															$index++;
														}
													?>
													
												</tbody>
											</table>											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Price Range</label>
										<div class="col-sm-10">
											<div class="form-control"><?php
												$price = $value->price_range;
												if($price != ""){
													$prices = explode(",",$price);
													echo "Rp".number_format($prices[0],2,",",".")." - Rp ".number_format($prices[1],2,",",".");
												}else{
													echo "Rp 0 - Rp 0";
												}
											?></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">FoodSpots Notes</label>
										<div class="col-sm-10">
											<div class="form-control"><?= $value->notes;?></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">FoodSpots Location</label>
										<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
										<script type="text/javascript">
											var pusat=new google.maps.LatLng(<?= $value->lat_resto;?>,<?= $value->lng_resto;?>);
											var lati = <?= $value->lat_resto;?>;
											var longi = <?= $value->lng_resto;?>;

											function initial()
											{
											var petaProp = {
											  center:pusat,
											  zoom:15,
											  mapTypeId:google.maps.MapTypeId.ROADMAP
											  };

											var peta=new google.maps.Map(document.getElementById("googleMap"),petaProp);

											var tanda=new google.maps.Marker({
											  position:pusat,
											  });

											tanda.setMap(peta);

											var tip = new google.maps.InfoWindow({
											  content:'Latitude: ' + lati + '<br>Longitude: ' + longi
											  });

											google.maps.event.addListener(tanda, 'click', function() {
											  tip.open(peta,tanda);
											  });
											}

											google.maps.event.addDomListener(window, 'load', initial);
										</script>
										<div class="col-sm-10">
											<div class="form-control" id="googleMap" style="height:400px; margin-top:7px;"></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">FoodSpots Picture</label>
										<div class="col-sm-10">
											<img src="<?= base_url();?>uploads/<?= $value->foto_resto;?>" style="max-width:504px;max-height:428px;">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">FoodSpots Category</label>
										<div class="col-sm-10">
											<div class="form-control">
											<?php
													$k2 = $value->id_kat;
													$ktok = explode(",", $k2);
													$sumk = count($ktok)-1;
													for ($i=0; $i <= $sumk ; $i++) { 
														//echo $ktok[$i];
														
														$kat = $this->db->where('id_kat', $ktok[$i])->get('t_kategori')->result();
														foreach ($kat as $key => $cat) {
															echo $cat->nama_kat."<br>";
														}
													}
													//echo $cat;
												?>
												</div>
										</div>
									</div>
									<div class="form-group">
										<?php echo form_open('page/editFs');?>
										<button class="btn btn-info btn-single">Update</button>
										<input type="hidden" name="id" value="<?= $value->id_resto;?>">
										<?php echo form_close();?>
									</div>
								</div>
						</div>
					<?php endforeach;
				} else{
					echo "No Data";
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
	
<?php include'footer.php'; ?>