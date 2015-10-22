<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Foodspots</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?= base_url();?>landing/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url();?>landing/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url();?>landing/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
					<li>
                        <a href="<?= base_url();?>index.php/page/foodspotsList">FoodSpots List</a>
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
                    <h2>Register Your Food Spot</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
				<div class="col-md-12">
					<div class="col-lg-8 col-lg-offset-2">
						<table class="table table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th><h4>Free Member</h4></th>
                                    <th><h4>Gold Member</h4></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th width="40%"><h5>Restaurant Name</h5></th>
                                    <td><h5><i class="fa fa-check" style="color:green;"></i></h5></td>
                                    <td><h5><i class="fa fa-check" style="color:green;"></i></h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Address</h5></td>
                                    <td><h5><i class="fa fa-check" style="color:green;"></i></h5></td>
                                    <td><h5><i class="fa fa-check" style="color:green;"></i></h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Category</h5></td>
                                    <td><h5><i class="fa fa-check" style="color:green;"></h5></td>
                                    <td><h5><i class="fa fa-check" style="color:green;"></i></h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Phone Number</h5></td>
                                    <td><h5><i class="fa fa-check" style="color:green;"></h5></td>
                                    <td><h5><i class="fa fa-check" style="color:green;"></i></h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Price Range</h5></td>
                                    <td><h5><i class="fa fa-check" style="color:green;"></h5></td>
                                    <td><h5><i class="fa fa-check" style="color:green;"></i></h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Location</h5></td>
                                    <td><h5><i class="fa fa-check" style="color:green;"></h5></td>
                                    <td><h5><i class="fa fa-check" style="color:green;"></i></h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Photo</h5></td>
                                    <td><h5><i style="color:red;">1</i></h5></td>
                                    <td><h5><i  style="color:green;">5</i></h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Opening Hours</h5></td>
                                    <td><h5><i class="fa fa-check" style="color:green;"></i></h5></td>
                                    <td><h5><i class="fa fa-check" style="color:green;"></i></h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Website Info</h5></td>
                                    <td><h5><i class="fa fa-times" style="color:red;"></i></h5></td>
                                    <td><h5><i class="fa fa-check" style="color:green;"></i></h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Menu Photo / List</h5></td>
                                    <td><h5><i class="fa fa-times" style="color:red;"></i></h5></td>
                                    <td><h5><i class="fa fa-check" style="color:green;"></i></h5></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <td>
                                        <h4>Rp 0,-</h4>
                                        
                                        <a href="<?= base_url();?>index.php/page/MemberReg?membertype=free"><button class="btn btn-sm btn-success"><h5>Register for free</h5></button></a>
                                            <!-- <input type="hidden" name="membertype" value="Free Member"> -->
                                        
                                        
                                    </td>
                                    <td>
                                        <h4>Rp 10.000,- / month</h4>
                                        <a href="<?= base_url();?>index.php/page/MemberReg?membertype=gold"><button class="btn btn-sm btn-info"><h5>Register now</h5></button></a>
                                    </td>
                                </tr>    
                            </tfoot>
						</table>
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
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Freelancer</h3>
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2014
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
    
    <!-- jQuery -->
    <script src="<?= base_url();?>landing/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url();?>landing/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?= base_url();?>landing/js/classie.js"></script>
    <script src="<?= base_url();?>landing/js/cbpAnimatedHeader.js"></script>
	<script src="<?= base_url();?>assets/js/rwd-table/js/rwd-table.min.js"></script>
	<script src="<?= base_url();?>assets/js/ckeditor/adapters/jquery.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?= base_url();?>landing/js/jqBootstrapValidation.js"></script>
    <script src="<?= base_url();?>landing/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url();?>landing/js/freelancer.js"></script>

</body>

</html>
