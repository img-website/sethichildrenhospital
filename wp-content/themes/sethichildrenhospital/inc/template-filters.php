<?php
/**
 * Template filters: resource hints, html/body classes.
 */

if (!defined('ABSPATH')) {
    exit;
}

function sch_resource_hints($urls, $relation_type) {
    if ($relation_type === 'preconnect') {
        $urls[] = array('href' => 'https://fonts.googleapis.com');
        $urls[] = array('href' => 'https://fonts.gstatic.com', 'crossorigin' => 'anonymous');
    }
    return $urls;
}
add_filter('wp_resource_hints', 'sch_resource_hints', 10, 2);

function sch_html_classes($output) {
    $output .= ' scroll-smooth lg:text-[1vw]';
    return $output;
}
add_filter('language_attributes', 'sch_html_classes');

function sch_body_classes($classes) {
    $classes[] = 'bg-white';
    $classes[] = 'text-gray-800';
    $classes[] = 'antialiased';
    $classes[] = 'overflow-x-hidden';
    $classes[] = 'font-poppins';
    $classes[] = 'leading-relaxed';
    return $classes;
}
add_filter('body_class', 'sch_body_classes');
