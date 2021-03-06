<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">



		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.


			// First post full page rest only excerpts

			if (  $wp_query->current_post == 0 ) {
		
				        get_template_part( 'template-parts/content', 'single' );

                                        $ttt=get_the_ID();
				 	
					echo '<aside id="other-posts" class="content-bottom-widgets" role="complementary"><div class=widget-area><section id=other-posts class=widget><h2 class=widget-title>Leia mais</h2>';


				}
				else {
					get_template_part( 'template-parts/content', 'excerpt' );
				}


			// End of the loop.
		endwhile;

		

	// Show excerpts of the other posts

        $all_posts = new WP_Query( array( 'posts_per_page' => 3, 'post__not_in' => array( $ttt) ) );
        while( $all_posts->have_posts() ):
    $all_posts->the_post();
    // your markup for all posts

get_template_part( 'template-parts/content', 'excerpt' );

endwhile;


wp_reset_postdata();





                echo '</section></div></aside></main><!-- .site-main -->';



			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		
		?>



	

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>