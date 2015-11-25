<?php
/**
Widget area that goes just above the next and previous page buttons
 */

if ( ! is_active_sidebar( 'sidebar-8' ) ) {
    return;
}
?>

<div id="supplementary">
    <div id="above-nav-widgets" class="above-nav-widgets" role="complementary">
        <?php dynamic_sidebar( 'sidebar-8' ); ?>
    </div><!-- #bottom-sidebar -->
</div><!-- #supplementary -->