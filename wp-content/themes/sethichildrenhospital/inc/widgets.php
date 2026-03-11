<?php
/**
 * Widget areas (sidebars).
 */

if (!defined('ABSPATH')) {
    exit;
}

function sch_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'sethichildrenhospital'),
        'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget', 'sethichildrenhospital'),
        'id'            => 'footer-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'sch_widgets_init');
