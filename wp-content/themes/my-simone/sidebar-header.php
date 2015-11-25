<?php
/**
top of site widget
 */

if ( ! is_active_sidebar( 'sidebar-10' ) ) {
    return;
}
?>

<div id="supplementary">
    <div id="header-widgets" class="header-widgets" role="complementary">
        <?php dynamic_sidebar( 'sidebar-10' ); ?>
    </div><!-- #top-sidebar -->
</div><!-- #supplementary -->