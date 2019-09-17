<!-- 
<section class="sticky-footer-bar">
	<div class="bar-contact">Contact Us</div>
	<div class="bar-phones">
		<?php inline_svg('icon-phone'); ?>
		<?php if(have_rows('locations', 'option')): ?>
			<?php while(have_rows('locations', 'option')): the_row(); ?>
				<a href="<?php the_sub_field('phone_link'); ?>" class="track-outbound head-phone" data-label="Phone - Header"><?php the_sub_field('phone'); ?></a>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="bar-or">or</div>
	<div class="bar-buttons button-email">
		<?php inline_svg('icon-email'); ?>
		<a href="<?php bloginfo('url'); ?>/contact-us/" class="button"> Email Us</a> 
	</div>
	<div class="bar-or">or</div>
	<div class="bar-buttons button-patient">
		<?php inline_svg('icon-patient'); ?>
		<a href="https://mypay.poscorp.com/suburbansurgicalcare#/account/login" class="button" rel="nofollow noopener" target="_blank">Patient Portal</a>
	</div>
</section> -->


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
							<i class="fas fa-map-marker-alt"></i>
							<!-- <span><?php the_sub_field('name', 'option'); ?></span><br> -->
							<div class="loc-addy">
								
								<?php the_sub_field('address', 'option'); ?><br /> <?php the_sub_field('city', 'option'); ?>
							</a>
							</div>
							<div class="loc-phone">
								<a href="<?php the_sub_field('phone_link', 'option'); ?>" class="track-outbound" data-label="Phone - Footer">
									Phone: <?php the_sub_field('phone', 'option'); ?></a>
									<br>
									Fax: <?php the_sub_field('fax', 'option'); ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>


	<section class="lower-footer">
		<div class="trainded-wrapper">
			<div class="foot-headline">Fellowship Trained Facial Plastic Surgeon</div>
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



</body>
</html>
