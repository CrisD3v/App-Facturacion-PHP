<?php
    include './Modelo/Star_Sessions/inicio.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--BOOSTRAP ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
     <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/Vista/IMG/PROYECTO/logo_small_icon_only.png" />
     <!-- bootstrap.min css -->
    <link rel="stylesheet" href="/Vista/PLUGINS/bootstrap/bootstrap.min.css">
     <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/Vista/PLUGINS/revo-slider/css/settings.css">
     <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="/Vista/PLUGINS/revo-slider/css/layers.css">
     <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="/Vista/PLUGINS/revo-slider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="/Vista/PLUGINS/revo-slider/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/Vista/PLUGINS/revo-slider/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/Vista/PLUGINS/revo-slider/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/Vista/PLUGINS/revo-slider/css/navigation.css">
     <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="/Vista/PLUGINS/themefisher-font/style.css">
     <!-- Lightbox.min css -->
    <link rel="stylesheet" href="/Vista/PLUGINS/lightbox2/dist/css/lightbox.min.css">
     <!-- Slick Carousel -->
    <link rel="stylesheet" href="/Vista/PLUGINS/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="/Vista/PLUGINS/slick-carousel/slick/slick-theme.css">
     <!--CSS-->
    <link rel="stylesheet" href="/Vista/CSS/style.css">
     <!--BOOSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>INVOICE</title>
</head>
<body>


        <!--
Start Preloader
==================================== -->
<div id="preloader">
    <div class="preloader">
      <div class="sk-circle1 sk-child"></div>
      <div class="sk-circle2 sk-child"></div>
      <div class="sk-circle3 sk-child"></div>
      <div class="sk-circle4 sk-child"></div>
      <div class="sk-circle5 sk-child"></div>
      <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
      <div class="sk-circle8 sk-child"></div>
      <div class="sk-circle9 sk-child"></div>
      <div class="sk-circle10 sk-child"></div>
      <div class="sk-circle11 sk-child"></div>
      <div class="sk-circle12 sk-child"></div>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->
  





    <!--NAVBAR CODE-->
    <section class="header navigation fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img src="/Vista/IMG/PROYECTO/logo_small.png" height="35" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="tf-ion-android-menu"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="/index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/Vista/PHP/about.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Instructions</a>
                                </li>
                                <?php if(!empty($user)): ?>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <?= $user['User']; ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/Vista/PHP/login.php">Dashboard</a>
                                        <a class="dropdown-item" href="/Controlador/Login/logout.php">Logout</a>
                                    </div>
                                </li>
                                <?php else: ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Start
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/Vista/PHP/login.php">Login</a>
                                        <a class="dropdown-item" href="/Vista/PHP/register.php">Sing Up</a>
                                    </div>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--WELCOME SLIDER-->
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="video-player">
                        <img class="img-fluid rounded w-100" src="/Vista/IMG/PROYECTO/undraw_add_information_j2wg.svg" alt="">
                            <i class="tf-ion-play" data-video="https://www.youtube.com/embed/g3-VxLQO7do?autoplay=1"></i>
                        </a>
                    </div>
                </div>
                <?php if(!empty($user)): ?>
                    <div class="col-lg-6">
                    <div class="block">
                        <h2>Bienvenido <?= $user['User']; ?></h2>
                        <p>Invoice es una app web la cual se desarrolla con el fin de ayudar a las personas con su inventario de productos y facturación de ventas de manera rápida y sin inconvenientes, ya que no habrán perdidas en el inventario haciendo de este sistema algo seguro.</p>
                        <ul class="list-inline wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".7s">
                            <li class="list-inline-item">
                                <a href="./Vista/PHP/register.php" target="_blank" class="btn btn-main text-light">COMENZAR AHORA</a>		
                            </li>
                        </ul>
                    </div>
                </div>
                <?php else: ?>
                <div class="col-lg-6">
                    <div class="block">
                        <h2>Bienvenidos Usuarios</h2>
                        <p>Invoice es una app web la cual se desarrolla con el fin de ayudar a las personas con su inventario de productos y facturación de ventas de manera rápida y sin inconvenientes, ya que no habrán perdidas en el inventario haciendo de este sistema algo seguro.</p>
                        <ul class="list-inline wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".7s">
                            <li class="list-inline-item">
                                <a href="./Vista/PHP/register.php" class="btn btn-main text-light">COMENZAR AHORA</a>		
                            </li>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!--PRINCIPAL SECTION-->
    <section class="services section-xs" id="services">
        <div class="container">
            <div class="row">
                <!-- Single Service Item -->
                <div class="col-md-4 col-sm-6" >
                    <div class="service-block color-bg text-center">
                        <div class="service-icon text-center">
                            <i class="bi bi-receipt-cutoff"></i>
                        </div>
                        <h3>Facturación</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </div>
                <!-- End Single Service Item -->
                
                <!-- Single Service Item -->
                <div class="col-md-4 col-sm-6" >
                    <div class="service-block text-center">
                        <div class="service-icon text-center">
                            <i class="bi bi-grid-1x2"></i>
                        </div>
                        <h3>Inventario</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </div>
                <!-- End Single Service Item -->
                
                <!-- Single Service Item -->
                <div class="col-md-4 col-sm-6 mx-auto"  >
                    <div class="service-block color-bg text-center">
                        <div class="service-icon text-center">
                            <i class="bi bi-piggy-bank"></i>
                        </div>
                        <h3>Ganancias</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </div>
            </div> 		<!-- End row -->
        </div>   	<!-- End container -->
    </section>   <!-- End section -->
                
                
                
    
    <section class="about section-sm" id="about">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-5">
                    <img src="/Vista/IMG/PROYECTO/undraw_pitching_re_fpgk.svg" class="img-fluid rounded  w-100" alt="about-img">
                </div>
                <div class="col-md-5">
                    <div class="content">
                        <h2>Almacena Productos<br> Seguro</h2>
                        <p>Curabitur felis nibh, imperdiet eu erat non, luctus cursus lectus. Donec maximus diam leo, sed fringilla nisl
                            auctor eget. Donec dictum neque est, ac faucibus ex blandit a
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quo minima ab aperiam molestiae natus
                            repellendus neque culpa iure, nemo veritatis explicabo facilis, officia, saepe! Et corrupti odit, non deserunt.
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 order-md-1 order-2">
                    <div class="content">
                        <h2>Observa Todas Tus <br> Ganancias</h2>
                        <p>Curabitur felis nibh, imperdiet eu erat non, luctus cursus lectus. Donec maximus diam leo, sed fringilla nisl
                            auctor eget. Donec dictum neque est, ac faucibus ex blandit a
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quo minima ab aperiam molestiae natus
                            repellendus neque culpa iure, nemo veritatis explicabo facilis, officia, saepe! Et corrupti odit, non deserunt.
                    </div>
                </div>
                <div class="col-md-5 order-md-2 order-1">
                    <img src="/Vista/IMG/PROYECTO/example-27.svg" class="img-fluid rounded w-100" alt="">
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->
    
    <!-- Start Our Team
