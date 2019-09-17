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
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="icon" href="<?=get_theme_file_uri();?>/images/favicon.png" type="image/x-icon">
	<!-- Custom Theme files -->
	<link href="<?=get_theme_file_uri();?>/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="<?=get_theme_file_uri();?>/css/chocolat.css" type="text/css" media="screen">
	<!-- chocolate css for gallery light box -->
	<link href="<?=get_theme_file_uri();?>/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?=get_theme_file_uri();?>/css/font-awesome.css" rel="stylesheet">
	<!-- font-awesome icons -->
	<!--//Custom Theme files-->

	<!-- web-fonts -->
	<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<!-- //web-fonts -->
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="header-agileinfo" style="background: url(<?=get_theme_file_uri();?>/images/bg.jpg) no-repeat center;">
		<div class="header-banner text-center">
			<div class="container">
				<div class="header-bottom">
					<div class="col-md-3 col-sm-3 header-left">
						<span class="fa fa-envelope-o icon" aria-hidden="true"></span>
						<a href="mailto:<?=get_field('email_address');?>"><?=get_field('email_address');?></a>
					</div>
					<div class="col-md-6 col-sm-6 logo">
						<h1 class="main-title">
							<a href="<?php echo site_url();?>">UJWAL JAGLAN</a>

						</h1>
					</div>
					<div class="col-md-3 col-sm-3 header-right">
						<span class="fa fa-phone icon" aria-hidden="true"></span>
						<a href="tel:+91<?=get_field('phone_number');?>"><?=get_field('phone_number');?></a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="banner-text">
					<h4>welcome to my site!</h4>
					<div class="banner-slide">
						<h2 class="bnrtext"></h2>
						<b>
							<span class="span1">
								<?php
								$count = count(get_field('honour_designation'));
								$i = 1;
								if( have_rows('honour_designation') ):
								   while ( have_rows('honour_designation') ) : the_row();	
									   the_sub_field('designation');
									if($i<$count+1){echo '<br/>';}
									$i++;
								   endwhile;
								endif;
								?>
							</span>
						</b>

						<div class="clearfix"></div>
					</div>
				</div>
			</div>

		</div>

		<div class="clear"></div>
		<nav class="navbar navbar-default">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
				<?php
					$menu_name = 'header menu';  
					$locations = get_nav_menu_locations();
					$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
					$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
					function buildTree( array &$elements, $parentId = 0 )
					{
					$branch = array();
					foreach ( $elements as &$element )
					{
							if ( $element->menu_item_parent == $parentId )
							{
									$children = buildTree( $elements, $element->ID );
									if ( $children )
											$element->child = $children;
											$element->has_children = 1;
									$branch[$element->ID] = $element;
									unset( $element );
							}
					}
					return $branch;
					}
					$menuitems = buildTree($menuitems);
				?>
				<ul>
					<?php
						$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
						$pagename = get_query_var('pagename');
						foreach ($menuitems as $menuitem) {
					?>
						<li><a href="<?php echo $menuitem->url;?>" class="<?php if($menuitem->ID==5){echo 'active';}else {echo 'scroll';}?>"><?php echo $menuitem->title;?></a></li>
					<?php
						}
					?>
				</ul>
			</div>
		</nav>
	</div>