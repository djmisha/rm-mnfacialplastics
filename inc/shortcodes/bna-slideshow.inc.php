<?php
add_shortcode('bnaslideshow' , 'sc__bnaslideshow');
function sc__bnaslideshow( $atts , $content = null ){
	extract( shortcode_atts( array(
		'name'	=> '',

	), $atts , 'bnaslideshow' ) );
		ob_start();

?>

	<div class="bna-slideshow">
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
	<?php the_field('callout_section_content'); ?>
	

<?php
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
