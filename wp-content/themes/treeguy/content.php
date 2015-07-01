<?php
/**
 * @package treeguy
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="index-box">
	<?php
	if (has_post_thumbnail()) {
	    echo '<div class="small-index-thumbnail clear">';
	    echo '<a href="' . get_permalink() . '" title="' . __('Read ', 'treeguy') . get_the_title() . '" rel="bookmark">';
	    echo the_post_thumbnail('index-thumb');
	    echo '</a>';
	    echo '</div>';
	}
	?>
	<header class="entry-header">
		<?php treeguy_entry_header(); ?>
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php treeguy_posted_on(); ?>
			<?php treeguy_entry_comment(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<div class="entry-content">
		    <?php the_excerpt(); ?>
		</div><!-- .entry-content -->
	

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'treeguy' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer continue-reading">
	    <?php echo '<a href="' . get_permalink() . '" title="' . __('Continue Reading ', 'treeguy') . get_the_title() . '" rel="bookmark">Continue Reading<i class="fa fa-arrow-circle-o-right"></i></a>'; ?>
	</footer><!-- .entry-footer -->
</div><!-- index-box -- >
</article><!-- #post-## -->