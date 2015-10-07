<?php
/**
Top widget for Mobile
 */

if ( ! is_active_sidebar( 'sidebar-5' ) ) {
    return;
}
?>

<div id="supplementary">
    <div id="top-widgets-mobile" class="top-widgets-mobile" role="complementary">
        <?php dynamic_sidebar( 'sidebar-5' ); ?>
    </div><!-- #bottom-sidebar -->
</div><!-- #supplementary -->