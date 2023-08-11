<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?php echo $URL; ?>/public/favicon/favicon.ico" type="image/ico" sizes="16x16">
	
	<?php echo '<link rel="stylesheet" href="'.$URL.DS.'public'.DS.'css'.DS.'bootstrap.min.css">'; ?>
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<?php echo '<link rel="stylesheet" href="'.$URL.DS.'public'.DS.'css'.DS.'style.css">'; ?>
	    
	<?php echo WEBAPP::app_css(); ?>
	
	<?php echo '<script src="'.$URL.DS.'public'.DS.'js'.DS.'jquery.min.js"></script>'; ?>
	<?php echo '<script src="'.$URL.DS.'public'.DS.'js'.DS.'bootstrap.min.js"></script>'; ?>
	<script src="https://kit.fontawesome.com/72807e076f.js" crossorigin="anonymous"></script>
	<?php echo '<script src="'.$URL.DS.'public'.DS.'js'.DS.'script.js"></script>'; ?>
	
	<?php echo WEBAPP::app_js(); ?>
</head>
<body oncontextmenu="return true;">
    
    <div id="contact-top-bar" class="float-right">
        <div id="contact-top-bar-data">
            Tel: 040-XXXXXXXXX | Email id: rtgr@uohyd.ac.in
        </div>
    </div>
    <br /><br />
	<header class="header" id="header">
		<a href="<?php echo $URL; ?>" style="text-decoration: none;">
		    <img id="img-logo" src="<?php echo $URL; ?>/public/images/logo.png" height="220px" alt="RTGR Logo" />
		    <img id="img-logo-right" src="<?php echo $URL; ?>/public/images/logo_0.png" height="220px" alt="RTGR Logo" />
        </a>
	</header>
