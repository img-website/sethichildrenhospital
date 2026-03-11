<?php
/**
 * Custom Navigation Walkers for Tailwind-styled menus
 */

if (!defined('ABSPATH')) exit;

/**
 * Flat Nav Walker — outputs only <a> tags (no ul/li).
 * Used for desktop header navigation.
 */
class SCH_Flat_Nav_Walker extends Walker_Nav_Menu {

    private $link_class;

    public function __construct($link_class = '') {
        $this->link_class = $link_class;
    }

    public function start_lvl(&$output, $depth = 0, $args = null) {}
    public function end_lvl(&$output, $depth = 0, $args = null) {}

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $active = in_array('current-menu-item', (array) $item->classes) ? ' text-primary' : '';
        $output .= sprintf(
            '<a href="%s" class="%s">%s</a>',
            esc_url($item->url),
            esc_attr($this->link_class . $active),
            esc_html($item->title)
        );
    }

    public function end_el(&$output, $item, $depth = 0, $args = null) {}
}

/**
 * List Nav Walker — outputs <li><a> with custom classes.
 * Used for overlay menu and footer menus.
 */
class SCH_List_Nav_Walker extends Walker_Nav_Menu {

    private $link_class;

    public function __construct($link_class = '') {
        $this->link_class = $link_class;
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $active = in_array('current-menu-item', (array) $item->classes) ? ' text-primary' : '';
        $output .= '<li>';
        $output .= sprintf(
            '<a href="%s" class="%s">%s</a>',
            esc_url($item->url),
            esc_attr($this->link_class . $active),
            esc_html($item->title)
        );
    }

    public function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= '</li>';
    }
}
