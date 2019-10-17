
<section class="sticky-footer-bar">
	<div class="bar-hdng">Schedule a Consultation</div>
	<div class="bar-phones">
		<?php if(have_rows('locations', 'option')): ?>
			<?php while(have_rows('locations', 'option')): the_row(); ?>
				<i class="fas fa-mobile-alt"></i><a href="<?php the_sub_field('phone_link'); ?>" class="track-outbound head-phone" data-label="Phone - Header"><?php the_sub_field('phone'); ?></a>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="bar-buttons button-email">
		<a href="<?php bloginfo('url'); ?>/contact-us/" class="button"> Email Us</a> 
	</div>
</section>


<?php if( !this_is('gallery-case' || 'gallery-child' || 'gallery')): // Inside Page Title  ?>
<section class="footer-gallery b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-gallery.jpg">
	<div class="the-headline">View Our Gallery</div>
	<div class="the-buttons"> 
		<a href="<?php bloginfo('url'); ?>/gallery/surgical-procedures/" rel="nofollow" class="button">Surgical</a> 
		<a href="<?php bloginfo('url'); ?>/gallery/non-surgical-procedures/" rel="nofollow" class="button">Non-Surgical</a> 
		<a href="<?php bloginfo('url'); ?>/gallery/reconstructive-surgery/" rel="nofollow" class="button">Reconstructive</a> 
	</div>
</section>
<?php endif; ?>

<footer>
	<section class="upper-footer b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-footer.jpg">
		<span class="the-headline">Contact Us</span>
		<div class="footer-form">
			<?php echo do_shortcode('[seaforms name="footer-contact"]'); ?>
		</div>
		<div class="footer-locations">
			 <div class="footer-address">
				<?php if(have_rows('locations', 'option')): ?>
					<?php while(have_rows('locations', 'option')): the_row(); ?>
						<div class="the-loc">
							<a href="<?php the_sub_field('map_link', 'option'); ?>" class="track-outbound loc-name" data-label="Address - Footer" target="_blank"  rel="noopener">
							<i class="fas fa-map-marker-alt"></i>
							<div class="loc-addy"><?php the_sub_field('address', 'option'); ?><br /> <?php the_sub_field('city', 'option'); ?></div>
							</a>
							</div>
							<div class="loc-phone">
								<a href="<?php the_sub_field('phone_link', 'option'); ?>" class="track-outbound" data-label="Phone - Footer">
									Phone: <?php the_sub_field('phone', 'option'); ?></a>
									<br>
									Fax: <?php the_sub_field('fax', 'option'); ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>


	<section class="lower-footer">
		<div class="trainded-wrapper">
			<div class="foot-headline">Fellowship-Trained Facial Plastic Surgeon</div>
			<div class="footer-logos">
				<?php if(have_rows('footer_logos', 'option')): ?>
					<ul>
						<?php while(have_rows('footer_logos', 'option')): the_row(); ?>
							<li>
								<img data-src="<?php the_sub_field('logo'); ?>" class="b-lazy" alt="logo">
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="footer-social">
				<div class="footer-social-headline">Stay Connected</div>
				<a href="<?php the_field('facebook','options'); ?>" target="_blank" rel="noopener" title="facebook" aria-label="facebook"><i class="fab fa-facebook"></i></a>
			</div>
		</div>
		<div class="reviews_markup"><?php do_action('reviews_markup'); ?></div>
		<div class="disclaimer">* Stock model images are used throughout this website and are for illustrative purposes only. All before-and-after photos and patient testimonials on our site are from actual patients, and have been published with permission. Individual results may vary.</div>
		<div class="copyright">Copyright &copy; <?=date("Y")?> <?php bloginfo('title');?>. All rights reserved | <a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a> | <a href="<?php bloginfo('url'); ?>/sitemap/" title="Sitemap">Sitemap</a> </div>
		<div class="rm-sig"><a href="<?php the_field('rm_footer_link', 'options'); ?>" target="_blank" rel="noopener" title="<?php the_field('rm_footer_text', 'options'); ?>"><?php the_field('rm_footer_text', 'options'); ?></a> by <a href="https://www.rosemontmedia.com/" title="Rosemont Media" target="_blank" rel="noopener">Rosemont Media</a></div>

		<div class="rm-logo"><a href="https://www.rosemontmedia.com/" title="Rosemont Media" target="_blank" rel="noopener">
			<?php inline_svg('rm-logo'); ?>
		</a></div>
	</section>


</footer>


<?php wp_footer();?>


<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:35730/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
//]]></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-29602403-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-29602403-2');
</script>



</body>
</html>
