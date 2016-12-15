<?php 
/**
* Program:  contacto.php
* Objetive: Presenta algunos trabajos anteriores realizados
* Description:Este programa muestara las trabajos realizados por el sistema para lograr dar confianza
*             de la responsabilidad con que cuenta. 
* @query_string Parámetro recibido en el query string
* @post   $VarPost1: ninguna
* @get    $VarGet: ninguno
* @author   Limbert Lopez
* @called_by: index.php y varios mas
* @calls: varios
*/

$rutaLinks="frontend/assets";
$rutaTitulo="./includes";
?>
<!DOCTYPE html>
<head>
 	<?php include"$rutaTitulo/titulo.php";?>
  	<?php include"$rutaTitulo/meta.php";?>

<!-- BEGIN CORE CSS FRAMEWORK -->
<link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.theme.css" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
<script type="text/javascript" src="assets/plugins/jquery-1.8.3.min.js"></script>
</head>
<!-- END HEAD -->
<body>
<div class="main-wrapper">
<div role="navigation" class="navbar navbar-default navbar-static-top">
<div class="container">
      <div class="compressed">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand compressed"><img src="assets/img/logo_condensed.png" alt="" data-src="assets/img/logo_condensed.png" data-src-retina="assets/img/logo2x.png" width="119" height="22"/></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
			<li ><a href="../index.php">Inicio</a></li>
			<li ><a href="portafolio.php">Portfolio</a></li>
			<li ><a href="#">Contacto</a></li>
			<li ><a href="../Vista/V_Login.php">Ingresar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>
<div class="section first">
	<div class="container">
	<div class=" p-b-60">
		<div class="row">
		<div class="col-md-6 col-sm-6">		
		<h2 class="p-t-40">We would love to <span class="text-success semi-bold">hear from you</span></h2>
		<p class="">Why not drop us a line or pick up the phone and give us a shout. Our team would love to talk to you and find ways of Making Business Easy.</p>
		</div>
		</div>
		<div class="row p-t-30">
			<div class="col-md-6 col-sm-6">
			<div class="row form-row">
                      <div class="col-md-10">
                        <input name="textFirstName" id="textFirstName" type="text" class="form-control " placeholder="First Name">
                      </div>
            </div>
			<div class="row form-row">
                      <div class="col-md-10">
                        <input name="txtLastName" id="txtLastName" type="text" class="form-control" placeholder="Last Name">
                      </div>
            </div>
			<div class="row form-row">
                      <div class="col-md-10">
                        <input name="txtCompany" id="txtCompany" type="text" class="form-control" placeholder="Company/Orgarnization">
                      </div>
            </div>
			<div class="row form-row">
                      <div class="col-md-10">
                        <input name="txtEmailAddress" id="txtEmailAddress" type="text" class="form-control" placeholder="Email address">
                      </div>
            </div>
			<div class="row form-row">
                      <div class="col-md-10">
						<textarea id="txtDesc" type="text" class="form-control" placeholder="Message" rows="8">
						
						</textarea>
                      </div>
            </div>	
			<div class="row form-row">
				 <div class="col-md-10">
				<button type="button" class="btn btn-primary btn-cons">Send</button>
				</div>
			</div>
			</div>
			<div class="col-md-6 feature-list">
				<h4 class="title custom-font text-black no-margin p-b-10">TELEPHONE</h4>
				<p class="no-margin"><i class="fa fa-phone fa-lg p-r-10 "></i> New York</p>
				<h2 class="custom-font text-black no-margin p-l-20">0161 418 2758</h2>
				<p class="no-margin"><i class="fa fa-phone fa-lg  p-r-10"></i> Italy</p>
				<h2 class="custom-font text-black no-margin p-l-20 ">0232 452 2755</h2>
				<section class="p-t-20 p-b-20">
					<h4 class="title custom-font text-black">ADDRESS</h4>
					<address>
					  Revox
					  Crossraid, 85/B Cross Street,<br>
					  New York, USA<br>
					  NA1 42SL
					</address>
				</section>
				<section>
					<h4 class="title custom-font text-black">BUSINESS HOURS</h4>
					<p>
					Monday - Friday 8am to 4pm<br>
					Saturday - 7am to 6pm<br>
					Sunday- Closed<br>
					</p>
				</section>
			</div>
		</div>
	</div>
	</div>	
	
</div>
<div class="section white" style="height:350px" id="map">

</div>
<div class="section white">
		<div class="container">
			<div class="p-t-60 p-b-50">
			  <div id="testomonials" class="owl-carousel row">
				<div class="item">
					<div class="col-md-6   col-md-offset-3">
						<h3 class="normal text-center">
						I’m really happy that webarch is able to offer 
