<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico">
	<title>Marissa Beauty Shop</title>
	
	<style type="text/css">
		@font-face{
			font-family: Glou;
			src: url(<?php echo get_template_directory_uri() ?>/assets/fonts/Gloucester.TTF);
		}
		@font-face{
			font-family: Ed;
			src: url(<?php echo get_template_directory_uri() ?>/assets/fonts/Edwardian.TTF);
		}
		@font-face{
			font-family: Dosis;
			src: url(<?php echo get_template_directory_uri() ?>/assets/fonts/Dosis-Bold.ttf);
		}
		@font-face{
			font-family: Dosis Book;
			src: url(<?php echo get_template_directory_uri() ?>/assets/fonts/Dosis-Book.ttf);
		}
		@font-face{
			font-family: Dosis Reg;
			src: url(<?php echo get_template_directory_uri() ?>/assets/fonts/Dosis-Light.ttf);
		}
		@font-face{
			font-family: Dosis M;
			src: url(<?php echo get_template_directory_uri() ?>/assets/fonts/Dosis-Medium.ttf);
		}
		@font-face{
			font-family: Giddy;
			src: url(<?php echo get_template_directory_uri() ?>/assets/fonts/Giddy.otf);
		}
		@font-face{
			font-family: tcb;
			src: url(<?php echo get_template_directory_uri() ?>/assets/fonts/TCCM____.TTF);
		}
		@font-face{
			font-family: twin;
			src: url(<?php echo get_template_directory_uri() ?>/assets/fonts/TCM_____.TTF);
		}
		@font-face{
			font-family: frank;
			src: url(<?php echo get_template_directory_uri() ?>/assets/fonts/FRABK.TTF);
		}
		@font-face{
			font-family: frank1;
			src: url(<?php echo get_template_directory_uri() ?>/assets/fonts/FRABKIT.TTF);
		}
		@font-face{
			font-family: Circa;
			src: url(<?php echo get_template_directory_uri() ?>/assets/fonts/MilasianCircaBoldPERSONAL.ttf);
		}
		@font-face{
			font-family: Edward;
			src: url(<?php echo get_template_directory_uri() ?>/assets/fonts/ITCEDSCR.TTF);
		}
		
	</style>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/plugin/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/plugin/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/plugin/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/bato.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/about.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/boutique.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/catering.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/home.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/gallery.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/events.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/media.css">
	
	<?php wp_head() ?>
</head>
<body>
	<section class="header">
		<div class="container">
			<nav class="navbar navbar-expand-md">
			  <!-- Brand -->
			  <a class="navbar-brand" href="<?php echo home_url() ?>">
			  	<div class="logo">
			  		<img src="<?php echo get_template_directory_uri() ?>/assets/images/Logo.png">
			  	</div>
			  </a>

			  <!-- Toggler/collapsibe Button -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>

			  <!-- Navbar links -->
			  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
			  	<?php 
			  		wp_nav_menu(array(
			  			'theme_location' 	=> 'primary',
			  			'menu_class'		=> 'navbar-nav',
			  			'container'			=> '',
			  			'walker'			=> new CDL_Marissa_Walker()
			  		));
			  	?>
			    <!-- <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link" href="index">HOME</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="batobranch">LOCATION</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="about">ABOUT</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="botique">GALLERY</a>
			      </li> 
			      <li class="nav-item">
			        <a class="nav-link" href="catering">EVENTS</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="home">SERVICES</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" data-toggle="modal" data-target="#contactform" href="#">CONTACT</a>
			      </li> 
			    </ul> -->
			  </div> 
			</nav>
		</div>
	</section>