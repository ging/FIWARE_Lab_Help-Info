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

      <div id="user_info" class="col-md-pull-3 nav navbar-nav navbar-right">

        <div id="profile_editor_switcher" class="dropdown switcher_bar" tabindex="1">
          <a href="·">        
            <img alt="User" src="img/logos/small/user.png">    
            idm
          </a>
            
          <a class="dropdown-toggle" data-toggle="dropdown" href="#profile_editor_switcher">
            <i class="fa fa-angle-double-down"></i>
          </a>


          <ul id="editor_list" class="dropdown-menu multi-level dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu">
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#">
                <i class="fa fa-angle-double-left"></i> Switch session
              </a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li>
                  <a href="#">
                    <img src="img/logos/small/group.png">
                    sdfdfsf
                  </a>
                </li>
              </ul>
            </li>
            
            <li>
              <a href="/settings/"> <i class="fa fa-cog"></i> Settings
              </a>
            </li>
            <li>
              <a href="#" onclick="Fiware.signOut('account'); return false">
                <i class="fa fa-sign-out"></i> Sign Out
              </a>
            </li>
          </ul>
        </div>        
      </div>


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
        <li class="">
          <a href="http://help.lab.fiware.org/">
            Help&info
          </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</header>
			
			
			<div id="content" class="container-fluid wrap">