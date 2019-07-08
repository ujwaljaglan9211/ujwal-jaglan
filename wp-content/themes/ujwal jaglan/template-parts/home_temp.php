<?php 
/* Template Name: Home Page */ 
get_header();
?>

<!-- Banner -->
<div class="banner" style="	background:url(<?php $banner_image = get_field('banner_image');echo $banner_image['url'];?>) no-repeat;background-size:cover;">
	<ul class="rslides" id="slider">
		<?php
		// check if the repeater field has rows of data
			if( have_rows('banner_content') ):
				// loop through the rows of data
			while ( have_rows('banner_content') ) : the_row();				
		?>
		<li>
			<div class="banner-info">
				<h3><?php the_sub_field('title');?></h3>
				<span class="line1"></span>
				<p><?php the_sub_field('description');?></p>
				<span class="line2"></span>
				<div class="social-icons">
					<a href="<?php the_field('facebook_url');?>"><span class="facebook"></span>F</a>
					<a href="<?php the_field('twitter_url');?>"><span class="twitter" ></span>T</a>
					<a href="<?php the_field('linkedin_url');?>"><span class="linkedin" ></span>L</a>
					<a href="<?php the_field('github_url');?>"><span class="github" ></span>G</a>
				</div>
			</div>	
		</li>
		<?php 		
			endwhile;
			endif;
		?>
		
		<!-- <li>
			<div class="banner-info">
				<h3>My Passion</h3>
				<span class="line1"></span>
				<p>Lorem Ipsum is dummy text.</p>
				<span class="line2"></span>
				<div class="social-icons">
					<a href="#"><span class="facebook"></span></a>
					<a href="#"><span class="twitter" ></span></a>
					<a href="#"><span class="linkedin" ></span></a>
					<a href="#"><span class="googleplus"></span></a>
				</div>
			</div>
		</li>
		<li>
			<div class="banner-info">
				<h3>My Life Style</h3>
				<span class="line1"></span>
				<p>Lorem Ipsum is dummy text.</p>
				<span class="line2"></span>
				<div class="social-icons">
					<a href="#"><span class="facebook" style="background:url(<?=get_theme_file_uri();?>/images/social-icons.png) no-repeat 0px 0px;"></span></a>
					<a href="#"><span class="twitter"></span></a>
					<a href="#"><span class="linkedin"></span></a>
					<a href="#"><span class="googleplus"></span></a>
				</div>
			</div>
		</li> -->
	</ul>	
</div>
<!-- /Banner -->
<!---728x90--->

<!-- About -->
<div class="about-me" id="about"> 
	<h3 class="text-center slideanim"><?php the_field('about_skills_section_title');?></h3>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12">
				<div class="mydetails slideanim text-center">
					<img class="img-circle img-responsive" src="<?php $image = get_field('image');echo $image['url'];?>" alt="Ujwal Jaglan" width="200" height="200">
					<h3><?php the_field('name');?></h3>
					<p><?php the_field('designation');?></p>
					<div class="social-icons">
					<a href="<?php the_field('facebook_url');?>"><span class="facebook"></span>F</a>
					<a href="<?php the_field('twitter_url');?>"><span class="twitter" ></span>T</a>
					<a href="<?php the_field('linkedin_url');?>"><span class="linkedin" ></span>L</a>
					<a href="<?php the_field('github_url');?>"><span class="github" ></span>G</a>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="myskills slideanim">
					<h3 class="text-center"><?php the_field('skills_info_title');?></h3>
					<p class="skill-text"><?php the_field('skills_description');?></p>
					<div class="skill-info"> 
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<?php
										$i=1;
									// check if the repeater field has rows of data
										if( have_rows('skills') ):
											// loop through the rows of data
										while ( have_rows('skills') ) : the_row();				
									?>
									<tr>
										<td><h4><?php the_sub_field('skill_name');?></h4></td>
										<td><span class="longline<?=$i;?>"></span><span class="shortline<?=$i;?>"></span></td>
										<td><p><?php the_sub_field('skill_percentage');?>%</p></td>
									</tr>
									<?php 	
										$i++;	
										endwhile;
										endif;
									?>
									<!-- <tr>
										<td><h4>Multimedia</h4></td>
										<td><span class="longline2"></span><span class="shortline2"></span></td>
										<td><p>90%</p></td>
									</tr>
									<tr>
										<td><h4>After-Effects</h4></td>
										<td><span class="longline3"></span><span class="shortline3"></span></td>
										<td><p>95%</p></td>
									</tr>
									<tr>
										<td><h4>Wordpress</h4></td>
										<td><span class="longline4"></span><span class="shortline4"></span></td>
										<td><p>92%</p></td>
									</tr>
									<tr>
										<td><h4>HTML5</h4></td>
										<td><span class="longline5"></span><span class="shortline5"></span></td>
										<td><p>96%</p></td>
									</tr> -->
								</tbody>
							</table>
						</div>	
					</div>
				</div>	
			</div>
		</div>	
	</div>	
</div>
<!-- /About -->
<!---728x90--->

