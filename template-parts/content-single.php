<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="section featured-area" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center">
			<div class="title">
				<h1><?php the_title(); ?></h1>
			</div>
			
		</div>

		<div class="content">
			<div class="container">
				<div class="entry-content">
					<?php
						the_content();

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );

						if ( '' !== get_the_author_meta( 'description' ) ) {
							get_template_part( 'template-parts/biography' );
						}
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<section class="meta">By <?php the_author(); ?> | <?php the_time('M j, Y'); ?></section>
				</footer><!-- .entry-footer -->

				<?php 
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
				?>
			</div>
		</div>

</article><!-- #post-## -->
