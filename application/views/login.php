<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title>Food Spots</title>

	<link rel="icon" href="<?= base_url();?>assets/images/icon.png" type="image/x-icon"/>
	<link rel="shortcut icon" href="<?= base_url();?>assets/images/icon.png" type="image/x-icon"/>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/xenon-core.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/xenon-forms.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/xenon-components.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/xenon-skins.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/custom.css">

	<script src="<?= base_url();?>assets/js/jquery-1.11.1.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body login-page login-light">

	
	<div class="login-container">
	
		<div class="row">
		
			<div class="col-sm-6">
			
				<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						// Reveal Login form
						setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);
						
						
						// Validation and Ajax action
						$("form#login").validate({
							rules: {
								username: {
									required: true
								},
								
								passwd: {
									required: true
								}
							},
							
							messages: {
								username: {
									required: 'Please enter your username.'
								},
								
								passwd: {
									required: 'Please enter your password.'
								}
							},
							
							// Form Processing via AJAX
							// submitHandler: function(form)
							// {
							// 	show_loading_bar(70); // Fill progress bar to 70% (just a given value)
								
							// 	var opts = {
							// 		"closeButton": true,
							// 		"debug": false,
							// 		"positionClass": "toast-top-full-width",
							// 		"onclick": null,
							// 		"showDuration": "300",
							// 		"hideDuration": "1000",
							// 		"timeOut": "5000",
							// 		"extendedTimeOut": "1000",
							// 		"showEasing": "swing",
							// 		"hideEasing": "linear",
							// 		"showMethod": "fadeIn",
							// 		"hideMethod": "fadeOut"
							// 	};
									
							// 	$.ajax({
							// 		url: "data/login-check.php",
							// 		method: 'POST',
							// 		dataType: 'json',
							// 		data: {
							// 			do_login: true,
							// 			username: $(form).find('#username').val(),
							// 			passwd: $(form).find('#passwd').val(),
							// 		},
							// 		success: function(resp)
							// 		{
							// 			show_loading_bar({
							// 				delay: .5,
							// 				pct: 100,
							// 				finish: function(){
												
							// 					// Redirect after successful login page (when progress bar reaches 100%)
							// 					if(resp.accessGranted)
							// 					{
							// 						window.location.href = '<?= base_url();?>';
							// 					}
							// 															}
							// 			});
										
																			
							// 			// Remove any alert
							// 			$(".errors-container .alert").slideUp('fast');
										
										
							// 			// Show errors
							// 			if(resp.accessGranted == false)
							// 			{
							// 				$(".errors-container").html('<div class="alert alert-danger">\
							// 					<button type="button" class="close" data-dismiss="alert">\
							// 						<span aria-hidden="true">&times;</span>\
							// 						<span class="sr-only">Close</span>\
							// 					</button>\
							// 					' + resp.errors + '\
							// 				</div>');
											
											
							// 				$(".errors-container .alert").hide().slideDown();
							// 				$(form).find('#passwd').select();
							// 			}
							// 											}
							// 	});
								
							// }
						});
						
						// Set Form focus
						$("form#login .form-group:has(.form-control):first .form-control").focus();
					});
				</script>
				
				<!-- Errors container -->
				<div class="errors-container">
				
									
				</div>
				
				<!-- Add class "fade-in-effect" for login form effect -->
				<form method="post" role="form" class="login-form fade-in-effect" action="<?= base_url();?>index.php/foodspot/login">
					
					<div class="login-header">
						<a href="<?= base_url();?>" class="logo">
							<img src="<?= base_url();?>assets/images/logo@2x.png" alt="" width="150" />
							<span>log in</span>
						</a>
						
						<p>Dear user, log in to access the admin area!</p>
					</div>
	
					
					<div class="form-group">
						<label class="control-label" for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username" autocomplete="off" />
					</div>
					
					<div class="form-group">
						<label class="control-label" for="passwd">Password</label>
						<input type="password" class="form-control" name="password" id="passwd" autocomplete="off" />
					</div>
					
					<div class="form-group">
						<button class="btn btn-primary  btn-block text-left" name="login">
							<i class="fa-lock"></i>
							Log In
						</button>
					</div>
					
					<div class="login-footer">
						
						
					</div>
					
				</form>
				
				<!-- External login -->
				
				
			</div>
			
		</div>
		
	</div>



	<!-- Bottom Scripts -->
	<script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url();?>assets/js/TweenMax.min.js"></script>
	<script src="<?= base_url();?>assets/js/resizeable.js"></script>
	<script src="<?= base_url();?>assets/js/joinable.js"></script>
	<script src="<?= base_url();?>assets/js/xenon-api.js"></script>
	<script src="<?= base_url();?>assets/js/xenon-toggles.js"></script>
	<script src="<?= base_url();?>assets/js/jquery-validate/jquery.validate.min.js"></script>
	<script src="<?= base_url();?>assets/js/toastr/toastr.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="<?= base_url();?>assets/js/xenon-custom.js"></script>

</body>
</html>