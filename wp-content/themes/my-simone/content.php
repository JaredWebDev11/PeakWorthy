<?php
/**
 * @package my-simone
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
//	if( $wp_query->current_post == 0 && !is_paged() && is_front_page() ) { // Custom template for the first post on the front page
//		if (has_post_thumbnail()) {
//			echo '<div class="front-index-thumbnail clear">';
//			echo '<div class="image-shifter">';
//			echo '<a href="' . get_permalink() . '" title="' . __('Read ', 'my-simone') . get_the_title() . '" rel="bookmark">';
//			echo the_post_thumbnail('large-thumb');
//			echo '</a>';
//			echo '</div>';
//			echo '</div>';
//		}
//		echo '<div class="index-box';
//		if (has_post_thumbnail()) { echo ' has-thumbnail'; };
//		echo '">';
//	} else {
		echo '<div class="index-box">';
		if (has_post_thumbnail()) {
			echo '<div class="small-index-thumbnail clear">';
			echo '<a href="' . get_permalink() . '" title="' . __('Read ', 'my-simone') . get_the_title() . '" rel="bookmark">';
			echo the_post_thumbnail('index-thumb');
			echo '</a>';
			echo '</div>';
		}

	?>
	<div class="index-box">
	<header class="entry-header">

		<?php get_sidebar('top'); ?>  <!-- top ad widget here -->

		<?php
		if (is_sticky()) {
			echo '<i class="fa fa-thumb-tack sticky-post"></i>';
		}
		?>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>

		<?php endif; ?>
	</header><!-- .entry-header -->

		<div class="entry-meta">
		</div><!-- .entry-meta -->  <!-- this is the div that controls the thumbnail picture on content index pages -->

	<?php
	if( $wp_query->current_post == 0 && !is_paged() && is_front_page() ) {
		echo '<div class="entry-content">';
		the_excerpt( __( '', 'my-simone' ) );
		echo '</div>';
	} else { ?>
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->
		<footer class="entry-footer continue-reading">
		</footer><!-- .entry-footer -->
	<?php } ?>
	</div><!-- .index-box -->
</article><!-- #post-## -->
