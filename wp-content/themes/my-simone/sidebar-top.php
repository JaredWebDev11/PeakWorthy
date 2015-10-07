<?php
/**
 top of site widget
 */

if ( ! is_active_sidebar( 'sidebar-3' ) ) {
    return;
}
?>

<div id="supplementary">
    <div id="top-widgets" class="top-widgets" role="complementary">
        <?php dynamic_sidebar( 'sidebar-3' ); ?>
    </div><!-- #top-sidebar -->
</div><!-- #supplementary -->