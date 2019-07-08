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

<!-- footer -->	
<div class="contact-me" id="contact">
	<h3 class="text-center slideanim">Contact Me</h3>
	<p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	<div class="container">
	<footer>
		<div class="row">
			<div class="col-md-6 slideanim">
				<div class="contact-details">
					<!-- <form action="#" method="post">
						<div class="row">
							<div class="col-sm-12 form-group">
								<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
							</div>
							<div class="col-sm-12 form-group">
								<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
							</div>
						</div>
						<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
						<div class="row">
							<div class="col-sm-12 form-group">
								<button class="btn btn-default btn-lg" type="submit">Send <span class="glyphicon glyphicon-menu-right"></span></button>
							</div>
						</div>
					</form>	 -->
					<?=do_shortcode('[contact-form-7 id="40" title="Footer Contact Form"]');?>
				</div>	
			</div>	
			<div class="col-md-6 slideanim">
				<div class="contact-info">
					<h4>Contact Info</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<div class="footer-info">
						<div>	
							<i class="glyphicon glyphicon-globe"></i>
							<p class="p1">77 Jack Street</p> 
							<p class="p2">Chicago, USA</p>
						</div>
						<div>
							<i class="glyphicon glyphicon-phone-alt"></i>
							<p class="p1">+1 515 151515</p>
							<p class="p2">+00 1010101010</p>
						</div>
						<div>
							<i class="glyphicon glyphicon-envelope"></i>
							<p class="p1"><a href="mailto:myemail@something.com">myemail1@example.com</a></p> 
							<p class="p2"><a href="mailto:myemail@nothing.com">myemail2@example.com</a></p>
						</div>
					</div>
					<h5>Personal Profile</h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
		</div>
		<hr>
		<div class="copyright">
			<p class="text-center">© <?= date("Y"); ?> My Profile. All Rights Reserved Ujwal Jaglan</p>
		</div>
		<a href="#myPage" title="To Top"><span class="glyphicon glyphicon-chevron-up"></span></a>
		</footer>
	</div>
</div>
<!-- /footer -->	
	<!-- js files -->
	<!-- <script src="../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
	<script
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?=get_theme_file_uri();?>/js/bootstrap.min.js"></script>
	<!-- js files for banner slider -->
	<script src="<?=get_theme_file_uri();?>/js/responsiveslides.min.js"></script>
	  <script>
    $(window).load(function() {

     // Slideshow for banner
      $("#slider").responsiveSlides({
        maxwidth: 1920,
        speed: 1000
      });


    });
  </script>
	<!-- /js files for banner slider -->
	<!-- js files for portfolio -->
		<script src="<?=get_theme_file_uri();?>/js/classie.js"></script>
		<script src="<?=get_theme_file_uri();?>/js/helper.js"></script>
		<script src="<?=get_theme_file_uri();?>/js/grid3d.js"></script>
		<script>
			new grid3D( document.getElementById( 'grid3d' ) );
		</script>
	<!-- /js files for portfolio -->
	<!-- js files for gallery -->
<script type="text/javascript" src="<?=get_theme_file_uri();?>/js/cobox.js"></script>
	<!-- /js files for gallery -->	
	<!-- js for smooth scrolling -->
	
		<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})

</script>
	<!-- /js for smooth scrolling -->
	<!-- js for sliding -->
	
	<script>
	$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
	<!-- /js for sliding -->
	<!-- /js files -->
		
<?php wp_footer(); ?>
</body>
</html>
