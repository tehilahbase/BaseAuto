<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php 
    $root = (isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
    $root .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
    $base_url = $root; 
?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-focus" lang="en">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<meta charset="utf-8">
<title><?php echo app_name; ?> | <?php echo app_meta_desc; ?></title>
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
<link rel="shortcut icon" href="<?php echo $base_url; ?>assets/images/favicon.png">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
<link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/bootstrap.css">
<link rel="stylesheet" id="css-main" href="<?php echo $base_url; ?>assets/css/style.css">
<link rel="stylesheet" id="css-main" href="<?php echo $base_url; ?>assets/css/responsive.css">
</head>
<body>
<div class="content bg-white text-center pulldown overflow-hidden">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h1 class="font-s128 font-w300 text-city animated flipInX">404</h1>
            <h2 class="h3 font-w300 push-50 animated fadeInUp"><?php echo $message; ?></h2>
            
        </div>
    </div>
</div>
<div class="content pulldown text-muted text-center"> Would you like to let us know about it?<br>
    <a class="link-effect" href="<?php echo $base_url; ?>">Go Back to <?php echo app_name; ?></a> </div>
</body>
</html>