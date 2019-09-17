<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="footer-main">
		<div class="footer-social">
			<h4>follow me</h4>
			<ul>
				<?php
					if( have_rows('social_media_urls') ):
						while ( have_rows('social_media_urls') ) : the_row();
				?>
				<li>
					<a href="<?php the_sub_field('social_media_url');?>">
						<span class="fa fa-<?php the_sub_field('social_media_name');?>"></span>
					</a>
				</li>
				<?php
					endwhile;
				endif;
				?>
			</ul>
		</div>
		<div class="cpy-right">
			<p>© <?php echo date("Y"); ?> Ujwal Jaglan. All rights reserved</p>
		</div>
	</div>


	<!-- modal -->

	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">explore</h4>
				</div>
				<div class="modal-body">
					<div class="model-info">
						<img src="<?=get_theme_file_uri();?>/images/bg2.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque
							ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis
							porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper. Cras tempor massa
							luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->

	<!-- js -->
	<script src="<?=get_theme_file_uri();?>/js/jquery-2.2.3.min.js"></script>
	<!-- //js -->

	<script>
		$(window).scroll(function () {
			if ($(window).scrollTop() >= 730) {
				$('nav').addClass('fixed-header');
			} else {
				$('nav').removeClass('fixed-header');
			}
		});

		/* scrollTop() >= 240
		   Should be equal the the height of the header
		 */
	</script>

	<!-- PopUp-Box-JavaScript -->
	<script src="<?=get_theme_file_uri();?>/js/jquery.chocolat.js"></script>
	<script>
		$(function () {
			$('.filtr-item a').Chocolat();
		});
	</script>
	<!-- //PopUp-Box-JavaScript -->
	<!-- fliter-JavaScript -->
	<script src="<?=get_theme_file_uri();?>/js/jquery.filterizr.js"></script>
	<script src="<?=get_theme_file_uri();?>/js/controls.js"></script>
	<script>
		$(function () {
			$('.filtr-container').filterizr();
		});
	</script>
	<!-- //fliter-JavaScript -->

	<!-- start-smooth-scrolling -->
	<script  src="<?=get_theme_file_uri();?>/js/move-top.js"></script>
	<script src="<?=get_theme_file_uri();?>/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up-->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script src="<?=get_theme_file_uri();?>/js/SmoothScroll.min.js"></script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?=get_theme_file_uri();?>/js/bootstrap.js"></script>

<?php wp_footer(); ?>
</body>
</html>
