<?php
/**
 * @package my-simone
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="index-box">

		<?php get_sidebar('topMobile'); ?>  <!-- top (MOBILE) ad widget here -->
		<?php get_sidebar('top'); ?>  <!-- top ad widget here -->

		<?php
		if (is_sticky()) {
			echo '<i class="fa fa-thumb-tack sticky-post"></i>';
		}
		?>

		<?php
		echo '<div class="index-box">';
		if (has_post_thumbnail()) {
			echo '<div class="small-index-thumbnail clear">';
			echo '<a href="' . get_permalink() . '" title="' . __('Read ', 'my-simone') . get_the_title() . '" rel="bookmark">';
			echo the_post_thumbnail('index-thumb');
			echo '</a>';
			echo '</div>';
		}
		?>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>

		<?php endif; ?>

	<?php ?>
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->
	<?php ?>
	</div><!-- .index-box -->
</article><!-- #post-## -->
