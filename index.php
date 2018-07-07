<?php
if(isset($_SESSION['id']))
{
  header("Location: home.php");
  exit();
}
if(isset($_COOKIE['A']) && isset($_COOKIE['B']))
   {
    include('php/db.php');
    include('php/class.php');
    $q->cookie_login($_COOKIE['A'],$_COOKIE['B']);
   }

?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		
		<link rel="icon" href="beeImage/beeLogo1.png">

		<title>bee</title>

                <link href="assets/css/bootstrap_2.css" rel="stylesheet">

                <link href="assets/css/cover.css" rel="stylesheet">

		
		<style>
			#btn-env:hover {
				color: #10ad9d;
			}
			
			#btn-env {
				color: #0bb320;
			}
		</style>

	</head>

	<body onload="load();">
		<div class="modal fade" id="notice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h3 class="modal-title" id="myModalLabel" style="color: rgb(172, 19, 19);">IMPORTANT THINGS NEED TO KNOW</h3>
					</div>
					<div class="modal-body">

						<div class="row">
							<div class="col-md-12">
								<h4 class="alert alert-danger">
                            You can not change your primary email after signing up. So please provide a working email id of you.
                            </h4>

								<h4 class="alert alert-info">
                            It is our request to you to provide <b>your name </b>correctly and check it before submitting.<br>
                            Remember you never can change your name after this signing up process as it is your identity.
                            </h4>
							</div>

						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div class="site-wrapper">

			<div class="site-wrapper-inner">

				<div class="cover-container">

					<div class="masthead clearfix">
						<div class="inner">
                                                    <h3 class="masthead-brand"><a href="index.php" style="color: #ffffff;">bee</a></h3>
							<nav>
								<ul class="nav masthead-nav">
									<li onclick="signup();" id="btnsign"><a>Sign Up</a></li>
									<li onclick="login();" id="btnlog"><a>Log In</a></li>
								
								</ul>
							</nav>
						</div>
					</div>

					<div class="inner cover bar" id="signup" style="font-size: larger;">
						<div id="success"></div>
						<img src="img/loader.gif" id="loader" height="25%" style="position: fixed;margin: 0 auto;z-index: 400;">


						<form class="form-horizontal" method="post" action="php/signup.php" id="sign_up_form">
							<br>
							<h1 class="cover-heading">Create Account
                   
                  </h1>
							<div class="form-group">

								<div class="col-sm-12">
									<input type="email" onblur="check_email();" autocomplete="off" class="form-control" value="<?php if(isset($_POST['signupEmail'])) echo $_POST['signupEmail']; ?>" id="signupEmail" name="signupEmail" placeholder="  Type your working Email..." required>
									<span id="email-info"></span>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-6">
									<input type="text" class="form-control" autocomplete="off" id="firstname" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>" name="firstname" placeholder="  First Name" required>
								</div>
								
								<div class="col-sm-6">
									<input type="text" class="form-control" autocomplete="off" id="lastname" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>" name="lastname" placeholder="  Last Name">
								</div>
							</div>
							<div class="form-group">
								<label for="inputSex" class="col-sm-2 control-label">I am</label>
								<div class="col-sm-4">
									<label class="radio-inline">
										<input type="radio" name="sex" id="sex1" value="male" required> <b>Boy</b>
									</label>
									<label class="radio-inline">
										<input type="radio" name="sex" id="sex2" value="female" checked="checked" required> <b>Girl</b>
									</label>
								</div>
							</div>

							<div class="form-group">

								<div class="col-sm-6">
									<input type="password" class="form-control" id="password1" name="password" placeholder="Password" required>
								</div>
								<div class="col-sm-6">
									<input type="password" class="form-control" id="password2" placeholder="Confirm Password" required>
								</div>
								<span id="password-info"></span>
							</div>

							<button type="submit" class="btn btn-primary" value="Sign Up" id="signUpBtn" data-toggle="tooltip" data-placement="left" title="Click here to sign up"><span class="glyphicon glyphicon-plus"></span> Sign Up </button>

						</form>
						<br>
					</div>
					<div class="inner cover bar" id="login" style="font-size: larger">
						<br>
						<h1 class="cover-heading">Sign In</h1>
						<form class="form-horizontal" method="post" id="login_form">
							<div class="form-group">

								<div class="col-sm-12">
									<input type="email" class="form-control" autocomplete="off" id="loginEmail" name="loginEmail" placeholder="Email that you have used in the sign up process.." required>
								</div>

							</div>
							<div class="form-group">

								<div class="col-sm-12">
									<input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Password" required>
								</div>
								<span id="pass_err"></span>
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="special_key"> Keep me logged in
										</label>
									</div>
								</div>
							</div>
							<button type="submit" id="loginBtn" class="btn btn-primary" value="Log in">Log in <span class="glyphicon glyphicon-user"></span></button>
							<br>

						</form>
						<br>

					</div>


				</div>

			</div>

		</div>

		<!-- Bootstrap core JavaScript
    ================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
                <script src="assets/js/jquery.js"></script>
                <script src="assets/js/bootstrap.min.js"></script>
		<script>
			var loader = $('#loader');
			loader.hide();
			var signupdiv = $('#signup');
			var logindiv = $('#login');
			var aboutdiv = $('#about');

			function signup() {
				logindiv.hide();
				aboutdiv.hide();
				signupdiv.slideToggle("slow");
				$('#btnsign').addClass("active");
				$('#btnabout').removeClass('active');
				$('#btnlog').removeClass("active");
			}

			function login() {
				signupdiv.hide();
				aboutdiv.hide();
				logindiv.slideToggle("slow");
				$('#btnlog').addClass("active");
				$('#btnabout').removeClass('active');
				$('#btnsign').removeClass("active");
			}

			function about() {
				logindiv.hide();
				signupdiv.hide();
				aboutdiv.slideToggle("slow");
				$('#btnsign').removeClass("active");
				$('#btnlog').removeClass("active");
				$('#btnabout').addClass('active');

			}

			function load() {
				logindiv.hide();
				aboutdiv.hide();
				$('#btnsign').addClass("active");

			}

			function check_email() {

				$('#email-info').html('Loading...');
				var email = $('#signupEmail').val();
				email = $.trim(email);
				if (email == '') {
					$('#email-info').html('<span class="bg-info" style="color:black; padding:3px;">Please provide your email id</span>');
					return false;
				} else {
					$.post('php/email_check.php', {
						'signupEmail': email
					}, function(data) {
						$('#email-info').html(data);
					});
					return true;
				}
			}

			$('#signUpBtn').click(function() {
				check_email();
				var p = $('#password1').val();
				var cp = $('#password2').val();
				if (p == '' || cp == '') {
					$('#password-info').html('Please provide a password');
				} else {
					if (p == cp && check_email()) {
						//sing up
						loader.show();
						var d = $('#sign_up_form').serialize();
						$.ajax({
							url: "php/signup.php",
							method: "POST",
							data: d,
							success: function(data) {
								$('#sign_up_form').hide();
								$('#success').show();
								$('#success').html('<h1 style="color:#78ffee;">' + data + '</h1>');
							},
							error: function() {
								alert('There is some problem we are facing.');
							},
							complete: function() {
								loader.hide();
							}
						});
					} else {
						$('#password-info').html('<b>Password did not matched. Please try again.</b>');
					}
				}
				return false;
			});

			$('#loginBtn').click(function() {
				var logdata = $('#login_form').serialize();

				$.ajax({
					url: 'php/login.php',
					method: "post",
					data: logdata,
					success: function(data) {
						$('#pass_err').html(data);
					},
					error: function() {
						alert('There is some problem we are facing.');
					},
					complete: function() {}
				});
				return false;
			});


			$(function() {
				$('[data-toggle="tooltip"]').tooltip();
			});

			$(function() {
				$('[data-toggle="popover"]').popover();
			});
		</script>
	</body>

	</html>