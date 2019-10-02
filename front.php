<?php
	// Template Name: Home
?>

<?php get_header()?>

<div class="welcome-parallax will-parallax parallax-welcome">
	<section class="welcome" id="skiptomaincontent">
		<div class="welcome-cta">
			<h2><?php the_field('welcome_headline'); ?></h2>
			<a href="<?php the_field('learn_more_button'); ?>" class="button" rel="nofollow">View My Bio and Philosophy</a>
			</a>
		</div>
	</section>
</div> 


<section class="home-testis">
	<div class="box-with-border">
		<div class="inside-box ib-one">
			<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy icon-quote" data-src="<?php bloginfo('template_directory'); ?>/images/icon-quote.png" alt="ball">
			Jess Prischmann is a <span>gifted surgeon </span> and patients absolutely adore her.
		</div>
	</div>
	<div class="splitter"></div>
	<div class="box-with-border">
		<div class="inside-box">
			<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy icon-quote" data-src="<?php bloginfo('template_directory'); ?>/images/icon-quote.png" alt="ball">
			Your bedside manner <span>was amazing... </span> and it made a difference.
		</div>
	</div>
</section>


<div class="home-team b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-team.jpg">
	<h2>Meet The Team</h2>
	<?php if(have_rows('team_members')): ?>
		<ul>
			<?php while(have_rows('team_members')): the_row(); ?>
				<li>
					<a href="<?php the_sub_field('link'); ?>" rel="nofollow">
						<?php the_sub_field('name'); ?>
						<span><?php the_sub_field('title'); ?></span>
					</a>
				</li>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>
</div>



<section class="home-wedobest b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-wedobest.jpg">
	<h2><?php the_field('what_we_do_best_headline'); ?></h2>
	<?php the_field('what_we_do_best_content'); ?>
	<div class="the-we-do-best-wrap">
		<div class="the-whatwedobest">
			<span>Surgical Procedures</span>
			<?php if(have_rows('surgical_procedures')): ?>
				<ul class="two-column">
					<?php while(have_rows('surgical_procedures')): the_row(); ?>
						<li>
							<a href="<?php the_sub_field('link'); ?>" rel="nofollow"><?php the_sub_field('name'); ?></a>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
		<div class="the-whatwedobest">
			<span>Non Surgical Procedures</span>
			<?php if(have_rows('nonsurgical_procedures')): ?>
				<ul>
					<?php while(have_rows('nonsurgical_procedures')): the_row(); ?>
						<li>
							<a href="<?php the_sub_field('link'); ?>" rel="nofollow"><?php the_sub_field('name'); ?></a>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
		<div class="the-whatwedobest">
			<span>Skin and Laser Treatments</span>
			<?php if(have_rows('skin_and_laser_treatments')): ?>
				<ul>
					<?php while(have_rows('skin_and_laser_treatments')): the_row(); ?>
						<li>
							<a href="<?php the_sub_field('link'); ?>" rel="nofollow"><?php the_sub_field('name'); ?></a>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
	<h3><?php the_field('store_headline'); ?></h3>
	<?php the_field('store_content'); ?>
	<a href="<?php the_field('link'); ?>" class="button" rel="nofollow noopener" target="_blank">Shop</a>
</section>


<div class="home-featured-headline">
	<div class="the-headline">
		Featured Procedures
	</div>
</div>


<section class="home-featured owl-rotator owl-carousel">
	<?php if(have_rows('featured_procedures')): ?>
			<?php while(have_rows('featured_procedures')): the_row(); ?>
			<div class="box-with-border">
				<div class="inside-box">
					<img src="<?php the_sub_field('image'); ?>" alt="icon">
					<div class="the-headline"><?php the_sub_field('name'); ?></div>
					<?php the_sub_field('content'); ?>
					<a href="<?php the_field('link'); ?>" class="button" rel="nofollow">Learn More</a>				
				</div>
			</div>
			<?php endwhile; ?>
	<?php endif; ?>
</section>


<section class="home-news">
	<span class="the-headline">From Our Blog</span>
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
					<?php the_post_thumbnail('thumbnail'); ?>
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