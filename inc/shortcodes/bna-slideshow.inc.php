<?php
add_shortcode('bnaslideshow' , 'sc__bnaslideshow');
function sc__bnaslideshow( $atts , $content = null ){
	extract( shortcode_atts( array(
		'name'	=> '',

	), $atts , 'bnaslideshow' ) );
		ob_start();

?>
		
	<div class="the-slideshow">
		<div class="bna-slideshow owl-carousel bna-rotator">
			<?php if(have_rows('bna_slideshow')): ?>
				<?php while(have_rows('bna_slideshow')): the_row(); 
					$shortcode = get_sub_field('bna_shortcode');
					?>
					<div class="one-bna-slide">
						<?php echo do_shortcode($shortcode); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="bna-slideshow-button">
			<a href="<?php the_field('view_gallery_button_link'); ?>" class="button">View Gallery</a>
		</div>
	</div>
	

<?php
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
