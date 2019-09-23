<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="maximum-scale=5.0, user-scalable=yes, width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title><?php wp_title(""); ?></title>

	<?php if(!is_404()): ?>
		<?php miniCSS::url( 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i|Playfair+Display:400,400i|Source+Sans+Pro&display=swap' ); ?>
	<?php endif; ?>
	
	<?php wp_head()?>

</head>

<?php bodyClass(); ?>

<a href="#skiptomaincontent" style="display:none;">Skip to main content</a>

<header class="site-header <?php echo is_front_page() ? 'front-header' : 'int-header'; ?>" <?php get__header__image(); ?> >
	<div class="masthead-border"></div>
	<section class="masthead">
		<div class="logo">
			 <a href="<?php bloginfo('url'); ?>">
			 	<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"></a>
			 </a>
		</div>
		<div class="nav-bar-locations">
			<?php if(have_rows('locations', 'option')): ?>
				<?php while(have_rows('locations', 'option')): the_row(); ?>
					<div class="the-loc">
						<a href="<?php the_sub_field('phone_link'); ?>" class="track-outbound head-phone" data-label="Phone - Header"><i class="fas fa-mobile-alt"></i><?php the_sub_field('phone'); ?></a>
						<a href="<?php the_sub_field('map_link', 'option'); ?>" class="track-outbound head-addy" data-label="Address - Header" target="_blank"  rel="noopener">
							<i class="fas fa-map-marker-alt"></i><span><?php the_sub_field('address', 'option'); ?> | <?php the_sub_field('city', 'option'); ?></span>	
						</a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="menu-trigger">
			<div class="hamburger"></div>
			<div class="hamburger"></div>
			<div class="hamburger"></div>
		</div>
	</section>

	<section class="nav-bar">
		<nav>
			<?php wp_nav_menu( array(
				'menu' 		=> 'Main',
				'container_class' => 'menu-wrap menu-is-closed',
				'menu_id'	=> 'menu-main',
				'menu_class' => 'main-menu',
			)); ?>
		</nav>
	</section>

	

</header>

<?php if(!is_front_page() ): // Inside Page and H1 ?>
<section class="site-crumbs">
	<?php echo __salaciouscrumb(); ?>
</section>

<section class="page-title">
	<?php if(is_front_page()): ?>
		<?php // do nothing if homepage  ?>
	<?php elseif(this_is('gallery-case')): ?>
		<?php $category_title =  get_the_title($post->in_cat_ID); ?>
		<h1><?php echo $category_title ?> Gallery</h1>
	<?php elseif(this_is('gallery-child')): ?>
		<?php $category_title =  get_the_title($post->in_cat_ID); ?>
		<h1><?php echo $category_title ?>  Gallery</h1>
	<?php elseif(this_is('gallery')): ?>
		<h1>Before &amp; After Gallery</h1>
	<?php elseif (is_search()): ?>
		<div class="heading-text">Search Results</div>
	<?php elseif (is_home() or is_archive()): ?>
		<h1>Blog</h1>
	<?php elseif (is_single()): ?>
		<div class="heading-text">Blog</div>
	<?php else: ?>
		<h1><?php the_title();?></h1>
	<?php endif; ?>
</section>
<?php endif; ?>

