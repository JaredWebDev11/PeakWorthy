<?php
/**
Widget area that goes just above the next and previous page buttons (Mobile Only)
 */

if ( ! is_active_sidebar( 'sidebar-9' ) ) {
    return;
}
?>

<div id="supplementary">
    <div id="above-nav-widgets-mobile" class="above-nav-widgets-mobile" role="complementary">
        <?php dynamic_sidebar( 'sidebar-9' ); ?>
    </div><!-- #bottom-sidebar -->
</div><!-- #supplementary -->