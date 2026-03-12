<?php
/**
 * ACF Field Group: 404 Page (Options)
 */

if (!defined('ABSPATH')) exit;

function sch_register_404_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key'      => 'group_sch_404',
        'title'    => '404 Page Content',
        'fields'   => array(
            array('key' => 'field_sch_404_badge', 'label' => 'Badge Text', 'name' => 'p404_badge', 'type' => 'text', 'default_value' => 'Page Not Found', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_404_badge_icon', 'label' => 'Badge Icon (Lucide)', 'name' => 'p404_badge_icon', 'type' => 'text', 'default_value' => 'search-x', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_404_heading', 'label' => 'Heading (before 404)', 'name' => 'p404_heading', 'type' => 'text', 'default_value' => 'Oops!', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_404_heading_hl', 'label' => 'Heading Highlight (after 404)', 'name' => 'p404_heading_hl', 'type' => 'text', 'default_value' => '', 'placeholder' => 'e.g. Page not found', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_404_description', 'label' => 'Description', 'name' => 'p404_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.'),
            array('key' => 'field_sch_404_btn_link', 'label' => 'Button Link (e.g. Back to Home)', 'name' => 'p404_btn_link', 'type' => 'link', 'return_format' => 'array'),
            array('key' => 'field_sch_404_btn_icon', 'label' => 'Button Icon (Lucide)', 'name' => 'p404_btn_icon', 'type' => 'text', 'default_value' => 'home'),
        ),
        'location' => array(
            array(
                array('param' => 'options_page', 'operator' => '==', 'value' => 'sch-404-settings'),
            ),
        ),
        'menu_order' => 30,
        'style'      => 'default',
    ));
}
add_action('acf/init', 'sch_register_404_fields');
