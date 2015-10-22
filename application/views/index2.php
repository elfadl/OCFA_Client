<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Foodspoots</title>

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
                <a class="navbar-brand" href="#page-top">FoodSpots</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Description</a>
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
					<li>
                        <a href="<?= base_url();?>index.php/page/member">Sign In</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="<?= base_url();?>landing/img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">FoodSpots</span>
                        <hr class="star-light">
                        <span class="skills"><?=$this->db->where("name","welcome")->get("t_settings")->row()->value; ?></span>
                    </div>
					<div class="col-lg-6 text-right">
						<a href="<?=$this->db->where("name","android")->get("t_settings")->row()->value; ?>" class="btn btn-lg btn-outline">
							<i class="fa fa-android"></i> Download Android Apps
						</a>
					</div>
					<div class="col-lg-6 text-left">
						<a href="<?=$this->db->where("name","ios")->get("t_settings")->row()->value; ?>" class="btn btn-lg btn-outline">
							<i class="fa fa-apple"></i> Download iOS Apps
						</a>
					</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>App Description</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p><?=$this->db->where("name","description")->get("t_settings")->row()->value; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p><?=$this->db->where("name","about")->get("t_settings")->row()->value; ?></p>
                </div>
                <!-- <div class="col-lg-4">
                    <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center" id="contact">
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

    <!-- jQuery -->
    <script src="<?= base_url();?>landing/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url();?>landing/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?= base_url();?>landing/js/classie.js"></script>
    <script src="<?= base_url();?>landing/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?= base_url();?>landing/js/jqBootstrapValidation.js"></script>
    <script src="<?= base_url();?>landing/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url();?>landing/js/freelancer.js"></script>

</body>

</html>
