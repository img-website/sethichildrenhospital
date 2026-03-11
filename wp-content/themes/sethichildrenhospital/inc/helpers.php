<?php
/**
 * Theme helper functions.
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Safe ACF get_field: returns null if ACF is inactive (no fatal error).
 */
function sch_get_field($selector, $post_id = null, $format_value = true) {
    if (!function_exists('get_field')) {
        return null;
    }
    return get_field($selector, $post_id, $format_value);
}

function sch_img($filename) {
    return SCH_THEME_URI . '/assets/images/' . $filename;
}

function sch_get_logo_url() {
    $custom_logo_id = get_theme_mod('custom_logo');
    if ($custom_logo_id) {
        return wp_get_attachment_image_url($custom_logo_id, 'full');
    }
    return sch_img('sethi-hospital-logo.webp');
}

function sch_get_header_logo_url() {
    $url = sch_get_field('header_logo', 'option');
    if (!empty($url)) {
        return is_array($url) ? ($url['url'] ?? '') : $url;
    }
    return sch_get_logo_url();
}

function sch_get_footer_logo_url() {
    $url = sch_get_field('footer_logo', 'option');
    if (!empty($url)) {
        return is_array($url) ? ($url['url'] ?? '') : $url;
    }
    $url = sch_get_field('header_logo', 'option');
    if (!empty($url)) {
        return is_array($url) ? ($url['url'] ?? '') : $url;
    }
    return sch_get_logo_url();
}

function sch_option($field_name, $fallback = '') {
    $val = sch_get_field($field_name, 'option');
    return $val !== null && $val !== '' ? $val : $fallback;
}
