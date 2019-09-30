
<section class="flexible-procedures-repeater">
	<?php if(have_rows('the-procedures')): ?>
		<ul>
			<?php while(have_rows('the-procedures')): the_row(); ?>
				<li id="<?php the_sub_field('id'); ?>">
					<?php the_sub_field('image'); ?>
					<?php the_sub_field('content'); ?>
					<a href="<?php the_sub_field('link'); ?>" class="button" rel="nofollow"> Learn More</a>
				</li>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>
</section>
