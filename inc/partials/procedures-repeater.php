<section class="flexible-procedures-repeater">
	<?php if(have_rows('the-procedures')): ?>
		<ul>
			<?php while(have_rows('the-procedures')): the_row(); ?>
				<li id="<?php the_sub_field('id'); ?>">
					<img class="b-lazy" data-src="<?php the_sub_field('image'); ?>" alt="icon">
					<?php the_sub_field('content'); ?>
					<a href="<?php the_sub_field('link'); ?>" class="button" rel="nofollow"> Learn More</a>
				</li>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>
</section>
