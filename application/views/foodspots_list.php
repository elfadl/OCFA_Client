<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?= base_url();?>landing/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url();?>landing/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url();?>landing/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	
	<!-- jQuery -->
    <script src="<?= base_url();?>landing/js/jquery.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">FoodSpot</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?= base_url();?>">Home</a>
                    </li>
					<li>
                        <a href="<?= base_url();?>index.php/page/foodspotsList">FoodSpots List</a>
                    </li>
					<li>
                        <a href="<?= base_url();?>index.php/page/member">Sign In</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	<header>
        <div class="container2">
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>FoodSpots List</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
				<div class="col-md-12">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Data Restaurant</h3>
							
						</div>
						<div class="panel-body">
							
							<div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="false" data-add-display-all-btn="true" data-add-focus-btn="false">
							
								<table cellspacing="0" class="table table-small-font table-bordered table-striped" style="margin-top:21px;">
									<thead>
										<tr>
											<th>No</th>
											<th data-priority="1">FoodSpot Name</th>
											<th data-priority="2">FoodSpot Description</th>
											<th data-priority="3">FoodSpot Category</th>
											<th data-priority="4">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no =1; foreach ($fs as $key => $value):
										$get = $this->db->where("resto_id",$value->id_resto)->get("t_user")->row();
										if($get->type == "free" || ($get->type == "gold" && date("Y-m-d") <= date("Y-m-d",strtotime($get->expired)))){
										?>
										<tr>
											<th><?php echo $no++;?></th>
											<td><?php echo ucwords($value->nm_resto);?></td>
											<td><?php echo $value->desc_resto;?></td>
											<td>
												<?php
													$first = true;
													$kategori = "";
													$k1 = explode(",",$value->id_kat);
													foreach ($k1 as $key => $kat1) {
														if(!$first){
															echo ", ";
															$kategori .= ", ";
														}
														$first = false;
														$k2 = $this->db->where('id_kat', $kat1)->get('t_kategori')->result();
														foreach ($k2 as $key => $kat) {
															echo ucwords($kat->nama_kat);
															$kategori .= ucwords($kat->nama_kat);
														}
													}
												?>
											</td>
											<td>
												<input type="hidden" id="id" name="id" value="<?php echo $value->id_resto;?>">
												<input type="hidden" id="kat<?=$value->id_resto?>" name="kat" value="<?php echo $kategori;?>">
												<input type="hidden" id="desc<?=$value->id_resto?>" name="desc" value="<?php echo $value->desc_resto;?>">
												<input type="hidden" id="name<?=$value->id_resto?>" name="name" value="<?php echo $value->nm_resto;?>">
												<input type="hidden" id="lat<?=$value->id_resto?>" name="lat" value="<?php echo $value->lat_resto;?>">
												<input type="hidden" id="lng<?=$value->id_resto?>" name="lng" value="<?php echo $value->lng_resto;?>">
												<input type="hidden" id="foto<?=$value->id_resto?>" name="foto" value="<?php echo $value->foto_resto;?>">
												<input type="hidden" id="address<?=$value->id_resto?>" name="address" value="<?php echo $value->address;?>">
												<input type="hidden" id="notes<?=$value->id_resto?>" name="notes" value='<?php echo $value->notes;?>'>
												<input type="hidden" id="open_day<?=$value->id_resto?>" name="open_day" value="<?php echo $value->day_open;?>">
												<input type="hidden" id="open_time<?=$value->id_resto?>" name="open_time" value="<?php echo $value->time_open;?>">
												<input type="hidden" id="base<?=$value->id_resto?>" name="base" value="<?php echo base_url().'uploads/';?>">
												
												<?php
													$price_range = $value->price_range;
													if($price_range != ""){
														$prices = explode(",",$price_range);
														$price = "Rp ".number_format($prices[0],2,",",".")." - Rp ".number_format($prices[1],2,",",".");
													}else{
														$price = "Rp 0 - Rp 0";
													}
													$type = $this->db->where('resto_id',$value->id_resto)->get('t_user')->row()->type;
												?>
												<a href="<?php if($type == "gold"){echo "#modalGold";}else{echo "#portfolioModal1";}?>" class="portfolio-link" data-toggle="modal" onclick="openModal(name<?=$value->id_resto?>.value,foto<?=$value->id_resto?>.value,desc<?=$value->id_resto?>.value,kat<?=$value->id_resto?>.value,lat<?=$value->id_resto?>.value,lng<?=$value->id_resto?>.value,open_day<?=$value->id_resto?>.value,open_time<?=$value->id_resto?>.value,address<?=$value->id_resto?>.value,notes<?=$value->id_resto?>.value,'<?=$price ?>','<?=$type ?>',base<?=$value->id_resto?>.value)"><button class="btn btn-info btn-single">Detail</button></a>
											</td>
										</tr>
									<?php }endforeach;?>
									</tbody>
								</table>
							
							</div>
							
							<script type="text/javascript">
							// This JavaScript Will Replace Checkboxes in dropdown toggles
							/*jQuery(document).ready(function()
							{
								setTimeout(function()
								{
									$(".checkbox-row input").addClass('cbr');
									//cbr_replace();
								}, 0);
								
								
								
							});*/
							var lat;
							var lng;
							function openModal(name,image,desc,kat,latitude,longitude,open_day,open_time,address,notes,price,type,base){
								var day = open_day.split(",");
								var time = open_time.split("|");
								
								if(type == "gold"){
									$("#images").hide();
									$("#images1").hide();
									$("#images2").hide();
									$("#images3").hide();
									$("#images4").hide();
									document.getElementById('titleGold').innerHTML = name;
									document.getElementById('describeGold').innerHTML = desc;
									document.getElementById('kategoriGold').innerHTML = kat;
									document.getElementById('addressGold').innerHTML = address;
									document.getElementById('notes').innerHTML = notes;
									var img = image.split(",");
									var i = 0;
									img.forEach(function(entry){
										if(entry != ""){
											if(i == 0){
												$("#images").show();
												document.getElementById('mainImageGold').src = base+entry;
												document.getElementById('images').src = base+entry;
											}else{
												$("#images"+i).show();
												document.getElementById('images'+i).src = base+entry;
											}
										}
										i++;
									});
									document.getElementById('priceGold').innerHTML = price;
									var i = 0;
									day.forEach(function(entry){
										if(entry=="Sunday"){
											document.getElementById('sunGold').innerHTML = time[i];
										}else if(entry=="Monday"){
											document.getElementById('monGold').innerHTML = time[i];
										}else if(entry=="Tuesday"){
											document.getElementById('tueGold').innerHTML = time[i];
										}else if(entry=="Wednesday"){
											document.getElementById('wedGold').innerHTML = time[i];
										}else if(entry=="Thursday"){
											document.getElementById('thuGold').innerHTML = time[i];
										}else if(entry=="Friday"){
											document.getElementById('friGold').innerHTML = time[i];
										}else if(entry=="Saturday"){
											document.getElementById('satGold').innerHTML = time[i];
										}
										i++;
									});
									setMarker(latitude,longitude,title,'gold');
								}else{
									document.getElementById('title').innerHTML = name;
									document.getElementById('describe').innerHTML = desc;
									document.getElementById('kategori').innerHTML = kat;
									document.getElementById('address').innerHTML = address;
									document.getElementById('mainImage').src = base+image;
									document.getElementById('price').innerHTML = price;
									var i = 0;
									day.forEach(function(entry){
										if(entry=="Sunday"){
											document.getElementById('sun').innerHTML = time[i];
										}else if(entry=="Monday"){
											document.getElementById('mon').innerHTML = time[i];
										}else if(entry=="Tuesday"){
											document.getElementById('tue').innerHTML = time[i];
										}else if(entry=="Wednesday"){
											document.getElementById('wed').innerHTML = time[i];
										}else if(entry=="Thursday"){
											document.getElementById('thu').innerHTML = time[i];
										}else if(entry=="Friday"){
											document.getElementById('fri').innerHTML = time[i];
										}else if(entry=="Saturday"){
											document.getElementById('sat').innerHTML = time[i];
										}
										i++;
									});
									setMarker(latitude,longitude,title,'free');
								}
							}
							
							</script>
								
							
						</div>
					
					</div>
				</div>
			</div>
		</div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-6">
                        <h3>Contact</h3>
                        <p>Email : <a href="mailto:<?=$this->db->where("name","email")->get("t_settings")->row()->value; ?>"><?=$this->db->where("name","email")->get("t_settings")->row()->value; ?></a><br>Phone Number : <?=$this->db->where("name","phone")->get("t_settings")->row()->value; ?></p>
                    </div>
                    <div class="footer-col col-md-6">
                        <h3>Find Us Here</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="<?=$this->db->where("name","facebook")->get("t_settings")->row()->value; ?>" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="<?=$this->db->where("name","google_plus")->get("t_settings")->row()->value; ?>" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="<?=$this->db->where("name","twitter")->get("t_settings")->row()->value; ?>" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
						<?php
							if(date("Y")!= 2015){
								echo "Copyright &copy; FoodSpots 2015 - ".date("Y");
							}else{
								echo "Copyright &copy; FoodSpots 2015";
							}
						?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
	
    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 id="title">Project Title</h2>
                            <hr class="star-primary">
                            <img id="mainImage" style="max-width:720px; max-height:325px;" class="img-responsive img-centered" alt="">
                            <p id="describe">Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Categories:
                                    <strong id="kategori">
                                    </strong>
                                </li>
                            </ul>
							<ul class="list-inline item-details">
                                <li>Address:
                                    <strong id="address">
                                    </strong>
                                </li>
                            </ul>
							<ul class="list-inline item-details">
                                <li>Price Range:
                                    <strong id="price">
                                    </strong>
                                </li>
                            </ul>
							<table class="table">
								<thead>
									<th class="text-center">Open Day</th>
									<th class="text-center">Open Time</th>
								</thead>
								<tbody>
									<tr>
										<td>Sunday</td>
										<td id="sun">Closed</td>
									</tr>
									<tr>
										<td>Monday</td>
										<td id="mon">Closed</td>
									</tr>
									<tr>
										<td>Tuesday</td>
										<td id="tue">Closed</td>
									</tr>
									<tr>
										<td>Wednesday</td>
										<td id="wed">Closed</td>
									</tr>
									<tr>
										<td>Thursday</td>
										<td id="thu">Closed</td>
									</tr>
									<tr>
										<td>Friday</td>
										<td id="fri">Closed</td>
									</tr>
									<tr>
										<td>Saturday</td>
										<td id="sat">Closed</td>
									</tr>
								</tbody>
							</table>
									<div class="panel panel-default panel-border" id="googleMap" style="height:400px; margin-top:7px;"></div>
							
                            <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="modalGold" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 id="titleGold">Project Title</h2>
                            <hr class="star-primary">
                            <img id="mainImageGold" style="max-width:720px; max-height:325px;" class="img-responsive img-centered">
							<div class="col-md-1"></div>
							<div class="thumbnail col-md-2" style="max-width: 110px; max-height: 85px;margin: 5px">
								<a href="#" id="thum1"><img id="images" alt="..." style="max-width: 100px; max-height: 75px;"></a>
							</div>
							<div class="thumbnail col-md-2" style="max-width: 110px; max-height: 85px;margin: 5px">
								<a href="#" id="thum2"><img id="images1" alt="..." style="max-width: 100px; max-height: 75px;"></a>
							</div>
							<div class="thumbnail col-md-2" style="max-width: 110px; max-height: 85px;margin: 5px">
								<a href="#" id="thum3"><img id="images2" alt="..." style="max-width: 100px; max-height: 75px;"></a>
							</div>
							<div class="thumbnail col-md-2" style="max-width: 110px; max-height: 85px;margin: 5px">
								<a href="#" id="thum4"><img id="images3" alt="..." style="max-width: 100px; max-height: 75px;"></a>
							</div>
							<div class="thumbnail col-md-2" style="max-width: 110px; max-height: 85px;margin: 5px">
								<a href="#" id="thum5"><img id="images4" alt="..." style="max-width: 100px; max-height: 75px;"></a>
							</div>
							
							<div class="col-md-12">
							<br><br><br>
								<p id="describeGold">Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
							</div>
							<div class="col-md-12">
                            <ul class="list-inline item-details">
                                <li>Categories:
                                    <strong id="kategoriGold">
                                    </strong>
                                </li>
                            </ul>
							<ul class="list-inline item-details">
                                <li>Address:
                                    <strong id="addressGold">
                                    </strong>
                                </li>
                            </ul>
							<ul class="list-inline item-details">
                                <li>Price Range:
                                    <strong id="priceGold">
                                    </strong>
                                </li>
                            </ul>
							<table class="table">
								<thead>
									<th class="text-center">Open Day</th>
									<th class="text-center">Open Time</th>
								</thead>
								<tbody>
									<tr>
										<td>Sunday</td>
										<td id="sunGold">Closed</td>
									</tr>
									<tr>
										<td>Monday</td>
										<td id="monGold">Closed</td>
									</tr>
									<tr>
										<td>Tuesday</td>
										<td id="tueGold">Closed</td>
									</tr>
									<tr>
										<td>Wednesday</td>
										<td id="wedGold">Closed</td>
									</tr>
									<tr>
										<td>Thursday</td>
										<td id="thuGold">Closed</td>
									</tr>
									<tr>
										<td>Friday</td>
										<td id="friGold">Closed</td>
									</tr>
									<tr>
										<td>Saturday</td>
										<td id="satGold">Closed</td>
									</tr>
								</tbody>
							</table>
									<div class="panel panel-default panel-border" id="googleMapGold" style="height:400px; margin-top:7px;"></div>
							
							<ul class="list-inline item-details">
                                <li>Notes:<br>
                                    <p id="notes">
                                    </p>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	
    

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url();?>landing/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= base_url();?>landing/js/classie.js"></script>
    <script src="<?= base_url();?>landing/js/cbpAnimatedHeader.js"></script>
	<script src="<?= base_url();?>assets/js/rwd-table/js/rwd-table.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?= base_url();?>landing/js/jqBootstrapValidation.js"></script>
    <script src="<?= base_url();?>landing/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url();?>landing/js/freelancer.js"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDdhVOXWmua2h06p6RcAuch9d2bJnuOGTU"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$("#images1").hide();
			$("#images2").hide();
			$("#images3").hide();
			$("#images4").hide();
			
		  $("#thum1").on("click", function(){
			$("#mainImageGold").attr("src",$("#images").attr("src"));
		  });
		  $("#thum2").on("click", function(){
			$("#mainImageGold").attr("src",$("#images1").attr("src"));
		  });
		  $("#thum3").on("click", function(){
			$("#mainImageGold").attr("src",$("#images2").attr("src"));
		  });
		  $("#thum4").on("click", function(){
			$("#mainImageGold").attr("src",$("#images3").attr("src"));
		  });
		  $("#thum5").on("click", function(){
			$("#mainImageGold").attr("src",$("#images4").attr("src"));
		  });
		});
	
		var map;
		var mapGold;
		var myCenter=new google.maps.LatLng(-6.17367067585439,106.82676315307617);
		var markersArray = [];
		var perbesar = 13;

		function setMarker(lat,lng,title,type){
			if(lat!=null||lng!=null){
				var lokasi = new google.maps.LatLng(lat,lng);
				clearOverlays();
				
				var infowindow = new google.maps.InfoWindow({
					content: 'Latitude: ' + lat + '<br>Longitude: ' + lng
				});
				
				marker1.addListener('click', function() {
					infowindow.open(map, marker1);
				});
				
				if(type="gold"){
					var marker1 = new google.maps.Marker({
					  position: lokasi,
					  map: mapGold,
					  title: title
					});
					mapGold.setCenter(lokasi);
				}else{
					var marker1 = new google.maps.Marker({
					  position: lokasi,
					  map: map,
					  title: title
					});
					map.setCenter(lokasi);
				}
				
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
		  mapGold = new google.maps.Map(document.getElementById("googleMapGold"),mapProp);


			var marker = new google.maps.Marker({
			  position: myCenter
			  });
			markersArray.push(marker);
			marker.setMap(map);
			marker.setMap(mapGold);

		  /*google.maps.event.addListener(map, 'click', function(event) {
			clearOverlays();
			placeMarker(event.latLng);
			
		  });*/
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
		  
		}

		google.maps.event.addDomListener(window, 'load', initialize);
		//clearOverlays();
		
		google.maps.event.addDomListener(window, "resize", resizingMap());

		$('#portfolioModal1').on('show.bs.modal', function() {
		   //Must wait until the render of the modal appear, thats why we use the resizeMap and NOT resizingMap!! ;-)
		   resizeMap();
		})

		function resizeMap() {
		   if(typeof map =="undefined") return;
		   setTimeout( function(){resizingMap();} , 400);
		}

		function resizingMap() {
		   if(typeof map =="undefined") return;
		   var center = map.getCenter();
		   google.maps.event.trigger(map, "resize");
		   map.setCenter(center); 
		}
		
	</script>

</body>

</html>
