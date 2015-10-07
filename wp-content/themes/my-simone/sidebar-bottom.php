<?php
/**
    bottom of site widget
 */

if ( ! is_active_sidebar( 'sidebar-4' ) ) {
    return;
}
?>

<div id="supplementary">
    <div id="bottom-widgets" class="bottom-widgets" role="complementary">
        <?php dynamic_sidebar( 'sidebar-4' ); ?>
    </div><!-- #bottom-sidebar -->
</div><!-- #supplementary -->