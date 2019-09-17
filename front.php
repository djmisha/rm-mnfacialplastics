<?php
	// Template Name: Home
?>

<?php get_header()?>

<div class="welcome-parallax will-parallax parallax-welcome">
	<section class="welcome" id="skiptomaincontent">
		<div class="welcome-logo">
			<h1>
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo-header.png" alt=""></a>
			</h1> 
		</div>
		<div class="welcome-cta">
			<h2><?php the_field('welcome_headline'); ?></h2>
			<?php the_field('welcome_content'); ?>
			<a href="<?php the_field('learn_more_button'); ?>" class="button" rel="nofollow">Learn More</a>
			<a href="<?php the_field('schedule_a_consultation_button'); ?>" class="button" rel="nofollow">Schedule a Consultation</a>
			<div class="overlay"></div>
		</div>
	</section>
</div> 



<section class="welcome-bottom">
	<div class="top-recognition">
		<span>Top National Recognition</span>
		<div class="reco">
			<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/icon-asmbs.png" alt="Recognition icon">
			Bariatric Surgery Center of Excellence (American Society for Metabolic & Bariatric Surgery)
		</div>
		<div class="reco">
			<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/icon-bluecross.png" alt="Recognition icon">
			Designated Center for Bariatric Surgery (Blue Cross Blue Shield of Illinois)
		</div>
	</div>
	<div class="icon-video">
		<a href="<?php bloginfo('url'); ?>/bariatric-surgery/videos/">
			<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/icon-video.png" alt="video icon">
		</a>
	</div>
</section>



<section id="aboutus" class="home-aboutus">
	<div>
		<h2><?php the_field('about_headline'); ?></h2>
		<span class="about-sub-head"><?php the_field('about_subheadline'); ?></span>
		<?php the_field('about_content'); ?>
		<a href="<?php the_field('about_button'); ?>" rel="nofollow" class="button">More About Us</a>
	</div>
	<div>
		<h2><?php the_field('about_headline_2'); ?></h2>
		<span class="about-sub-head"><?php the_field('about_sub_headline_2'); ?></span>
		<?php the_field('about_content_2'); ?>
		<a href="<?php the_field('learn_more_button_about'); ?>" rel="nofollow" class="button">Learn More</a>
		<a href="<?php the_field('view_patient_gallery_button'); ?>" rel="nofollow" class="button">View Patient Gallery</a>
	</div>
</section>



<div class="home-doctors b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-doctors.jpg">
	<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy our-docs" data-src="<?php bloginfo('template_directory'); ?>/images/bg-thedocs.png" alt="docs">

	<div class="the-docs b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-our-docs.png">
		<h3>Meet Our Doctors</h3>
		<?php if(have_rows('our_docs')): ?>
			<ul>
				<?php while(have_rows('our_docs')): the_row(); ?>
					<li>
						<a href="<?php the_sub_field('link'); ?>" rel="nofollow">
							<?php the_sub_field('name'); ?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</div>


<section class="home-weight b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-weight.jpg">
	<h2><span>The Weight</span> is Over</h2>
	<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy icon-scale" data-src="<?php bloginfo('template_directory'); ?>/images/icon-scale.png" alt="docs">
	<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy icon-patient" data-src="<?php bloginfo('template_directory'); ?>/images/icon-patient.png" alt="docs">
	<a href="<?php the_field('view_patient_gallery_button'); ?>" rel="nofollow" class="button">View Patient Gallery</a>
</section>


<section class="home-orbera b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-orbera.jpg">
	<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy icon-scale" data-src="<?php bloginfo('template_directory'); ?>/images/icon-ball.png" alt="ball">
	<h2><?php the_field('orbera_headline'); ?></h2>
	
	<?php the_field('orbera_content'); ?>
	<div class="orbera-fee">Free ORBERA&trade; Intragastic Ballon Consultation</div>
	<div class="orbera-call">Call Today 866-716-5263</div>
	<a href="<?php the_field('orbera_learn_more_button'); ?>" class="button" rel="nofollow">Learn More</a>
	<a href="<?php the_field('orbera_schedule_button'); ?>" class="button" rel="nofollow">Schedule Consulation</a>
</section>


<section class="home-featured b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-featured.jpg">
	<div class="special-headline">
		<h2>Healthy <span>Again</span></h2>
	</div>
	<h3>Specialities/Procedures</h3>
	<?php if(have_rows('featured_procedures_part_1')): ?>
		<ul class="two-column">
			<?php while(have_rows('featured_procedures_part_1')): the_row(); ?>
				<li>
					<a href="<?php the_sub_field('link'); ?>" rel="nofollow">
						<?php the_sub_field('name'); ?>
					</a>
				</li>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>

	<a href="<?php the_field('view_more_button_1'); ?>" class="button" rel="nofollow">View All</a>

	<h3>Bariatric Surgery</h3>
	<?php if(have_rows('featured_procedures_part_2')): ?>
		<ul class="two-column">
			<?php while(have_rows('featured_procedures_part_2')): the_row(); ?>
				<li>
					<a href="<?php the_sub_field('link'); ?>" rel="nofollow">
						<?php the_sub_field('name'); ?>
					</a>
				</li>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>

	<a href="<?php the_field('view_more_button_2'); ?>" class="button" rel="nofollow">View All</a>

	<div class="the-overlay"></div>
</section>


<section class="home-news">
	<span class="the-headline">From Our Blog</span>
	<div class="gars-line"></div>
		<?php if( get_post_type() != 'post'): ?>
			<?php
				$args = array(
					'numberposts' => 3,
					'post_status'=>"publish",
					'post_type'=>"post",
					'orderby'=>"post_date");

					$postslist = get_posts( $args );
				
				echo '<ul class="latest-posts">';
				
				foreach ($postslist as $post) :  setup_postdata($post); ?>
			<li>
				<a href="<?php the_permalink();?>" rel="nofollow">
					<span class="news-head"><?php the_title(); ?></span>
					<?php my_excerpt(15); ?>
					<span class="button">Learn More</span>
				</a>
			</li>
		<?php endforeach; ?>
		<?php wp_reset_query(); ?>
	</ul>
	<?php endif; ?>
</section>

<?php get_footer()?>