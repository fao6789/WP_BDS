<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bds-datxanh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="header">
	<div class="box-header">
		<div class="container">
			<div class="top-header">
				<div class="row">
					<div class="logo col-md-3">
						<?php
						the_custom_logo();
							?>
					</div>
					<div class="banner-top  col-md-9">
						<img src="<?= get_template_directory_uri()?>/assets/img/baner2-2.jpg" alt="banner" title="banner">
					</div>
				</div>
			</div>
	</div>
	<div class="menu mt-3">
				<div class="container">
				<nav class="navbar navbar-expand-lg ">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<?php
								wp_nav_menu( array(
							'theme_location'    => 'menu-1',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav ',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						) );
									?>
					</div>
				</nav>
			</div>
		</div>
	</div>

	<?php
	$query = new WP_Query(array(
		'post_type'=>"page",
		'p'=>52,
	));
	

	if ( $query->have_posts() ) :while ( $query->have_posts() ) : $query->the_post();
	$slide_top = get_field('list_slide');
	// var_dump($slide_top);
	
	?>
	<div class="slide-header">
		<div class="owl-carousel owl-theme owl-loaded" id="slider-header">
			<div class="owl-stage-outer">
				<div class="owl-stage">
			<?php 
			foreach($slide_top as $value ):
			?>
					<div class="owl-item">
						<a href="<?= $value["link"];?>" title="<?= $value["title"];?>">
							<img src="<?= $value["img"]["url"]; ?>" alt="<?= $value["title"];?>">
						</a>
					</div>
					<?php
						endforeach;
					?>
				</div>
			</div>
		</div>
	</div>

	<?php


	endwhile;
endif;
wp_reset_postdata();
	?>
	
</div>


		