<!-- Portfolio -->
	<div class="myportfolio" id="portfolio">
		<h3 class="text-center slideanim"><?php the_field('portfolio_section_title');?></h3>
		<p class="text-center slideanim"><?= get_field('portfolio_section_description');?></p>
		<section class="vertical" id="grid3d">
				<div class="grid-wrap">
					<div class="grid">
						<figure><img class="slideanim" src="<?=get_theme_file_uri();?>/images/1.jpg" alt="img01"/></figure>
						<figure><img class="slideanim" src="<?=get_theme_file_uri();?>/images/2.jpg" alt="img05"/></figure>
						<figure><img class="slideanim" src="<?=get_theme_file_uri();?>/images/3.jpg" alt="img08"/></figure>
						<figure><img class="slideanim" src="<?=get_theme_file_uri();?>/images/4.jpg" alt="img02"/></figure>
						<figure><img class="slideanim" src="<?=get_theme_file_uri();?>/images/5.jpg" alt="img04"/></figure>
						<figure><img class="slideanim" src="<?=get_theme_file_uri();?>/images/6.jpg" alt="img03"/></figure>
						<figure><img class="slideanim" src="<?=get_theme_file_uri();?>/images/7.jpg" alt="img09"/></figure>
						<figure><img class="slideanim" src="<?=get_theme_file_uri();?>/images/8.jpg" alt="img06"/></figure>
						<figure><img class="slideanim" src="<?=get_theme_file_uri();?>/images/9.jpg" alt="img07"/></figure>
					</div>
				</div><!-- /grid-wrap -->
				<div class="content">
					<div>
						<div class="content-img"><img src="<?=get_theme_file_uri();?>/images/1-1.jpg" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">Classy Coming Soon</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<div>
						<div class="content-img"><img src="<?=get_theme_file_uri();?>/images/2-2.jpg" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">404 Error Page</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<div>
						<div class="content-img"><img src="<?=get_theme_file_uri();?>/images/3-3.jpg" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">Credit Card Validation</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<div>
						<div class="content-img"><img src="<?=get_theme_file_uri();?>/images/4-4.jpg" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">Eshop Product Detail Widget</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<div>
						<div class="content-img"><img src="<?=get_theme_file_uri();?>/images/5-5.jpg" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">Model Profile Widget</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<div>
						<div class="content-img"><img src="<?=get_theme_file_uri();?>/images/6-6.jpg" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">Flat Under Construction</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<div>
						<div class="content-img"><img src="<?=get_theme_file_uri();?>/images/7-7.jpg" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">Impressive Under Construction</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<div>
						<div class="content-img"><img src="<?=get_theme_file_uri();?>/images/8-8.jpg" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">Profile Widget</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<div>
						<div class="content-img"><img src="<?=get_theme_file_uri();?>/images/9-9.jpg" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">Travel Reservation Widget</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<span class="loading"></span>
					<span class="icon close-content"></span>
				</div>
			</section>
		</div>	
<!-- /Portfolio -->
<!---728x90--->

<!-- Gallery -->
<div class="mygallery" id="gallery">
	<h3 class="text-center slideanim"><?php the_field('gallery_section_title');?></h3>
	<div class="text-center"> 
		<?php
			$i=1;
		// check if the repeater field has rows of data
			if( have_rows('gallery_images') ):
				// loop through the rows of data
			while ( have_rows('gallery_images') ) : the_row();				
		?>
		<a href="<?php $image = get_sub_field('image');echo $image['url']; ?>" title="My Image Gallery"><img src="<?php $image = get_sub_field('image');echo $image['url']; ?>" alt="example-1" class="img-responsive slideanim"></a> 
		<?php 	
			$i++;	
			endwhile;
			endif;
		?>
		<!-- <a href="<?=get_theme_file_uri();?>/images/me2-2.jpg" title="My Image Gallery"><img src="<?=get_theme_file_uri();?>/images/me2.jpg" alt="example-2" class="img-responsive slideanim"></a> 
		<a href="<?=get_theme_file_uri();?>/images/me3-3.jpg" title="My Image Gallery"><img src="<?=get_theme_file_uri();?>/images/me3.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="<?=get_theme_file_uri();?>/images/me4-4.jpg" title="My Image Gallery"><img src="<?=get_theme_file_uri();?>/images/me4.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="<?=get_theme_file_uri();?>/images/me5-5.jpg" title="My Image Gallery"><img src="<?=get_theme_file_uri();?>/images/me5.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="<?=get_theme_file_uri();?>/images/me6-6.jpg" title="My Image Gallery"><img src="<?=get_theme_file_uri();?>/images/me6.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="<?=get_theme_file_uri();?>/images/me7-7.jpg" title="My Image Gallery"><img src="<?=get_theme_file_uri();?>/images/me7.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="<?=get_theme_file_uri();?>/images/me8-8.jpg" title="My Image Gallery"><img src="<?=get_theme_file_uri();?>/images/me8.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="<?=get_theme_file_uri();?>/images/me9-9.jpg" title="My Image Gallery"><img src="<?=get_theme_file_uri();?>/images/me9.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="<?=get_theme_file_uri();?>/images/me10-10.jpg" title="My Image Gallery"><img src="<?=get_theme_file_uri();?>/images/me10.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="<?=get_theme_file_uri();?>/images/me11-11.jpg" title="My Image Gallery"><img src="<?=get_theme_file_uri();?>/images/me11.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="<?=get_theme_file_uri();?>/images/me12-12.jpg" title="My Image Gallery"><img src="<?=get_theme_file_uri();?>/images/me12.jpg" alt="example-3" class="img-responsive slideanim"></a>	 -->
	</div>

</div>	
<!-- Gallery -->

<?php 
get_footer();
?>