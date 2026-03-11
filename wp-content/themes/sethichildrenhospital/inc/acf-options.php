<?php
/**
 * ACF Options Pages Registration
 * Adds "Sethi Hospital" menu in admin sidebar with Header & Footer sub-pages.
 */

if (!defined('ABSPATH')) exit;

function sch_register_acf_options_pages() {

    if (!function_exists('acf_add_options_page')) {
        return;
    }

    $parent = acf_add_options_page(array(
        'page_title'    => __('Sethi Hospital Settings', 'sethichildrenhospital'),
        'menu_title'    => __('Sethi Hospital', 'sethichildrenhospital'),
        'menu_slug'     => 'sch-settings',
        'capability'    => 'manage_options',
        'redirect'      => true,
        'icon_url'      => 'dashicons-heart',
        'position'      => 2,
    ));

    acf_add_options_page(array(
        'page_title'    => __('Header Settings', 'sethichildrenhospital'),
        'menu_title'    => __('Header', 'sethichildrenhospital'),
        'menu_slug'     => 'sch-header-settings',
        'parent_slug'   => $parent['menu_slug'],
        'capability'    => 'manage_options',
        'update_button' => __('Save Header', 'sethichildrenhospital'),
        'updated_message' => __('Header settings saved.', 'sethichildrenhospital'),
    ));

    acf_add_options_page(array(
        'page_title'    => __('Footer Settings', 'sethichildrenhospital'),
        'menu_title'    => __('Footer', 'sethichildrenhospital'),
        'menu_slug'     => 'sch-footer-settings',
        'parent_slug'   => $parent['menu_slug'],
        'capability'    => 'manage_options',
        'update_button' => __('Save Footer', 'sethichildrenhospital'),
        'updated_message' => __('Footer settings saved.', 'sethichildrenhospital'),
    ));
}
add_action('acf/init', 'sch_register_acf_options_pages');
