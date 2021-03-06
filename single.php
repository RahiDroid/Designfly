<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DesignFly
 */

get_header();
?>

<div id="single-post-wrapper" class="container">
		<div class="row">
			<div class="col-md-8">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

							// the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) : ?>
							<div class="comments-wrapper">
								<p class="bars"><?php esc_html_e( 'Comments', 'designfly' ); ?></p>
							<?php comments_template(); ?>
							</div>
						<?php
						endif;

					endwhile; // End of the loop.
					?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .col-md -->

			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>

		</div><!-- .row -->
</div><!-- #single-post-wrapper -->
<?php
get_footer();
