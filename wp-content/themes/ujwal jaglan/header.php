<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<!-- css files -->
	<link href="<?=get_theme_file_uri();?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?=get_theme_file_uri();?>/css/cobox.css" rel="stylesheet" type="text/css">
	<link href="<?=get_theme_file_uri();?>/css/portfolio.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?=get_theme_file_uri();?>/style.css" rel="stylesheet" type="text/css" media="all">
	<!-- /css files -->
	<!-- font links -->
	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
	<!-- /font links -->	
	<!-- js files -->
	<script src="<?=get_theme_file_uri();?>/js/modernizr.custom.js"></script>
	<!-- /js files -->
</head>

<body <?php body_class(); ?> id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php wp_body_open(); ?>
<!-- <script src='../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script> -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="//cdn.monetizejs.com/api/js/latest/monetize.min.js"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<!-- <script type="text/javascript" src="http://services.bilsyndication.com/adv1/?d=353" defer="" async=""></script><script> var vitag = vitag || {};vitag.gdprShowConsentTool=false;vitag.outStreamConfig = {type: "slider", position: "left" };</script> -->
<body>
 <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?=site_url();?>">Ujwal Jaglan</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right">
              <ul class="nav navbar-nav link-effect">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#gallery">Gallery</a></li>
				<li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>