<?php
add_shortcode('testimonial' , 'testimonial');
function testimonial( $atts , $content = null ){
	extract( shortcode_atts( array(
		'name'	=> '',

	), $atts , 'testimonial' ) );
		ob_start();

?>

<div class="testi-container">
	<div class="box-with-border">
		<div class="inside-box">
			<div class="the-testi">
			<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy icon-quote" data-src="<?php bloginfo('template_directory'); ?>/images/icon-quote.png" alt="ball">
			<?php the_field('testimonial'); ?>
			<div class="the-stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</div>
		</div>
	</div>
</div>
		
<?php
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
