<?php
/**
 * Template Name: Portfolio Page
 *
 * The template for displaying portfolio
 *
 * This is the template that displays all portfolio items.
 * 
 * @package DesignFly
 * 
 * @since 1.0.3
 * 
 */

 get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">

	<?php
	$args = array(
		'post_type'      => 'df-portfolio', 
		'posts_per_page' => '6',
	);

	$query = new WP_Query( $args );

	if ( $query -> have_posts() ):
		if ( get_theme_mod( 'designfly-home-display-portfolio', 'Yes' ) == 'Yes' ):
	?>
		<div id="portfolio-wrapper_home">
		
			<!-- top bar -->
			<div class="portfolio-wrapper_home-top">
				<p class="title"> <?php echo esc_html__( get_theme_mod( 'designfly-home-portfolio-title', 'd\'sign is the soul' ) ); ?> </p>
				<a href=" <?php echo get_permalink( get_theme_mod( 'designfly-home-portfolio-btn', '#' ) ); ?>" id="portfolio-view-all">view all</a>
				<hr />
			</div>

		<?php
		while ( $query -> have_posts() ):
			$query -> the_post();
			get_template_part( 'template-parts/content', 'df-portfolio' );  
		endwhile;
		?>
			
			</div>

		<?php
			endif;
		else:
		?>
		<p>
			<?php _e( 'Sorry, no portfolio items found.', 'textdomain' ); ?>
		</p>
	<?php
	endif;
	?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();
?>