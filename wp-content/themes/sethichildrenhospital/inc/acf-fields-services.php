<?php
/**
 * ACF Field Group: Services Page
 * Section-wise tabs for CMS.
 */

if (!defined('ABSPATH')) exit;

function sch_register_services_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key'      => 'group_sch_services',
        'title'    => 'Services Page Sections',
        'fields'   => array(

            // ── Tab: Hero ──
            array('key' => 'field_sch_services_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
            array(
                'key'   => 'field_sch_services_hero_badge',
                'label' => 'Badge Text',
                'name'  => 'services_hero_badge',
                'type'  => 'text',
                'default_value' => 'Comprehensive Care',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_services_hero_badge_icon',
                'label'        => 'Badge Icon (Lucide)',
                'name'         => 'services_hero_badge_icon',
                'type'         => 'text',
                'default_value' => 'stethoscope',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'   => 'field_sch_services_hero_heading',
                'label' => 'Heading',
                'name'  => 'services_hero_heading',
                'type'  => 'text',
                'default_value' => 'Our',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key'   => 'field_sch_services_hero_heading_highlight',
                'label' => 'Heading Highlight (colored part)',
                'name'  => 'services_hero_heading_highlight',
                'type'  => 'text',
                'default_value' => 'Services',
                'wrapper' => array('width' => '50'),
            ),

            // ── Tab: Services Grid ──
            array('key' => 'field_sch_services_tab_grid', 'label' => 'Services Grid', 'type' => 'tab'),
            array(
                'key'          => 'field_sch_services_grid',
                'label'        => 'Service Cards',
                'name'         => 'services_grid',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Service',
                'sub_fields'   => array(
                    array('key' => 'field_sch_svc_icon', 'label' => 'Icon (Lucide)', 'name' => 'icon', 'type' => 'text', 'placeholder' => 'stethoscope'),
                    array('key' => 'field_sch_svc_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_sch_svc_link', 'label' => 'Link (detail page)', 'name' => 'link', 'type' => 'link', 'return_format' => 'array'),
                    array('key' => 'field_sch_svc_description', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3),
                    array('key' => 'field_sch_svc_subtitle', 'label' => 'Subtitle (below description)', 'name' => 'subtitle', 'type' => 'text', 'placeholder' => 'e.g. Clinics Days Timings P...'),
                    array(
                        'key'     => 'field_sch_svc_color',
                        'label'   => 'Color theme',
                        'name'    => 'color',
                        'type'    => 'select',
                        'choices' => array(
                            'primary'   => 'Primary (Green)',
                            'secondary' => 'Secondary (Purple)',
                            'pink'      => 'Pink',
                            'blue'      => 'Blue',
                            'green'     => 'Green',
                            'red'       => 'Red',
                        ),
                        'default_value' => 'primary',
                    ),
                ),
            ),

            // ── Tab: Appointment Banner ──
            array('key' => 'field_sch_services_tab_appt', 'label' => 'Appointment Banner', 'type' => 'tab'),
            array('key' => 'field_sch_services_appt_heading', 'label' => 'Heading Text', 'name' => 'services_appt_heading', 'type' => 'text', 'default_value' => 'FOR BOOKING APPOINTMENT, PLEASE CALL - 0144-2335565'),
            array('key' => 'field_sch_services_appt_heading_icon', 'label' => 'Heading Icon (Lucide)', 'name' => 'services_appt_heading_icon', 'type' => 'text', 'default_value' => 'phone'),
            array('key' => 'field_sch_services_appt_btn_link', 'label' => 'Button Link', 'name' => 'services_appt_btn_link', 'type' => 'link', 'return_format' => 'array'),
            array('key' => 'field_sch_services_appt_btn_icon', 'label' => 'Button Icon (Lucide)', 'name' => 'services_appt_btn_icon', 'type' => 'text', 'default_value' => 'calendar-check'),

            // ── Tab: Why Choose Us ──
            array('key' => 'field_sch_services_tab_why', 'label' => 'Why Choose Us', 'type' => 'tab'),
            array('key' => 'field_sch_services_why_badge', 'label' => 'Badge', 'name' => 'services_why_badge', 'type' => 'text', 'default_value' => 'Why Choose Us'),
            array('key' => 'field_sch_services_why_heading', 'label' => 'Heading', 'name' => 'services_why_heading', 'type' => 'text', 'default_value' => 'Excellence in'),
            array('key' => 'field_sch_services_why_heading_hl', 'label' => 'Heading Highlight', 'name' => 'services_why_heading_highlight', 'type' => 'text', 'default_value' => 'Childcare'),
            array(
                'key'          => 'field_sch_services_why_cards',
                'label'        => 'Cards',
                'name'         => 'services_why_cards',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Card',
                'sub_fields'   => array(
                    array('key' => 'field_sch_why_icon', 'label' => 'Icon (Lucide)', 'name' => 'icon', 'type' => 'text', 'placeholder' => 'stethoscope'),
                    array('key' => 'field_sch_why_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_sch_why_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2),
                    array(
                        'key'     => 'field_sch_why_color',
                        'label'   => 'Color',
                        'name'    => 'color',
                        'type'    => 'select',
                        'choices' => array('primary' => 'Primary', 'secondary' => 'Secondary', 'purple' => 'Purple', 'pink' => 'Pink'),
                        'default_value' => 'primary',
                    ),
                ),
            ),

            // ── Tab: Service Highlights ──
            array('key' => 'field_sch_services_tab_highlights', 'label' => 'Service Highlights', 'type' => 'tab'),
            array('key' => 'field_sch_services_hl_badge', 'label' => 'Badge', 'name' => 'services_hl_badge', 'type' => 'text', 'default_value' => 'What We Offer'),
            array('key' => 'field_sch_services_hl_heading', 'label' => 'Heading', 'name' => 'services_hl_heading', 'type' => 'text', 'default_value' => 'Comprehensive Healthcare Under One Roof'),
            array('key' => 'field_sch_services_hl_desc', 'label' => 'Description', 'name' => 'services_hl_description', 'type' => 'textarea', 'rows' => 3),
            array(
                'key'          => 'field_sch_services_hl_items',
                'label'        => 'Highlight Items',
                'name'         => 'services_hl_items',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Item',
                'sub_fields'   => array(
                    array('key' => 'field_sch_hl_item_icon', 'label' => 'Icon (Lucide)', 'name' => 'icon', 'type' => 'text', 'default_value' => 'check'),
                    array('key' => 'field_sch_hl_item_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_sch_hl_item_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2),
                ),
            ),
            array('key' => 'field_sch_services_hl_image', 'label' => 'Right Side Image', 'name' => 'services_hl_image', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'medium'),
            array('key' => 'field_sch_services_hl_overlay_number', 'label' => 'Overlay Card Number', 'name' => 'services_hl_overlay_number', 'type' => 'text', 'default_value' => '25+'),
            array('key' => 'field_sch_services_hl_overlay_label', 'label' => 'Overlay Card Label', 'name' => 'services_hl_overlay_label', 'type' => 'text', 'default_value' => 'Years of Excellence'),
        ),
        'location' => array(
            array(
                array('param' => 'page_template', 'operator' => '==', 'value' => 'page-services.php'),
            ),
        ),
        'menu_order' => 6,
        'style'      => 'default',
    ));
}
add_action('acf/init', 'sch_register_services_fields');
