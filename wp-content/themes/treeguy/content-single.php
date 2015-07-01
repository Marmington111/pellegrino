<?php
/**
 * @package treeguy
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php 
	if (has_post_thumbnail()) {
	    echo '<div class="single-post-thumbnail clear">';
	    echo '<div class="image-shifter">';
	    echo the_post_thumbnail();
	    echo '</div>';
	    echo '</div>';
	}
	?>

	<header class="entry-header">	
		<?php treeguy_entry_header(); ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php treeguy_posted_on(); ?>
			<?php treeguy_entry_comment(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'treeguy' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php treeguy_entry_footer(); ?> 
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->