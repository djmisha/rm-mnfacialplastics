<?php
  $testimonial = get_sub_field('testimonial');
  // $video = get_sub_field('video');
  // $service = get_sub_field('service');
  // $id = get_sub_field('id');
?>

<section>
  <div class="testi-container">
    <div class="box-with-border">
      <div class="inside-box">
        <div class="the-testi">
        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy icon-quote" data-src="<?php bloginfo('template_directory'); ?>/images/icon-quote.png" alt="ball">
        <?php echo $testimonial; ?>
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
</section>


