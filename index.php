


<?php

if ($_POST['sub_btn']) {

	if (!$_POST['name']) {
		$error="<br/>- Please enter your name";
	}
	if (!$_POST['email']) {
		$error.="<br/>- Please enter your email";
	}
	if (!$_POST['message']) {
		$error.="<br/>- Please enter a message";
	}
	if (!$_POST['check']) {
		$error.="<br/>- Please confirm you are human";
	}
	
	if ($error) {
		$result='<div class="alert alert-danger" role="alert"><strong>Whoops, there is an error</strong>. Please correct the following: '.$error.'</div>';
	} else {
		mail("edl1155@gmail.com, donny@themissingthread.com", "Potential Client from KirkPrine.com!", "Name: ".$_POST['name']."
		Email: ".$_POST['name']."
		Message: ".$_POST['message']);
		
		{
		$result='Thanks, I\'ll be in touch shortly';
		}
	}


}

?>





<!DOCTYPE html>
<html lang="en">

<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="TIDE is a Personal Portfolio Template">
	<meta name="keywords" content="Personal, Resume, Cv, Portfolio, Personal, Developer, Designer,Personal Resume, Onepage, Clean, Modern,Programmer">
	<meta name="author" content="FAHMID AHMED CHOWDHURY">
	<!-- PAGE TITLE -->
	<title>Dr. Kirk Prine, Life Coach for Gay/Queer Men</title>
	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- FONT AWESOME CSS -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<!-- ALL GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
	<!-- MAIN STYLE CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- ANIMATE CSS -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- RESPONSIVE CSS -->
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
	<!-- START PRELOADER -->
	<div id="preloader">
		<div class="preloader_spinner"></div>
	</div>
	<!-- END PRELOADER -->
	<!-- START HOME SECTION -->
	<section id="home_page_area" class="home_page_area">
		<div data-velocity=".4" class="home_page_bg ripple paralax_bg"> </div>
		<div class="logo_menu_area">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<!--START LOGO-->
						<div class="logo">
							<a href="index.html">
								<h1><span class="color">DR KIRK PRINE</span></h1>
								<!--CHANGE LOGO TEXT-->
							</a>
						</div>
						<!--END LOGO-->
					</div>
					<div class="col-md-9">
						<!--START MOBILE MENU-->
						<div class="mobileMenu_icon">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</div>
						<div class="mobilemenu text-center">
							<ul>
								<li class="smooth-menu"><a href="#home_page_area">Home</a></li>
								<li class="smooth-menu"><a href="#about_area">About</a></li>
								<!--  <li class="smooth-menu"><a href="#services_area">Services</a></li> -->
								<li class="smooth-menu"><a href="#Portfolio_area">Video</a></li>
								<!--    <li class="smooth-menu"><a href="#testimonial_area">Testimonial</a></li> -->
								<li class="smooth-menu"><a href="#contact_area">Contact</a></li>
							</ul>
						</div>
						<!--END MOBLIE MENU -->
						<!--START MAIN MENU-->
						<div class="menu">
							<ul id="navigation">
								<li class="smooth-menu"><a href="#home_page_area">Home</a></li>
								<li class="smooth-menu"><a href="#about_area">About</a></li>
								<!--  <li class="smooth-menu"><a href="#services_area">Services</a></li> -->
								<li class="smooth-menu"><a href="#Portfolio_area">Video</a></li>
								<!--         <li class="smooth-menu"><a href="#testimonial_area">Testimonial</a> </li>
                               -->
								<li class="smooth-menu"><a href="#contact_area">Contact</a></li>
							</ul>
						</div>
						<!--END MOBILE MENU-->
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row home_page_content_area">
				<div class="col-md-12 text-center">
					<div class="homepage_content">
						<!--START HOME SECTION  TEXT-->
						<div class="homepage_content_text">
							<h2>WELCOME!  THIS IS <span class="color">DR KIRK PRINE</span></h2>
							<!--CHANGE HOME SECTION TEXT-->
							<p>I AM A BODY STORY LIFE COACH FOR GAY AND QUEER MEN</p>
							<!--CHANGE HOME SECTION TEXT-->
						</div>
						<!--END HOME SECTION  TEXT-->
						<div class="homepage_aro wow fadeOutDown" style="visibility: visible; animation-duration: 2s; animation-delay: 300ms; animation-iteration-count: infinite;">
							<a class="smooth" href="#about_area">
								<img src="assets/images/down_arrow.png" alt="">
							</a>
						</div>
						<!--END HOME SECTION  PICTURE-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END HOME SECTION -->
	<!-- START ABOUT SECTION -->
	<section id="about_area" class="about_area page_area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="page_title">
						<h2>About</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="page_content wow fadeInUp" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp; ">
					<div class="col-md-3">
						<!--START ABOUT SECTION  PICTURE-->
						<div class="about_pic">
							<img src="assets/images/kirk_photo.jpg" alt="picture of Kirk Prine">
						</div>
						<!--END ABOUT SECTION  PICTURE-->
					</div>
					<div class="col-md-9">
						<!--START ABOUT SECTION  TEXT-->
						<div class="about_content">
							<h2><strong>I am DR KIRK PRINE</strong></h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. nisipellentesque eu, pretium quis, sem. Nulla consequat massa quis enim nisi</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
						</div>
						<!--END ABOUT SECTION  TEXT-->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="about_buttons wow fadeInUp" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp; ">
					
					<div class="col-md-9">
						<!--START SOCIAL BUTTON-->
						<div class="about_social ">
							<ul>
								<li>
									<a href="https://www.facebook.com/kirk.prine"> <img src="assets/images/facebook.png" alt=""></a>
									   </li>
                                
							</ul>
						</div>
						<!--END SOCIAL BUTTON-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END ABOUT SECTION -->
	
	<!-- START PROTPHOLIO SECTION -->
	<section id="Portfolio_area" class="Portfolio_area page_area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="page_title">
						<h2>Find out more:</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="page_content wow fadeInUp" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp; ">
				
					<!--Portfolio Menu-->
					
					<ul class="folio-menu list-inline text-center">
						<li class=" fil-cat" data-rel="all">Here is what I want for you...</li>
					
					</ul>
					
					<iframe width="660" height="415" id="video" src="https://www.youtube.com/embed/q-eQ_Hv1uyg" frameborder="0" allowfullscreen></iframe>
					
					
				</div>
			</div>
		</div>
	</section>
	<!-- END PROTPHOLIO SECTION -->
	
	<!-- END PROTPHOLIO SECTION -->
	<!-- START CONTACT SECTION -->
	<section id="contact_area" class="contact_area page_area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="page_title">
						<h2>IF YOU WANT MORE, LET ME HEAR FROM YOU:</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="page_content">
					<!-- CONTACT FROM -->
					<div class="col-md-6 col-md-offset-3 col-md-offset-right-3  col-sm-10 col-sm-offset-1 col-sm-offset-right-1  col-xs-12  contact_details wow fadeInUp" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
						<div>
							<form  method="POST" role="form">
								<input type="text" class="form_controle " name="name" placeholder="Name" value="<?php echo $_POST['name']; ?>">
								<input type="text" class="form_controle " name="email" placeholder="Email" value="<?php echo $_POST['email']; ?>">
								<input type="text" class="form_controle_message" name="message" placeholder="Message"><?php echo $_POST['message']; ?>
								<input type="submit" class="form_controle_btn " name="sub_btn" value="Send">
								<label>
    							<input type="checkbox" name="check"> I am human
    						</label>
							</form>
						</div>
					</div>
					<!--END CONTACT FROM -->
				</div>
			</div>
		</div>
	</section>
	<!-- END CONTACT SECTION -->
	<!-- START FOOTER SECTION -->
	<div class="footter_area">
		<div class="container">
			<div class="row  wow fadeInUp" style="visibility: visible; animation-delay: 0.09s; animation-name: fadeInUp;">
				<div class="col-md-12 col-sm-12  col-xs-12 text-center social">
					<ul>
						<li>
							<a href=""> <img src="assets/images/facebook.png" alt=""></a>
						</li>
						
					</ul>
					<p>&copy; DR KIRK PRINE | All Right Reserved</p>
					<p><a href="mailto:kirkprine@fleshandspirit.org?Subject=I%20am%20ready" style= "color: white;" target="_top">kirkprine@fleshandspirit.org</a></p>
					<p>Telephone: 415.440.1561</p>
				</div>
			</div>
		</div>
	</div>
	<!-- END FOTTER SECTION -->
	<!--END FOOTER AREA -->
	<!-- LATEST JQUERY -->
	<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
	<!-- BOOTSTRAP JS -->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<!-- SCRIPT js -->
	<script type="text/javascript" src="assets/js/main.js"></script>
	<!-- ripples JS -->
	<script type="text/javascript" src="assets/js/jquery.ripples-min.js"></script>
	<!-- appear JS -->
	<script type="text/javascript" src="assets/js/jquery.appear.js"></script>
	<!-- WOW JS -->
	<script type="text/javascript" src="assets/js/wow.min.js"></script>
	<!-- STCICK JS -->
	<script type="text/javascript" src="assets/js/jquery.sticky.js"></script>
	<!-- PARALLAX JS -->
	<script type="text/javascript" src="assets/js/jquery.scrolly.js"></script>
	<!--SRCOLL  JS -->
	<script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
	<!--START RIGHT BUTTON DISABLE  JS -->
	<script type="text/javascript" src="assets/js/diasble_inspact_element.js"></script>
</body>

</html>