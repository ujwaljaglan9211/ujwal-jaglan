<?php 
/**
 * Template Name: Home Page template
*/
get_header();
?>

<!-- about -->
<div class="about section-w3layouts main-pos" id="about">
		<h3 class="pos-title">about me</h3>
		<div class="container">
			<h4 class="sec-title"><?=get_field('menu_below_title');?></h4>
			<div class="main-about-grid text-center">
				<?php the_content();?>
				<ul class="about-list">
					<li>
						<a href="#contact" class="wthree- about-link scroll"><?=get_field('first_button_text');?></a>
					</li>
					<li>
						<a href="<?php $resume_or_cv = get_field('resume_or_cv');echo $resume_or_cv['url'];?>" class="wthree- about-link" target="_blank"><?=get_field('second_button_text');?></a>
					</li>
				</ul>
			</div>
			<div class="about-btm-w3_agileits">
				<div class="grid-flex">
					<div class="ab1 main-about-grid1">
						<span class="fa fa-graduation-cap  wthree-title-list" aria-hidden="true"></span>
                        <h4 class="aboutbtm-head">education</h4>
                        <?php
                        if( have_rows('education') ):
                            while ( have_rows('education') ) : the_row();
                        ?>
                        <h5><?php the_sub_field('course_name');?></h5>
                        <?php the_sub_field('course_description');
                            endwhile;
                        endif;
                        ?>
					</div>
					<div class="ab1 main-about-grid2">
						<span class="fa fa-shield  wthree-title-list" aria-hidden="true"></span>
						<h4 class="aboutbtm-head">expertise</h4>
						<?php
                        if( have_rows('expertise') ):
                            while ( have_rows('expertise') ) : the_row();
                        ?>
                        <h5><?php the_sub_field('title');?></h5>
                        <?php the_sub_field('description');
                            endwhile;
                        endif;
                        ?>
					</div>
					<div class="ab1 main-about-grid3">
						<span class="fa fa-trophy" aria-hidden="true"></span>
						<h4 class="aboutbtm-head">awards</h4>
						<?php
                        if( have_rows('awards') ):
                            while ( have_rows('awards') ) : the_row();
                        ?>
                        <h5><?php the_sub_field('title');?></h5>
                        <?php the_sub_field('description');
                            endwhile;
                        endif;
                        ?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //about-bottom -->
		</div>
	</div>
	<!-- skills -->
	<div class="skills section-w3layouts main-pos" id="skills" style="background: url(<?=get_theme_file_uri();?>/images/s1.jpg) no-repeat center;">
		<h3 class="pos-title">expertise</h3>
		<div class="container">
			<h4 class="sec-title">my skills</h4>

			<div class="row">
				<div class="skills-bar">
                    <?php
                        if( have_rows('skills') ):
                            while ( have_rows('skills') ) : the_row();
                    ?>
					<h3 class="progress-title"><?php the_sub_field('skill_name');?></h3>
					<div class="progress  green">
						<div class="progress-bar" style="width:<?php the_sub_field('rating');?>0%; background:#5fad56">
							<div class="progress-value"><?php the_sub_field('rating');?>0%</div>
						</div>
                    </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
				</div>
			</div>
		</div>
	</div>
	<!--//skills -->

	<!-- services -->
	<div class="about section-w3layouts main-pos" id="services">
		<h3 class="pos-title">web design</h3>
		<div class="container">
			<h4 class="sec-title">my services</h4>
			<div class="services-left">
				<div class="col-md-6 serv-left text-center">
					<div class="serv-txt">
						<span class="fa fa-folder-open-o" aria-hidden="true"></span>
						<h5>services</h5>
					</div>
					<div class="icon-grid1">
						<div class="icon icon1">
							<span class="fa fa-newspaper-o" aria-hidden="true"></span>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="icon-grid2">
						<div class="icon icon2">
							<span class="fa fa-gear" aria-hidden="true"></span>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="icon-grid5">

						<div class="icon icon3">
							<span class="fa fa-pencil" aria-hidden="true"></span>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="icon-grid3">
						<div class="col-md-3 icon icon4">
							<span class="fa fa-info" aria-hidden="true"></span>
						</div>

						<div class="clearfix"></div>
					</div>
					<div class="icon-grid6">
						<div class="icon icon5">
							<span class="fa fa-file-image-o" aria-hidden="true"></span>
						</div>

						<div class="clearfix"></div>
					</div>
					<div class="icon-grid4">
						<div class="icon icon6">
							<span class="fa fa-bolt" aria-hidden="true"></span>
						</div>

						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 services-right-w3ls">
					<h5><?=get_field('services_title');?></h5>
					<?=get_field('services_description');?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<!-- Portfolio -->
	<?php 
		$terms = get_terms([
			'post'    => 'portfolio',
			'taxonomy' => 'portfolio_categories',
			'hide_empty' => true,
		]);
	?>
	<div class="portfolio section-w3layouts main-pos" id="port">
		<h4 class="sec-title">recent works</h4>
		<h3 class="pos-title1">overview</h3>
		<ul class="simplefilter">
			<li class="active" data-filter="all">All</li>
			<?php foreach($terms as $term){ ?>
			<li data-filter="<?=$term->term_id;?>"><?=$term->name;?></li>
			<?php } ?>
		</ul>

		<div class="filtr-container">
			<?php
				$args = array(
					'post_type' => 'portfolio', /* This is where you should put your Post Type */
					'order' => 'ASC',
					'posts_per_page' => -1,
					'post_status' => 'publish'
				);
				$query = new WP_Query( $args );
				if($query->have_posts()):
				while($query->have_posts()): $query->the_post();
				$terms = get_the_terms( $post->ID, 'portfolio_categories' );
				$terms_array = array();
				foreach($terms as $term){
					array_push($terms_array,$term->term_id);
				}
				$terms_string = implode(", ",$terms_array);
				$terms_string = $terms_string.', ';
			?>
			<div class="filtr-item gallery-t" data-category="<?php echo substr($terms_string, 0, -2);?>" data-sort="Busy streets">
				<a href="<?php the_post_thumbnail_url();?>" class="b-link-stripe b-animate-go  thickbox" onclick="location.href'<?=get_field('portfolio_url');?>'">
					<figure class="port-gird">
						<img src="<?php the_post_thumbnail_url();?>" class="img-responsive" alt=" " />
						<figcaption class="port-gird-caption-agileits_w3layouts">
							<h3><?php the_title();?></h3>
						</figcaption>
					</figure>
				</a>
			</div>
			<?php
				endwhile;
				endif;
				wp_reset_query();
			?>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //Portfolio -->

	<!-- blog -->
	<!-- <div class="blog main-pos section-w3layouts" id="blog">
		<h3 class="pos-title postitle4">my diary</h3>

		<div class="container">
			<h4 class="sec-title">blog</h4>
			<div class="blog-sec-w3_agile-grids">
				<div class="blog-sub">
					<div class="col-md-8 blog-sec-w3_agile b1">
						<div class="blog-top"></div>
						<div class="col-md-6 blog-img img1">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="<?=get_theme_file_uri();?>/images/a5.jpg" alt="" class="img-responsive" />
							</a>
						</div>
						<div class="col-md-6 blog-bottom bb1">
							<div class="post-info">
								<ul>
									<li class="blog-icon-left">By
										<a href="#">Admin</a>
									</li>
									<li class="blog-icon-right">
										<a href="#">
											<span class="fa fa-heart" aria-hidden="true"></span>
										</a>94</li>
								</ul>
								<div class="clearfix"></div>
								<a href="#" data-toggle="modal" data-target="#myModal">
									<h5>20 feb:</h5>
									<h4>simple blog post</h4>
								</a>
								<p>Suspendisse in nisl at ipsum molestie dignissim. Pellentesque est nisi, blandit eget aliquam sed, consequat nec risus...
								</p>
							</div>
							<a href="#">
								<span class="blog-share fa fa-share-alt" aria-hidden="true"></span>
							</a>
							<div class="blog-sec-w3_agile blog-button">
								<a href="#" data-toggle="modal" data-target="#myModal">More</a>
							</div>
						</div>

					</div>

					<div class="col-md-4  blog-sec-w3_agile">

						<div class="blog-bottom bb2">
							<div class="post-info">
								<ul>
									<li class="blog-icon-left">By
										<a href="#">Admin</a>
									</li>
									<li class="blog-icon-right">
										<a href="#">
											<span class="fa fa-heart" aria-hidden="true"></span>
										</a>67</li>
								</ul>
								<div class="clearfix"></div>
								<a href="#" data-toggle="modal" data-target="#myModal">
									<h5>25 jan:</h5>
									<h4>simple blog post</h4>
								</a>
								<p>Suspendisse in nisl at ipsum molestie dignissim. Pellentesque est nisi, blandit eget aliquam sed, consequat nec risus...
								</p>
							</div>
							<a href="#">
								<span class="blog-share fa fa-share-alt" aria-hidden="true"></span>
							</a>
							<div class="blog-sec-w3_agile blog-button">
								<a href="#" data-toggle="modal" data-target="#myModal">More</a>
							</div>
						</div>
						<div class="blog-img">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="<?=get_theme_file_uri();?>/images/a3.jpg" alt="" class="img-responsive" />
							</a>
						</div>
					</div>
					<div class="clearfix"></div>

					<div class="col-md-4 blog-sec-w3_agile b1">

						<div class="blog-bottom bb3">
							<div class="post-info">
								<ul>
									<li class="blog-icon-left">By
										<a href="#">Admin</a>
									</li>
									<li class="blog-icon-right">
										<a href="#">
											<span class="fa fa-heart" aria-hidden="true"></span>
										</a>98</li>
								</ul>
								<div class="clearfix"></div>
								<a href="#" data-toggle="modal" data-target="#myModal">
									<h5>25 jan:</h5>
									<h4>simple blog post</h4>
								</a>
								<p>Suspendisse in nisl at ipsum molestie dignissim. Pellentesque est nisi, blandit eget aliquam sed, consequat nec risus...
								</p>
							</div>
							<a href="#">
								<span class="blog-share fa fa-share-alt" aria-hidden="true"></span>
							</a>
							<div class="blog-sec-w3_agile blog-button">
								<a href="#" data-toggle="modal" data-target="#myModal">More</a>
							</div>
						</div>
						<div class="blog-img">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="<?=get_theme_file_uri();?>/images/a3.jpg" alt="" class="img-responsive" />
							</a>
						</div>

					</div>
					<div class="col-md-8 blog-sec-w3_agile b3 ">
						<div class="col-md-6 blog-img img1">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="<?=get_theme_file_uri();?>/images/a4.jpg" alt="" class="img-responsive" />
							</a>
						</div>
						<div class="col-md-6 blog-bottom bb4">
							<div class="post-info">
								<ul>
									<li class="blog-icon-left">By
										<a href="#">Admin</a>
									</li>
									<li class="blog-icon-right">
										<a href="#">
											<span class="fa fa-heart" aria-hidden="true"></span>
										</a>73</li>
								</ul>
								<div class="clearfix"></div>
								<a href="#" data-toggle="modal" data-target="#myModal">
									<h5>20 feb:</h5>
									<h4>simple blog post</h4>
								</a>
								<p>Suspendisse in nisl at ipsum molestie dignissim. Pellentesque est nisi, blandit eget aliquam sed, consequat nec risus...
								</p>
							</div>
							<a href="#">
								<span class="blog-share fa fa-share-alt" aria-hidden="true"></span>
							</a>
							<div class="blog-sec-w3_agile blog-button">
								<a href="#" data-toggle="modal" data-target="#myModal">More</a>
							</div>
						</div>

						<div class="clearfix"></div>
						<div class="blog-top blog-top2"></div>

					</div>


					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- //blog -->
	<div class="contact-bottom section-w3layouts main-pos" id="contact">
		<h3 class="pos-title">get in touch</h3>
		<h4 class="sec-title">nice to meet you!</h4>
		<div class="contact-right-w3l">
			<h3 class="title-contact text-center">Have a question or just want to Get in Touch?</h3>
			<?= do_shortcode('[contact-form-7 id="16" title="Contact form"]');?>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //contact -->
	<!-- subscribe -->
	<div class="subscribe-main section-w3layouts text-center">
		<div class="subscribe-head">
			<h4 class="sec-title">subscribe </h4>
			<h6>to my newsletter</h6>
			<h5>Get the free newsletter to keep up-to-date with my projects.</h5>
			<!-- <p class="sub-p">Never miss out on latest sales and best offers!</p> -->
			<div class="subscribe-form">
				<?=do_shortcode('[contact-form-7 id="65" title="Subscription Form"]');?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //subscribe -->

<?php 
get_footer();
?>