=========================================== -->
<section class="team section bg-gray" id="team">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title text-center">
					<h4>MIEMBROS DE EQUIPO</h4>
					<h2>Nuestro Team.</h2>
					<span class="border"></span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque sit!</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- team member -->
			<div class="col-lg-3 col-sm-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-fluid" src="images/team/member-1.jpg" alt="team people">
						<!-- /member photo -->
					</div>
					<!-- member name & designation -->
					<div class="member-content">
						<h3>Cristian Londoño</h3>
						<span>Head Of Marketing</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#" style="text-decoration: none;">
									<i class="tf-ion-social-facebook"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" style="text-decoration: none;">
									<i class="tf-ion-social-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" style="text-decoration: none;">
									<i class="tf-ion-social-google-outline"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" style="text-decoration: none;">
									<i class="tf-ion-social-dribbble"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- /member name & designation -->
				</div>
			</div>
			<!-- end team member -->

			<!-- team member -->
			<div class="col-lg-3 col-sm-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-fluid" src="images/team/member-2.jpg" alt="team people">
						<!-- /member photo -->
					</div>
					<!-- member name & designation -->
					<div class="member-content">
						<h3>Lorem ipsum dolor sit.</h3>
						<span>Web Developer</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#" style="text-decoration: none;">
									<i class="tf-ion-social-facebook"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" style="text-decoration: none;">
									<i class="tf-ion-social-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" style="text-decoration: none;">
									<i class="tf-ion-social-google-outline"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" style="text-decoration: none;">
									<i class="tf-ion-social-dribbble"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- /member name & designation -->
				</div>
			</div>
			<!-- end team member -->

			<!-- team member -->
			<div class="col-lg-3 col-sm-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-fluid" src="images/team/member-3.jpg" alt="team people">
						<!-- /member photo -->

					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3>Lorem ipsum dolor sit.</h3>
						<span>Head Of Management</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#" style="text-decoration: none;">
									<i class="tf-ion-social-facebook"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" style="text-decoration: none;">
									<i class="tf-ion-social-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" style="text-decoration: none;">
									<i class="tf-ion-social-google-outline"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" style="text-decoration: none;">
									<i class="tf-ion-social-dribbble"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- /member name & designation -->
				</div>
			</div>
			<!-- end team member -->
			<!-- team member -->
			<div class="col-lg-3 col-sm-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-fluid" src="images/team/member-4.jpg" alt="team people">
						<!-- /member photo -->
					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3>Lorem ipsum dolor sit.</h3>
						<span>Head Of Management</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#" style="text-decoration: none;">
									<i class="tf-ion-social-facebook"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" style="text-decoration: none;">
									<i class="tf-ion-social-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" style="text-decoration: none;">
									<i class="tf-ion-social-google-outline"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" style="text-decoration: none;">
									<i class="tf-ion-social-dribbble"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- /member name & designation -->
				</div>
			</div>
			<!-- end team member -->
		</div>
		<!-- End row -->
	</div>
	<!-- End container -->
