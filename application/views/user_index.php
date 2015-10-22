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
					<li class="active opened active">
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
					<li>
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
							<li>
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
							<h3 class="panel-title">Foodspot Details</h3>
							<?php
								$get = $this->db->where("id_user",$this->session->userdata('id_user'))->get("t_user")->row();
								if($get->type == "free"|| date("Y-m-d") > date("Y-m-d",strtotime($get->expired))){
							?>
							<div class="pull-right">
								<?php echo form_open('foodspot/upgrade'); ?>
								<input type="hidden" name="id" value="<?=$this->session->userdata('id_user');?>">
								<input type="submit" class="btn btn-lg btn-info text-right" name="upgrade" value="Upgrade to Gold" onclick="if(confirm('Do you want to upgrade to gold now?')){return true;}else{return false;}">
								<?php echo form_close(); ?>
							</div>
							<?php } ?>
						</div>
						<div class="panel-body">
							<?php 
								if ($det != null) {
									foreach ($det as $key => $value):
							?>
								<div class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-2 text-right">FoodSpots Name</label>
										<div class="col-sm-10">
											<div><?= $value->nm_resto;?></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 text-right">FoodSpots Description</label>
										<div class="col-sm-10">
											<div><?= $value->desc_resto;?></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 text-right">FoodSpots Address</label>
										<div class="col-sm-10">
											<div><?= $value->address;?></div>
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
										<label class="col-sm-2 text-right">Price Range</label>
										<div class="col-sm-10">
											<div ><?php
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
										<label class="col-sm-2 text-right">FoodSpots Notes</label>
										<div class="col-sm-10">
											<div><?= $value->notes;?></div>
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
									<?php
										$foto_arr = explode(",",$value->foto_resto);
									?>
									<div class="form-group">
										<label class="col-sm-2 control-label">FoodSpots Picture</label>
										<div class="col-sm-10">
											<div class="col-md-12">
												<img id="mainImage" src="<?= base_url();?>uploads/<?php
													for($i=0;$i<5;$i++){
														if($foto_arr[$i] != null){
															echo $foto_arr[$i];
															$i = 5;
														}
													}
												?>" style="max-width:504px;max-height:350px;">
											</div>
											<div class="col-md-1"></div>
											<?php 
												$i = 1;
												foreach($foto_arr as $key => $val){
													if($val != null){
														echo "
															<div class='thumbnail col-md-2' style='max-width: 110px; max-height: 85px;margin: 5px'>
																<a href='#mainImage' id='thum".$i."'><img src='".base_url()."uploads/".$val."' id='images".$i."' alt='...' style='max-width: 100px; max-height: 75px;'></a>
															</div>
														";
														$i++;
													}
												}
											?>
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 text-right">FoodSpots Category</label>
										<div class="col-sm-10">
											<div>
											<?php
													$k2 = $value->id_kat;
													$ktok = explode(",", $k2);
													$sumk = count($ktok)-1;
													for ($i=0; $i <= $sumk ; $i++) { 
														//echo $ktok[$i];
														
														$kat = $this->db->where('id_kat', $ktok[$i])->get('t_kategori')->result();
														foreach ($kat as $key => $cat) {
															if($i!=0){
																echo ", ";
															}
															echo $cat->nama_kat;
														}
													}
													//echo $cat;
												?>
												</div>
										</div>
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