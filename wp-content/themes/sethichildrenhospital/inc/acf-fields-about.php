<?php
/**
 * ACF Field Group: About Us Page
 * Section-wise tabs for CMS.
 */

if (!defined('ABSPATH')) exit;

function sch_register_about_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key'      => 'group_sch_about',
        'title'    => 'About Us Page Sections',
        'fields'   => array(

            // ── Tab: Hero ──
            array('key' => 'field_sch_about_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
            array(
                'key'   => 'field_sch_about_hero_badge',
                'label' => 'Badge Text',
                'name'  => 'about_hero_badge',
                'type'  => 'text',
                'default_value' => 'Sethi Hospital Overview',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_about_hero_badge_icon',
                'label'        => 'Badge Icon (Lucide)',
                'name'         => 'about_hero_badge_icon',
                'type'         => 'text',
                'placeholder'  => 'e.g. heart-pulse',
                'default_value' => 'heart-pulse',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'   => 'field_sch_about_hero_heading',
                'label' => 'Heading',
                'name'  => 'about_hero_heading',
                'type'  => 'text',
                'default_value' => "We are a unique centre of excellence for",
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key'   => 'field_sch_about_hero_heading_highlight',
                'label' => 'Heading Highlight (colored part)',
                'name'  => 'about_hero_heading_highlight',
                'type'  => 'text',
                'default_value' => "children's healthcare",
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key'   => 'field_sch_about_hero_heading_suffix',
                'label' => 'Heading Suffix (after highlight)',
                'name'  => 'about_hero_heading_suffix',
                'type'  => 'text',
                'default_value' => ' in the state.',
                'wrapper' => array('width' => '100'),
            ),

            // ── Tab: About Content ──
            array('key' => 'field_sch_about_tab_content', 'label' => 'About Content', 'type' => 'tab'),
            array(
                'key'   => 'field_sch_about_main_content',
                'label' => 'Main Content',
                'name'  => 'about_main_content',
                'type'  => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'full',
            ),
            array(
                'key'          => 'field_sch_about_stats',
                'label'        => 'Stats Cards',
                'name'         => 'about_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Stat',
                'max'          => 4,
                'sub_fields'   => array(
                    array('key' => 'field_sch_about_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text', 'placeholder' => '75+'),
                    array('key' => 'field_sch_about_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'placeholder' => 'Total Beds'),
                    array(
                        'key'     => 'field_sch_about_stat_color',
                        'label'   => 'Color',
                        'name'    => 'color',
                        'type'    => 'select',
                        'choices' => array('primary' => 'Primary (Green)', 'secondary' => 'Secondary (Purple)', 'accent' => 'Accent', 'pink' => 'Pink'),
                        'default_value' => 'primary',
                    ),
                ),
            ),
            array(
                'key'   => 'field_sch_about_highlight_text',
                'label' => 'Highlight Box Text',
                'name'  => 'about_highlight_text',
                'type'  => 'textarea',
                'rows'  => 3,
                'default_value' => 'SETHI CHILDREN HOSPITAL provides primary, secondary and tertiary care services all under one roof. SETHI CHILDERN HOSPITAL is largest exclusive pediatric hospital in nearby districts and one of the largest in state.',
            ),

            // ── Tab: Sidebar (Vision, Mission, Highlights) ──
            array('key' => 'field_sch_about_tab_sidebar', 'label' => 'Sidebar', 'type' => 'tab'),
            array(
                'key'   => 'field_sch_about_vision_icon',
                'label' => 'Vision Icon (Lucide)',
                'name'  => 'about_vision_icon',
                'type'  => 'text',
                'default_value' => 'eye',
                'wrapper' => array('width' => '33'),
            ),
            array(
                'key'   => 'field_sch_about_vision_heading',
                'label' => 'Vision Heading',
                'name'  => 'about_vision_heading',
                'type'  => 'text',
                'default_value' => 'Our Vision',
                'wrapper' => array('width' => '33'),
            ),
            array(
                'key'   => 'field_sch_about_vision_text',
                'label' => 'Vision Text',
                'name'  => 'about_vision_text',
                'type'  => 'textarea',
                'rows'  => 4,
                'wrapper' => array('width' => '34'),
            ),
            array(
                'key'   => 'field_sch_about_mission_icon',
                'label' => 'Mission Icon (Lucide)',
                'name'  => 'about_mission_icon',
                'type'  => 'text',
                'default_value' => 'target',
                'wrapper' => array('width' => '33'),
            ),
            array(
                'key'   => 'field_sch_about_mission_heading',
                'label' => 'Mission Heading',
                'name'  => 'about_mission_heading',
                'type'  => 'text',
                'default_value' => 'Our Mission',
                'wrapper' => array('width' => '33'),
            ),
            array(
                'key'   => 'field_sch_about_mission_text',
                'label' => 'Mission Text',
                'name'  => 'about_mission_text',
                'type'  => 'textarea',
                'rows'  => 4,
                'wrapper' => array('width' => '34'),
            ),
            array(
                'key'   => 'field_sch_about_highlights_heading',
                'label' => 'Key Highlights Heading',
                'name'  => 'about_highlights_heading',
                'type'  => 'text',
                'default_value' => 'Key Highlights',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_about_highlights_icon',
                'label'        => 'Key Highlights Icon (Lucide)',
                'name'         => 'about_highlights_icon',
                'type'         => 'text',
                'default_value' => 'award',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_about_highlights_items',
                'label'        => 'Highlight Items',
                'name'         => 'about_highlights_items',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Item',
                'sub_fields'   => array(
                    array('key' => 'field_sch_about_hl_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text'),
                    array('key' => 'field_sch_about_hl_icon', 'label' => 'Icon (optional)', 'name' => 'icon', 'type' => 'text', 'placeholder' => 'check-circle'),
                ),
            ),

            // ── Tab: Services Overview ──
            array('key' => 'field_sch_about_tab_services', 'label' => 'Services Overview', 'type' => 'tab'),
            array('key' => 'field_sch_about_services_badge', 'label' => 'Badge', 'name' => 'about_services_badge', 'type' => 'text', 'default_value' => 'Comprehensive Care', 'wrapper' => array('width' => '33')),
            array('key' => 'field_sch_about_services_heading', 'label' => 'Heading', 'name' => 'about_services_heading', 'type' => 'text', 'default_value' => 'Our', 'wrapper' => array('width' => '33')),
            array('key' => 'field_sch_about_services_heading_hl', 'label' => 'Heading Highlight', 'name' => 'about_services_heading_highlight', 'type' => 'text', 'default_value' => 'Services', 'wrapper' => array('width' => '34')),
            array('key' => 'field_sch_about_services_desc', 'label' => 'Description', 'name' => 'about_services_description', 'type' => 'textarea', 'rows' => 2),
            array(
                'key'          => 'field_sch_about_services_list',
                'label'        => 'Service Cards',
                'name'         => 'about_services_list',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Service',
                'sub_fields'   => array(
                    array('key' => 'field_sch_about_svc_icon', 'label' => 'Icon (Lucide)', 'name' => 'icon', 'type' => 'text', 'placeholder' => 'users'),
                    array('key' => 'field_sch_about_svc_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_sch_about_svc_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2),
                    array(
                        'key'     => 'field_sch_about_svc_color',
                        'label'   => 'Color',
                        'name'    => 'color',
                        'type'    => 'select',
                        'choices' => array('primary' => 'Primary', 'secondary' => 'Secondary', 'purple' => 'Purple', 'pink' => 'Pink', 'blue' => 'Blue', 'red' => 'Red'),
                        'default_value' => 'primary',
                    ),
                ),
            ),

            // ── Tab: Appointment Banner ──
            array('key' => 'field_sch_about_tab_appt', 'label' => 'Appointment Banner', 'type' => 'tab'),
            array('key' => 'field_sch_about_appt_heading', 'label' => 'Heading Text', 'name' => 'about_appt_heading', 'type' => 'text', 'default_value' => 'FOR BOOKING APPOINTMENT, PLEASE CALL - 0144-2335565'),
            array('key' => 'field_sch_about_appt_heading_icon', 'label' => 'Heading Icon (Lucide)', 'name' => 'about_appt_heading_icon', 'type' => 'text', 'default_value' => 'phone'),
            array('key' => 'field_sch_about_appt_btn_link', 'label' => 'Button Link', 'name' => 'about_appt_btn_link', 'type' => 'link', 'return_format' => 'array'),
            array('key' => 'field_sch_about_appt_btn_icon', 'label' => 'Button Icon (Lucide)', 'name' => 'about_appt_btn_icon', 'type' => 'text', 'default_value' => 'calendar-check'),
        ),
        'location' => array(
            array(
                array('param' => 'page_template', 'operator' => '==', 'value' => 'page-about-us.php'),
            ),
        ),
        'menu_order' => 5,
        'style'      => 'default',
    ));
}
add_action('acf/init', 'sch_register_about_fields');
