<?php
/**
Bottom widget for Mobile
 */

if ( ! is_active_sidebar( 'sidebar-6' ) ) {
    return;
}
?>

<div id="supplementary">
    <div id="bottom-widgets-mobile" class="bottom-widgets-mobile" role="complementary">
        <?php dynamic_sidebar( 'sidebar-6' ); ?>
    </div><!-- #bottom-sidebar -->
</div><!-- #supplementary -->