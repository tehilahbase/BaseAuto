<?php
	if(!empty($page_active)) {
		if($page_active == 'main'){$main_act = 'current';} else {$main_act = '';}
		if($page_active == 'about'){$about_act = 'current';} else {$about_act = '';}
		$service_itm = array('service', 'chauffeur', 'dispatch');
		if(in_array($page_active, $service_itm)){$service_act = 'current';} else {$service_act = '';}
		if($page_active == 'chauffeur'){$chauffeur_act = 'current';} else {$chauffeur_act = '';}
		if($page_active == 'dispatch'){$dispatch_act = 'current';} else {$dispatch_act = '';}
		if($page_active == 'contact'){$contact_act = 'current';} else {$contact_act = '';}
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
<!-- Stylesheets -->
<link href="<?php echo base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url('assets/'); ?>css/revolution-slider.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/jquery-ui.css">
<link href="<?php echo base_url('assets/'); ?>css/style.css" rel="stylesheet">
<!--Favicon-->
<link rel="shortcut icon" href="<?php echo base_url('assets/'); ?>images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php echo base_url('assets/'); ?>images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="<?php echo base_url('assets/'); ?>css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="<?php echo base_url('assets/'); ?>js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header / Header Style Three-->
    <header class="main-header header-style-three">
        <!--Header Top-->
        <div class="header-top-two">
        	<div class="auto-container">
            	<div class="clearfix">
                    <!--Top Left-->
                    <div class="top-left">
                       <ul class="info-links clearfix">
                        	<!-- <li><a href="javascript:;"><span class="icon fa fa-clock-o"></span> Opening Hours: Monday to Sunday - 8.30am to 9.00pm </a></li> -->
                        </ul>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right">
                        <ul class="info-links clearfix">
                        	<li><a href="<?php echo base_url('login'); ?>"><span class="icon fa fa-sign-in"></span> Login</a></li>
                            <li><a href="<?php echo base_url('cars'); ?>" class="theme-btn booking-btn">HIRE</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="logo-outer">
                    	<div class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/'); ?>images/logo-3.png" alt="Valencia" title="Valencia"></a></div>
                    </div>
                    
                    <div class="upper-right clearfix">
                    	<!--Nav Outer-->
                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->    	
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="<?php echo $main_act; ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
                                        <li class="<?php echo $about_act; ?>"><a href="<?php echo base_url('about'); ?>">About Us</a></li>
										<li class="dropdown <?php echo $service_act; ?>"><a href="<?php echo base_url('services'); ?>">Services</a>
											<ul>	
												<li><a class="<?php echo $chauffeur_act; ?>" href="<?php echo base_url('services/chauffeur'); ?>">Chauffeur Services</a></li>
												<li><a class="<?php echo $dispatch_act; ?>" href="<?php echo base_url('services/dispatch'); ?>">Dispatch Services</a></li>
											</ul>
										</li>
                                        <li class="<?php echo $contact_act; ?>"><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
                                    </ul>
                                </div>
                            </nav><!-- Main Menu End-->
                            <!--Contact Info-->
                            <div class="contact-info">
                            	<div class="icon-box"><span class="flaticon-technology"></span></div>
                                <div class="info-title">Call Us Now:</div>
                                <div class="info">+234-817-513-4964</div>
                            </div>
                            
                        </div>
                    </div><!--End Upper Right-->
                    
                </div>
            </div>
        </div>
        
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="<?php echo base_url(); ?>" class="img-responsive"><img src="<?php echo base_url('assets/'); ?>images/logo-small.png" alt="Valencia" title="Valencia"></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="<?php echo $main_act; ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li class="<?php echo $about_act; ?>"><a href="<?php echo base_url('about'); ?>">About Us</a></li>
								<li class="dropdown <?php echo $service_act; ?>"><a href="<?php echo base_url('services'); ?>">Services</a>
									<ul>	
										<li><a class="<?php echo $chauffeur_act; ?>" href="<?php echo base_url('services/chauffeur'); ?>">Chauffeur Services</a></li>
										<li><a class="<?php echo $dispatch_act; ?>" href="<?php echo base_url('services/dispatch'); ?>">Dispatch Services</a></li>
									</ul>
								</li>
                                <li class="<?php echo $contact_act; ?>"><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div><!--End Sticky Header-->
    </header>
    <!--End Main Header -->