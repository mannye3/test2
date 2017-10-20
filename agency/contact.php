<?php
ini_set('display_errors', '0');         # don't show any errors...
error_reporting(E_ALL | E_STRICT);      # ...but do log them


 if($_POST["submit"]) {
    $recipient="info@schomasbiz.info";
    $subject="CONTACT MESSAGE";
   
     $name=$_POST["name"];
     $email=$_POST["email"];
    $phone=$_POST["phone"]; 
    $subject=$_POST["subject"]; 
    $message=$_POST["message"];
    
    $mailBody="Name: $name\n  Email: $email\n  subject: $subject\n  Message: $message\n  ";


    mail($recipient, $subject, $mailBody, "From: $name <$email>");



 echo "<script>alert('Thank you , your message is sent.');window.location='contact.php' </script>";

     }
     


?>












<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from html.coderexpert.com/agency/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Oct 2017 23:38:19 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SchomasBiz</title>
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet"> 
        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Icon CSS -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/icofont.css" rel="stylesheet">

        <!-- Main Style -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="assets/css/responsive.css" rel="stylesheet">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/png" href="assets/image/logo2.png">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="contact">
        <!-- start #main-site-wrapper -->
        <main id="main-site-wrapper">
            <!-- start .header-area -->
            <header class="header-area">
                <!-- start .top-area -->
                <div class="top-area bg-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="slogan">
                                    <p>We are creative agency</p>
                                </div> <!-- end .slogan -->
                            </div> <!-- end .col-** -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="quick-contacts text-right">
                                    <a href="mailto:ouragency@gmail.com"><i class="icofont icofont-envelope"></i> ouragency@gmail.com</a>
                                    <a href="tel:00896957682"><i class="icofont icofont-ui-call"></i> 00 896 957 682</a>
                                </div> <!-- end .quick-contacts -->
                            </div> <!-- end .col-** -->
                        </div> <!-- end .row -->
                    </div> <!-- end .container -->
                </div> <!-- end .top-area -->
                <!-- start .navbar-area -->
                <nav class="navbar navbar-area">
                    <div class="container valigncenter">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed bg-orange" data-toggle="collapse" data-target="#mainmenu" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">
                                <img src="assets/image/logo2.png" width="100" height="100" alt="">
                            </a>
                        </div> <!-- end .navbar-header -->

                        <!-- Collect the nav links, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="mainmenu">
                           <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a href="index.php">Home</a>
                                    
                                </li>
                                <li><a href="about.php">About </a></li>
                                <li>
                                    <a href="services.php">Services </a>
                                    
                                </li>
                                
                                <li><a href="contact.php">Contact </a></li>
                               
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav> <!-- start .navbar-area -->
            </header> <!-- end .header-area -->
            
            <!-- start section .page-header -->
            <section class="page-header valigncenter text-center">
            	<div class="container">
            		<div class="row">
            			<div class="col-xs-12">
            				<h1>Contact Us</h1>
							<ol class="breadcrumb">
								<li><a href="index.php">Home</a></li>
								<li class="active">Contact Us</li>
                            </ol> <!-- end .breadcrumb -->
                        </div> <!-- end .col-** -->
                    </div> <!-- end .row -->
                </div> <!-- end .container -->
            </section> <!-- end .page-header -->
            
            <!-- start section -->
			<section class="section-padding">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<!-- start .page-inner -->
                            <div class="page-inner">
								<div class="row">
									<div class="col-md-6 col-lg-8">
										<div class="agency-form">
											<h2>Get In Touch</h2>
											<form action="contact.php" method="post">
												<div class="form-group row">
													<div class="col-md-6">
														<input class="form-control" type="text" name="name" placeholder="Name">
													</div>
													<div class="col-md-6">
														<input class="form-control" type="email" name="email" placeholder="Email">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-6">
														<input class="form-control" type="text" name="subject" placeholder="Subject">
													</div>
													<div class="col-md-6">
														<input class="form-control" type="text" name="phone" placeholder="Phone">
													</div>
												</div>
												<div class="form-group">
													<textarea name="message" class="form-control" placeholder="Message"></textarea>
												</div>
                                                <input type="submit" name="submit" value="Send Message" class="btn bg-danger  btn-md btn-rounded btn-submit">
												
											</form>
										</div> <!-- end .agency-form -->
									</div> <!-- end .agency-contact col -->
									<div class="col-md-6 col-lg-4">
										<div class="agency-info">
											<h2>Our Information</h2>

											<div class="agency-contact-info border-darkcyan">
												<div class="agency-icon bg-orange">
													<i class="icofont icofont-envelope-open"></i>
												</div>
												<div class="agency-contact-details">
													<a href="mailto:ouragency24@gmail.com">ouragency24@gmail.com</a><br>
													<a href="mailto:amarami420@gmail.com">amarami420@gmail.com</a>
												</div>
											</div>
											<div class="agency-contact-info border-purple">
												<div class="agency-icon bg-gray">
													<i class="icofont icofont-phone"></i>
												</div>
												<div class="agency-contact-details">
													<a href="tel:0088569985583">(+88) 569 - 985 - 583</a><br>
													<a href="tel:0088569985583">(+88) 569 - 985 - 583</a>
												</div>
											</div>
											<div class="agency-contact-info border-darkpink">
												<div class="agency-icon bg-orange">
													<i class="icofont icofont-location-pin"></i>
												</div>
												<div class="agency-contact-details">
													<a href="#">9075 Buckingham Lane <br> Brownsburg, IN 46112</a>
												</div>
											</div>
										</div> <!-- end .agency-info -->
									</div> <!-- end .agency-info col -->
								</div> <!-- end .row -->
								
								<div class="row">
									<div class="col-md-12">
										<div class="agency-map border-orange">
											<div id="agencyMap"></div> <!-- end #agencyMap -->
										</div> <!-- end .agency-map -->
									</div> <!-- end .col-** -->
								</div> <!-- end .row -->
							</div> <!-- end .page-inner -->
						</div> <!-- end .col-** -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</section> <!-- end section -->

            <!-- start .footer-area -->
            <footer class="footer-area bg-gray">
                <!-- start section -->
                <section class="section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="agency-widget" id="agency_about_widget">
                                    <a href="#">
                                        <img src="assets/image/logo2.png" alt="">
                                    </a>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel ill um dolore eu feugiat nulla facilisis at vero ero set accums odio dignissim qui blandit.</p>
                                </div> <!-- end .agency-widget -->
                            </div> <!-- end .agency-widget column -->
                            <div class="col-md-3 col-sm-6">
                                <div class="agency-widget" id="agency_contact_widget">
                                    <h3 class="widget-title">Contact Us</h3>

                                    <p>
                                        <a href="mailto:ouragency@gmail.com">ouragency@gmail.com</a> <br>
                                        <a href="mailto:ouragency@gmail.com">ouragency@gmail.com</a>
                                    </p>
                                    <p>
                                        <a href="tel:0000896957682">+00 896 957 682</a>  <br>
                                        <a href="tel:0000896957682">+00 896 957 682</a>
                                    </p>
                                </div> <!-- end .agency-widget -->
                            </div> <!-- end .agency-widget column -->
                            <div class="col-md-5 col-sm-12">
                                <div class="agency-widget" id="agency_newsletter_widget">
                                    <h3 class="widget-title">Our Newsletter</h3>

                                    <div class="newsletter-form bg-orange">
                                        <form action="#" method="POST">
                                            <input type="email" name="email" placeholder="Email Here ...">
                                            <input type="submit" value="Go">
                                        </form>
                                    </div>
                                </div> <!-- end .agency-widget -->
                            </div> <!-- end .agency-widget column -->
                        </div> <!-- end .row -->
                    </div> <!-- end .container -->
                </section> <!-- end footer widget area -->
                <!-- start copyright -->
                <div class="copyright text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <p>Copyright &copy; agency, 2017. All Right Reserved</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end copyright -->
            </footer> <!-- end footer -->
        </main> <!-- end #main-site-wrapper -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/js/jquery-1.12.4.min.js"></script>
        <!-- Google Map JS -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_58aPFPp-gnwoNnldgGx8CFlSFWLoEn8"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Bootstrap JS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Theme Scripts JS -->
        <script src="assets/js/scripts.js"></script>  
    </body>

<!-- Mirrored from html.coderexpert.com/agency/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Oct 2017 23:38:19 GMT -->
</html>