support specifically tailored to creative businesses and I’d love Nottingham to become renowned for this.
						</h3>
						<p class="text-center">Caroline Hennigan, Programme Director, Broadway</p>
					</div>
				</div>
				<div class="item">
					<div class="col-md-6   col-md-offset-3">
						<h3 class="normal text-center">
						I’m really happy that webarch is able to offer 
support specifically tailored to creative businesses and I’d love Nottingham to become renowned for this.
						</h3>
						<p class="text-center">Caroline Hennigan, Programme Director, Broadway</p>
					</div>
				</div>
				<div class="item">
					<div class="col-md-6   col-md-offset-3">
						<h3 class="semi-bold text-center">
						I’m really happy that webarch is able to offer 
support specifically tailored to creative businesses and I’d love Nottingham to become renowned for this.
						</h3>
						<p class="text-center">Caroline Hennigan, Programme Director, Broadway</p>
					</div>
				</div>
		</div>
	</div>
	</div>
</div>
<div class="section black">
		<div class="container">
			<div class="p-t-60 p-b-60">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="text-center text-white m-b-30">Would you like to sign up for our <span class="semi-bold">programme?</span> 
Register your interest below</h2>
					<div class="row form-row">
                      <div class="col-md-6 col-md-offset-2 no-padding  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <input name="form3Occupation" id="form3Occupation" type="text" class="form-control " placeholder="Enter your email addres">
                      </div>
					  <div class="col-md-4 col-sm-4 col-xs-4 xs-p-l-10">
						<button type="button" class="btn btn-primary btn-cons">Subscribe</button>
					  </div>	
                    </div>
					<div class="row">
						<a href="#" class="text-white text-center col-md-11 col-sm-11 col-xs-11">or suscribte to newsletter</a>
					</div>
					<div class="clearfix"></div>
					<div class="row m-t-30">
						<div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2">
						<div class="checkbox check-default">
						  <input id="checkbox1" type="checkbox" value="1">
						  <label for="checkbox1">Daily newsletters</label>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="checkbox check-default">
						  <input id="checkbox2" type="checkbox" value="1">
						  <label for="checkbox2">No promotions</label>
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2">
						<div class="checkbox check-default">
						  <input id="checkbox3" type="checkbox" value="1">
						  <label for="checkbox3">Industry specific events</label>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="checkbox check-default">
						  <input id="checkbox4" type="checkbox" value="1">
						  <label for="checkbox4">Accessing News letters</label>
						</div>
						</div>
					</div>
					</div>					
				</div>
				
			</div>
		</div>
</div>
<div class="section white footer">
		<div class="container">
			<div class="p-t-30 p-b-50">
				<div class="row">
					<div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 xs-m-b-20">
					<img src="assets/img/logo_condensed.png" alt="" data-src="assets/img/logo_condensed.png" data-src-retina="assets/img/logo2x.png" width="119" height="22"/>
					</div>
					<div class="col-md-4 col-lg-3 col-sm-4  col-xs-12 xs-m-b-20">
						<address class="xs-no-padding  col-md-6 col-lg-6 col-sm-6  col-xs-12">	
							Crossraid<br>
							85/B Cross Street,<br>
							New York, USA<br>
							NA1 42SL
						</address>
						<div class="xs-no-padding col-md-6 col-lg-6 col-sm-6">
							<div>(0039) 389 957 5552</div>
							support@revox.io
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-2 col-lg-2 col-sm-2  col-xs-12 xs-m-b-20">
						Copyright © 2013
						Privacy Policy
						Design by Revox
					</div>
					<div class="col-md-2 col-lg-2 col-sm-2  col-xs-12 xs-m-b-20">
					<div class="bold">RECRUITMENT</div>
					We are frequently on the lookout for new talent!
					</div>
					<div class="col-md-2 col-lg-2 col-sm-2  col-xs-12 ">
					<div class="bold">FOLLOW US</div>
					We are frequently on the lookout for new talent!
					</div>
				</div>
			</div>
		</div>
</div>
</div>

<!-- BEGIN CORE JS FRAMEWORK --> 	
<script type="text/javascript" src="assets/plugins/jquery-1.8.3.min.js"></script>	
<script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK --> 

<!-- BEGIN JS PLUGIN --> 
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/jquery-nicescroll/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="assets/plugins/jquery-gmap/gmaps.js" type="text/javascript"></script> 	
<!-- END JS PLUGIN --> 
<script src="assets/js/google_maps.js" type="text/javascript"></script> 

<script type="text/javascript" src="assets/js/core.js"></script>
</body>