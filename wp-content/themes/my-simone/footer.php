<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package my-simone
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            <?php get_sidebar('footer'); ?>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://localhost', 'my-simone' ) ); ?>"><?php print'<div class="copyWrite">Peak Worthy Copywrite &copy 2015</div>'; ?></a>
			<a href="<?php echo esc_url( __( 'http://localhost/dmca/', 'my-simone' ) ); ?>"><?php printf( __( 'DMCA', 'my-simone' ) ); ?></a>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'http://localhost/privacy-policy/' ) ); ?>"><?php printf( __( 'Privacy Policy', 'my-simone') ); ?></a>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'http://localhost/terms-of-use/', 'my-simone' ) ); ?>"><?php printf( __( 'Terms Of Use', 'my-simone') ); ?></a>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'http://localhost/fair-use-disclaimer/', 'my-simone' ) ); ?>"><?php printf( __( 'Fair Use Policy', 'my-simone' ) ); ?></a>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'http://localhost/contact-us/', 'my-simone' ) ); ?>"><?php printf( __( 'Contact Us', 'my-simone' ) ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<!-- 'Peak Worthy Copywrite &copy 2015' -->