</section>
<!-- End section -->

    <!--START FOOTER-->
    <footer id="footer" class="bg-one">
        <div class="top-footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <h3>About</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore asperiores repellat iure magnam voluptas excepturi tempore aliquam consectetur cupiditate odit eius error laudantium officiis aperiam, architecto voluptates ipsum vel enim.</p>
              </div>
              <!-- End of .col-sm-3 -->
      
              <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <h3>Our Services</h3>
                <ul>
                  <li><a href="#" style="text-decoration: none;">Apps Design</a></li>
                  <li><a href="#" style="text-decoration: none;">Web Design</a></li>
                  <li><a href="#" style="text-decoration: none;">Web Development</a></li>
                </ul>
              </div>
              <!-- End of .col-sm-3 -->
      
              <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <h3>Quick Links</h3>
                <ul>
                  <li><a href="#" style="text-decoration: none;">Partners</a></li>
                  <li><a href="#" style="text-decoration: none;">About</a></li>
                  <li><a href="#" style="text-decoration: none;">FAQ’s</a></li>
                  <li><a href="#" style="text-decoration: none;">Badges</a></li>
                </ul>
              </div>
              <!-- End of .col-sm-3 -->
      
              <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <h3>Subscribe Now</h3>
                <form class="subscribe-form">
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <button type="submit" class="btn btn-main-sm">Subscribe Now</button>
                </form>
              </div>
              <!-- End of .col-sm-3 -->
      
            </div>
          </div> <!-- end container -->
        </div>
        <div class="footer-bottom">
          <h5>Copyright 2021. All rights reserved.</h5>
          <h6>Design and Developed by <a href="#" target="_blank" style="text-decoration: none;">Avanza Software</a></h6>
        </div>
      </footer> <!-- end footer -->
      <!-- end Footer Area-->
        <!--================-->
            <!--Essential Scripts
=====================================-->
<!-- Main jQuery -->
<script src="/Vista/PLUGINS/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/Vista/PLUGINS/bootstrap/bootstrap.min.js"></script>
<!-- Parallax -->
<script src="/Vista/PLUGINS/parallax/jquery.parallax-1.1.3.js"></script>
<!-- lightbox -->
<script src="/Vista/PLUGINS/lightbox2/dist/js/lightbox.min.js"></script>
<!-- Owl Carousel -->
<script src="/Vista/PLUGINS/slick-carousel/slick/slick.min.js"></script>
<!-- Portfolio Filtering -->
<script src="/Vista/PLUGINS/filterzr/jquery.filterizr.min.js"></script>
<!-- Smooth Scroll js -->
<script src="/Vista/PLUGINS/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
<!-- Form Validation -->
<script src="/Vista/PLUGINS/form-validation/jquery.form.js"></script>
<script src="/Vista/PLUGINS/form-validation/jquery.validate.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="/Vista/PLUGINS/revo-slider/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/Vista/PLUGINS/revo-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="/Vista/js/script.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="/Vista/PLUGINS/revo-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="/Vista/PLUGINS/revo-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="/Vista/PLUGINS/revo-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="/Vista/PLUGINS/revo-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="/Vista/PLUGINS/revo-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="/Vista/PLUGINS/revo-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="/Vista/PLUGINS/revo-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="/Vista/PLUGINS/revo-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="/Vista/PLUGINS/revo-slider/js/extensions/revolution.extension.video.min.js"></script>
<script>
    /* https://learn.jquery.com/using-jquery-core/document-ready/ */
    jQuery(document).ready(function () {
        /* initialize the slider based on the Slider's ID attribute */
        jQuery('#rev_slider_1').show().revolution({

            /* options are 'auto', 'fullwidth' or 'fullscreen' */
            sliderLayout: 'fullscreen',

            /* basic navigation arrows and bullets */
            navigation: {

                arrows: {
                    style: "zeus",
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 600,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    }
                }
                ,
                bullets: {
                    enable: false,
                    hide_onmobile: true,
                    hide_under: 600,
                    style: "metis",
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                }
            }
        });
    });
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>