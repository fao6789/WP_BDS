<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bds-datxanh
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
							
							<?php
							get_sidebar();
							?>
					</div>
					<div class="col-md-9 single">
					
					<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>
	<div class="fb-comments" data-href="https://www.facebook.com/milikets" data-width="100%" data-numposts="1"></div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
