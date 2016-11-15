<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 

// get feat img
$id = get_queried_object_id();
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' );
$url = $image[0];

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="blog">
	<div class="section featured-area" style="background: url(<?php echo $url; ?>) no-repeat center center">
		<div class="title">
			<h1>Blog</h1>
		</div>
	</div>
	<div class="blog-underline"></div>
	<div class="section content">
		<div class="container">
			<div class="left-side">
				<?php echo do_shortcode('[searchandfilter id="44" show="results"]');  ?>
				<?php if ( have_posts() ) : ?>
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
						
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						//get_template_part( 'template-parts/content', get_post_format() );


					// End the loop.
					endwhile;

					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'twentysixteen' ),
						'next_text'          => __( 'Next page', 'twentysixteen' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
					) );

				endif;
				?>
			</div>
			<div class="right-side">
				<div class="sidebar">
					<?php dynamic_sidebar('sidebar-categories');  ?>
				</div>
				
			</div>	
		</div>
	</div>
	</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
