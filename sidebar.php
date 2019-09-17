<aside>

	<?php if(get_post_type() == 'post' ){ //Sidebar Blog Pages  ?>
		<div class="sidebar-block blog-block">
			<div class="sb-inside">
				<div class="sb-heading">Categories</div>
				<ul>
					<?php wp_list_categories( array(
						'title_li' 	=> '',
						'depth'		=> 1,
						// 'exclude'	=> 26
					) ); ?>
				</ul>

			</div>
		</div>
		<div class="sidebar-block blog-block">
			<div class="sb-inside">
				<div class="sb-heading">Archives</div>
				<ul class="list-items">
					<?php  wp_get_archives( array(
						'type'            => 'yearly',
						'limit'           => '',
						'before'          => '',
						'after'           => '',
						'show_post_count' => false,
						'echo'            => 1,
						'order'           => 'DESC'
					)); ?>
				</ul>

			</div>
		</div>
	<?php } ?>

	<?php if(!is_page(array('contact-us'))): // Sidebar Related Pages ?>
		<?php if(!this_is('gallery-child' || 'gallery') && get_post_type() != 'post' && get_post_type() != 'news-room'):
			global $post;
			$related_id = ( $post->post_parent ) ? $post->post_parent : $post->ID;
			$childPages = wp_list_pages(array(
					'title_li'  	=> '',
					'child_of'  	=> $post->ID,
					'depth'   	=> 1,
					'echo'		=> 0
			));
			$wp__list_pages = wp_list_pages(array(
					'title_li'  	=> '',
					'child_of'  	=> $related_id,
					'exclude'		=> "$post->ID",
					'depth'   	=> 1,
					'echo'		=> 0
			));
			if(!empty($childPages)):
				$wp__list_pages = $childPages;
			endif;
			if( !empty($wp__list_pages) ): ?>
				
				<div class="sidebar-block related-pages">
					<div class="sb-heading">Related Pages</div>
					<div>
						<ul class="list-unstyled">
							<?php echo $wp__list_pages; ?>
						</ul>
					</div>
				</div>

			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
	 


	<div class="sidebar-block sb-locations">
		<div class="sb-heading">Locations<i class="fas fa-map-marker-alt"></i></div>
		<div class="sb-the-locs">
			<?php if(have_rows('locations', 'option')): ?>
				<?php while(have_rows('locations', 'option')): the_row(); ?>
					<div class="the-loc">
						<span><?php the_sub_field('name', 'option'); ?></span><br>
						<a href="<?php the_sub_field('map_link', 'option'); ?>" class="track-outbound loc-name" data-label="Address - Sidebar" target="_blank"  rel="noopener">
							<?php the_sub_field('address', 'option'); ?><br /> <?php the_sub_field('city', 'option'); ?>
						</a>
						<div class="loc-phone">
							<a href="<?php the_sub_field('phone_link', 'option'); ?>" class="track-outbound" data-label="Phone - Sidebar">
								Phone: <?php the_sub_field('phone', 'option'); ?></a>
								<br>
								Fax: <?php the_sub_field('fax', 'option'); ?>
						</div>
						<a href="<?php the_sub_field('map_link', 'option'); ?>" class="track-outbound loc-map-directions" data-label="Address - Sidebar" target="_blank" rel="noopener">
							Map & Directions
						</a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>


	<div class="sb-button">
		<a href="<?php bloginfo('url'); ?>/bariatric-surgery/videos/">
			<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/icon-sb-video.png" alt="video icon">
		</a>
	</div>
	<div class="sb-button">
		<a href="https://suburbansurgicalcarespecialists.bariatricadvantage.com/" target="_blank" rel="noopener nofollow">
			<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/icon-sb-shop.png" alt="video icon">
		</a>
	</div>

</aside>