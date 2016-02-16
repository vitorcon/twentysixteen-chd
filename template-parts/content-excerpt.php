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
	<header class="entry-header">
		
<?php the_title( sprintf( '<h2 class="entry-title"><div class="excerpt"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></div></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content"><span class="excerpt">
	<a  href=<?php the_permalink(); ?>>
         <?php the_excerpt(); ?></a></span>

		<?php
			

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentysixteen_post_thumbnail(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->