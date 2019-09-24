<?php
// Template Name: Testimonials
?>

<?php get_header()?>

<section class="interior">
	<?php if(have_posts()) : while (have_posts()) : the_post();?>
		<article class="content" id="skiptomaincontent">
			<?php the_content(); ?>
			<div class="testi-container">
				<?php if(have_rows('testimonials')): ?>
					<?php while(have_rows('testimonials')): the_row(); ?>
						<div class="box-with-border">
							<div class="inside-box">
								<div class="the-testi">
									<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy icon-quote" data-src="<?php bloginfo('template_directory'); ?>/images/icon-quote.png" alt="ball">
									<?php the_sub_field('testimonial'); ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<?php edit_post_link( $link = __('<< EDIT >>'), $before = "<p>", $after ="</p>", $id ); ?>
		</article>
	<?php endwhile; endif;?>

	<?php get_sidebar()?>
</section>

<?php get_footer()?>


