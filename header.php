<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!--wordpress head-->
		<?php wp_head(); ?>


    <script>
      var confirm_help_box = function () {
        var r = confirm("The communications sent to the FIWARE Lab support list are public and they generate public tickets (including email addresses and names). Please avoid sending private info to them unless you are happy to see them publicly available.");
          if (r == true) {
              window.location = "mailto:fiware-lab-help@lists.fiware.org?Subject=FIWARE Lab Assistance";
        } 
      }
    </script>

    <script src="wp-content/themes/bootstrap-basic/js/vendor/cookies_policy.js"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-26428169-3', 'auto');
      ga('send', 'pageview');

    </script>
    
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		
		
		
		
		
		<header class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse">
        <span class="fa fa-angle-double-down"></span>
      </button>
      <div class="logo-fl-header">
        <a href="#" class="brand">

        </a>
      </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="header-navbar-collapse">

      <ul class="nav navbar-nav col-md-push-9">
        <li class="">
          <a href="https://cloud.lab.fiware.org/">
            Cloud
          </a>
        </li>
        <li class="">
          <a href="https://store.lab.fiware.org/">
            Store
          </a>
        </li>
        <li class="">
          <a href="https://mashup.lab.fiware.org/">
            Mashup
          </a>
        </li>
        <li class="">
          <a href="https://data.lab.fiware.org">
            Data
          </a>
        </li>
        <li class="">
          <a href="https://account.lab.fiware.org">
            Account
          </a>
        </li>
        <li class="active">
          <a href="http://help.lab.fiware.org/">
            Help&info
          </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</header>
			
			
			<div id="content" class="container-fluid wrap">