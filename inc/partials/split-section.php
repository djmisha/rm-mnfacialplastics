
  <?php
    $headline = get_sub_field('headline');
    $image = get_sub_field('image');
    $content = get_sub_field('content');
    $id = get_sub_field('id');
    $bg = get_sub_field('image');
  ?>



<div class="page-feature-wrap">
  <div class="page-feature flexible-split-section" id="<?php echo $id; ?>">
    <div class="feature-content">
      <div class="box-with-border">
        <div class="inside-box">
          <h2><?php echo $headline; ?></h2> 
          <?php echo $content; ?>
        </div>
      </div>
    </div>
    <div class="feature-image b-lazy" data-src="<?php echo $bg; ?>"></div>
    <div class="bg-underlay"></div>
  </div>
</div>


  