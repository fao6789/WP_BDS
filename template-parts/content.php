<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bds-datxanh
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<!-- <div class="entry-meta">
				<?php
				// bds_datxanh_posted_on();
				// bds_datxanh_posted_by();
				?>
			</div> -->
			<!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php
	//  bds_datxanh_post_thumbnail();
	  ?>
	<div class="silde-post">
		<div class="owl-carousel owl-theme owl-loaded" id="slider-single">
				<div class="owl-stage-outer">
					<div class="owl-stage">
				<?php 
				$slide_top = get_field('list_slide_single');
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
	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bds-datxanh' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		// wp_link_pages( array(
		// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bds-datxanh' ),
		// 	'after'  => '</div>',
		// ) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php 
		// bds_datxanh_entry_footer(); 
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
