<?php
/**
 * ACF Field Group: Pediatric Intensive Care (PICU) Page
 */

if (!defined('ABSPATH')) exit;

function sch_register_picu_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key'      => 'group_sch_picu',
        'title'    => 'PICU Page Sections',
        'fields'   => array(

            // ── Tab: Hero ──
            array('key' => 'field_sch_picu_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
            array('key' => 'field_sch_picu_hero_badge', 'label' => 'Badge Text', 'name' => 'picu_hero_badge', 'type' => 'text', 'default_value' => 'Critical Care Excellence', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_picu_hero_badge_icon', 'label' => 'Badge Icon (Lucide)', 'name' => 'picu_hero_badge_icon', 'type' => 'text', 'default_value' => 'heart-pulse', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_picu_hero_heading', 'label' => 'Heading', 'name' => 'picu_hero_heading', 'type' => 'text', 'default_value' => 'Pediatric Intensive', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_picu_hero_heading_hl', 'label' => 'Heading Highlight', 'name' => 'picu_hero_heading_highlight', 'type' => 'text', 'default_value' => 'Care Unit', 'wrapper' => array('width' => '50')),

            // ── Tab: Gallery ──
            array('key' => 'field_sch_picu_tab_gallery', 'label' => 'Gallery', 'type' => 'tab'),
            array(
                'key'          => 'field_sch_picu_gallery_images',
                'label'        => 'Gallery Images',
                'name'         => 'picu_gallery_images',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Image',
                'sub_fields'   => array(
                    array('key' => 'field_sch_picu_gallery_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'medium'),
                    array('key' => 'field_sch_picu_gallery_alt',   'label' => 'Alt Text', 'name' => 'alt', 'type' => 'text'),
                ),
            ),

            // ── Tab: Overview ──
            array('key' => 'field_sch_picu_tab_overview', 'label' => 'PICU Overview', 'type' => 'tab'),
            array('key' => 'field_sch_picu_overview_title', 'label' => 'About Title', 'name' => 'picu_overview_title', 'type' => 'text', 'default_value' => 'About PICU'),
            array('key' => 'field_sch_picu_overview_text',  'label' => 'About Text',  'name' => 'picu_overview_text',  'type' => 'wysiwyg', 'media_upload' => 0),
            array(
                'key'          => 'field_sch_picu_overview_stats',
                'label'        => 'Stats Cards',
                'name'         => 'picu_overview_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Stat',
                'sub_fields'   => array(
                    array('key' => 'field_sch_picu_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text'),
                    array('key' => 'field_sch_picu_stat_label',  'label' => 'Label',  'name' => 'label',  'type' => 'text'),
                    array(
                        'key'     => 'field_sch_picu_stat_color',
                        'label'   => 'Color',
                        'name'    => 'color',
                        'type'    => 'select',
                        'choices' => array(
                            'primary'   => 'Primary (green)',
                            'secondary' => 'Secondary (purple)',
                            'accent'    => 'Accent',
                        ),
                        'default_value' => 'primary',
                    ),
                ),
            ),

            // ── Tab: Why Our PICU ──
            array('key' => 'field_sch_picu_tab_why', 'label' => 'Why Our PICU', 'type' => 'tab'),
            array('key' => 'field_sch_picu_why_heading', 'label' => 'Section Heading', 'name' => 'picu_why_heading', 'type' => 'text', 'default_value' => 'Why Our PICU?'),
            array(
                'key'          => 'field_sch_picu_why_items',
                'label'        => 'Why Cards',
                'name'         => 'picu_why_items',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Card',
                'sub_fields'   => array(
                    array('key' => 'field_sch_picu_why_icon',  'label' => 'Icon (Lucide)', 'name' => 'icon', 'type' => 'text', 'default_value' => 'stethoscope'),
                    array('key' => 'field_sch_picu_why_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_sch_picu_why_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2),
                ),
            ),
            array('key' => 'field_sch_picu_why_note', 'label' => 'Bottom Note', 'name' => 'picu_why_note', 'type' => 'text', 'default_value' => 'One of the very few in state with Intensivist direction'),

            // ── Tab: Appointment Banner ──
            array('key' => 'field_sch_picu_tab_appt', 'label' => 'Appointment Banner', 'type' => 'tab'),
            array('key' => 'field_sch_picu_appt_heading', 'label' => 'Heading Text', 'name' => 'picu_appt_heading', 'type' => 'text', 'default_value' => 'FOR EMERGENCY & PICU ADMISSIONS, PLEASE CALL - 0144-2335565'),
            array('key' => 'field_sch_picu_appt_heading_icon', 'label' => 'Heading Icon (Lucide)', 'name' => 'picu_appt_heading_icon', 'type' => 'text', 'default_value' => 'phone'),
            array('key' => 'field_sch_picu_appt_btn_link', 'label' => 'Button Link', 'name' => 'picu_appt_btn_link', 'type' => 'link', 'return_format' => 'array'),
            array('key' => 'field_sch_picu_appt_btn_icon', 'label' => 'Button Icon (Lucide)', 'name' => 'picu_appt_btn_icon', 'type' => 'text', 'default_value' => 'calendar-check'),

            // ── Tab: Services Offered ──
            array('key' => 'field_sch_picu_tab_services', 'label' => 'Services Offered', 'type' => 'tab'),
            array('key' => 'field_sch_picu_services_badge', 'label' => 'Badge Text', 'name' => 'picu_services_badge', 'type' => 'text', 'default_value' => 'Comprehensive Care'),
            array('key' => 'field_sch_picu_services_heading', 'label' => 'Heading', 'name' => 'picu_services_heading', 'type' => 'text', 'default_value' => 'Services'),
            array('key' => 'field_sch_picu_services_heading_hl', 'label' => 'Heading Highlight', 'name' => 'picu_services_heading_highlight', 'type' => 'text', 'default_value' => 'We Offer'),
            array(
                'key'          => 'field_sch_picu_services_list',
                'label'        => 'Services',
                'name'         => 'picu_services_list',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Service',
                'sub_fields'   => array(
                    array('key' => 'field_sch_picu_service_icon',  'label' => 'Icon (Lucide)', 'name' => 'icon', 'type' => 'text', 'default_value' => 'alert-triangle'),
                    array(
                        'key'           => 'field_sch_picu_service_icon_bg',
                        'label'         => 'Icon BG Color',
                        'name'          => 'icon_bg',
                        'type'          => 'select',
                        'choices'       => array(
                            'bg-primary/10'   => 'Primary (green)',
                            'bg-secondary/10' => 'Secondary (purple)',
                            'bg-purple-100'   => 'Purple',
                            'bg-blue-100'     => 'Blue',
                            'bg-pink-100'     => 'Pink',
                            'bg-indigo-100'   => 'Indigo',
                            'bg-amber-100'    => 'Amber',
                            'bg-red-100'      => 'Red',
                            'bg-green-100'    => 'Green',
                            'bg-gray-100'     => 'Gray',
                        ),
                        'default_value' => 'bg-primary/10',
                    ),
                    array(
                        'key'           => 'field_sch_picu_service_icon_color',
                        'label'         => 'Icon Color',
                        'name'          => 'icon_color',
                        'type'          => 'select',
                        'choices'       => array(
                            'text-primary'   => 'Primary (green)',
                            'text-secondary' => 'Secondary (purple)',
                            'text-purple-600' => 'Purple',
                            'text-blue-600'  => 'Blue',
                            'text-pink-600'  => 'Pink',
                            'text-indigo-600'=> 'Indigo',
                            'text-amber-600' => 'Amber',
                            'text-red-600'   => 'Red',
                            'text-green-600' => 'Green',
                            'text-gray-600'  => 'Gray',
                        ),
                        'default_value' => 'text-primary',
                    ),
                    array('key' => 'field_sch_picu_service_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_sch_picu_service_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2),
                ),
            ),

            // ── Tab: PICU Director ──
            array('key' => 'field_sch_picu_tab_director', 'label' => 'PICU Director', 'type' => 'tab'),
            array('key' => 'field_sch_picu_dir_badge', 'label' => 'Badge', 'name' => 'picu_dir_badge', 'type' => 'text', 'default_value' => 'Our Expert'),
            array('key' => 'field_sch_picu_dir_heading', 'label' => 'Heading', 'name' => 'picu_dir_heading', 'type' => 'text', 'default_value' => 'PICU'),
            array('key' => 'field_sch_picu_dir_heading_hl', 'label' => 'Heading Highlight', 'name' => 'picu_dir_heading_highlight', 'type' => 'text', 'default_value' => 'Director'),
            array('key' => 'field_sch_picu_dir_photo', 'label' => 'Photo', 'name' => 'picu_dir_photo', 'type' => 'image', 'return_format' => 'url'),
            array('key' => 'field_sch_picu_dir_name', 'label' => 'Name', 'name' => 'picu_dir_name', 'type' => 'text', 'default_value' => 'Dr. Chirag Sethi'),
            array('key' => 'field_sch_picu_dir_primary_title', 'label' => 'Primary Title', 'name' => 'picu_dir_primary_title', 'type' => 'text', 'default_value' => 'MBBS (Gold Medalist) MD (PAED)'),
            array('key' => 'field_sch_picu_dir_line1', 'label' => 'Line 1', 'name' => 'picu_dir_line1', 'type' => 'text', 'default_value' => 'Fellow Paed. Critical Care Medicine'),
            array('key' => 'field_sch_picu_dir_line2', 'label' => 'Line 2', 'name' => 'picu_dir_line2', 'type' => 'text', 'default_value' => 'National Trainer PALS'),
            array('key' => 'field_sch_picu_dir_line3', 'label' => 'Line 3', 'name' => 'picu_dir_line3', 'type' => 'text', 'default_value' => 'Trained at Baylor College of Medicine (USA)'),
            array('key' => 'field_sch_picu_dir_line4', 'label' => 'Line 4', 'name' => 'picu_dir_line4', 'type' => 'text', 'default_value' => 'In charge PICU & NICU, Sethi Children Hospital'),
            array('key' => 'field_sch_picu_dir_fellowship', 'label' => 'Fellowship Highlight Text', 'name' => 'picu_dir_fellowship', 'type' => 'text', 'default_value' => 'Fellowship: Paed. Intensive care from Sir Gangaram Hospital, New Delhi'),
        ),
        'location' => array(
            array(
                array('param' => 'page_template', 'operator' => '==', 'value' => 'page-pediatric-intensive-care-unit.php'),
            ),
        ),
        'menu_order' => 13,
        'style'      => 'default',
    ));
}
add_action('acf/init', 'sch_register_picu_fields');

