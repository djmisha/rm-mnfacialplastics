<?php get_header()?>

<section class="interior">
	<article class="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
			<article class="post-snippet">
				<div class="excerpt">
					<h2 class="blog-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					<div class="meta-data">Posted on <?php the_time('M');?> <?php the_time('j');?>, <?php  the_time('Y'); ?> in <?php the_category(', '); ?></div>
					<?php if(!empty(get_the_post_thumbnail())): ?>
						<div class="thumb">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('thumbnail'); ?>
							</a>
						</div>
					<?php endif; ?>
					<div class="para">
						<a href="<?php the_permalink(); ?>">
							<?php my_excerpt(60); ?>
						</a>
					</div>
				</div>
			</article>
			<?php endwhile; endif;?>
			<div class="next-prev">
				<?php posts_nav_link( ' ', '&larr;  Prev Page', 'Next Page &rarr;' ); ?>
			</div>
		</article>
		<?php get_sidebar()?>
	</section>
	<?php wp_reset_postdata(); ?>
<?php get_footer()?>