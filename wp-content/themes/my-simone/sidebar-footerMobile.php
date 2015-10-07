<?php
/**
Footer widget for Mobile phones
 */

if ( ! is_active_sidebar( 'sidebar-7' ) ) {
    return;
}
?>

<div id="supplementary">
    <div id="footer-widgets-mobile" class="footer-widgets-mobile widget-area clear" role="complementary">
        <?php dynamic_sidebar( 'sidebar-7' ); ?>
    </div><!-- #bottom-sidebar -->
</div><!-- #supplementary -->