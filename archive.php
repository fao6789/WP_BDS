<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bds-datxanh
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main archive">
			<div class="container">
			<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs" class="blog-breadcrumbs">','</p>');} ?>
			<div class="row">
				<div class="col-md-3">
					<?php  get_sidebar();?>
				</div>
				<div class="col-md-9 ">

					<div class="row">
						<?php   if(have_posts()) : while (have_posts()) : the_post();?>
							<div class="col-md-4 mt-3 box-bg ">
								<div class="box-card">
									<div class="box-img">
											<a href="<?= get_permalink()?>">
												<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title()?>">
											</a>
									</div>
									<div class="box-title mt-2">
										<a href="<?php get_permalink();?>">
											<h3><?php the_title()?></h3>
										</a>
									</div>
									<div class="box-descrep mt-2">
										<p><?php the_excerpt(); ?> </p>
									</div>
									<div class="box-more mt-2">
										<a href="<?= get_permalink()?>"><p>Xem thêm </p></a>
									</div>
								</div>
							</div>
							<?php
                
                        endwhile;
                        endif;
                    ?>

					</div>
				</div>
				
			</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
