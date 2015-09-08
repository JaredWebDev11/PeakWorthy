<?php
/**
 * @package my-simone
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php
		/* translators: used between list items, there is a space after the comma */
		$category_list = get_the_category_list( __( ', ', 'my-simone' ) );

	//	 if ( my_simone_categorized_blog() ) {
	//		echo '<div class="category-list">' . $category_list . '</div>';
	//	}
		// the last comments take out the categories from above the title page.

		?>

		<?php get_sidebar('top'); ?>  <!-- top ad widget here -->

		<h1 class="entry-title"><?php the_title(); ?></h1>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<?php wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( '', 'my-simone' ),
			'after'       => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<div class="entry-header2">
	<?php get_sidebar('bottom'); ?>  <!-- bottom ad widget here -->
	</div>

<?php
	// Previous/next post navigation.
	the_post_navigation( array(
	'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'my-simone' ) . '</span> ' .
	'<span class="screen-reader-text">' . __( 'Next post:', 'my-simone' ) . '</span> ' .
	'<span class="post-title">%title</span>',
	'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'my-simone' ) . '</span> ' .
	'<span class="screen-reader-text">' . __( 'Previous post:', 'my-simone' ) . '</span> ' .
	'<span class="post-title">%title</span>',
	) );
	?>

	<footer class="entry-footer">

		<?php
		echo get_the_tag_list( '<ul><li><i class="fa fa-tag"></i>', '</li><li><i class="fa fa-tag"></i>', '</li></ul>' );
		?>


		<?php edit_post_link( __( 'Edit', 'my-simone' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
