<?php
/**
 * ACF Field Group: Neonatology Services Page
 * Section-wise tabs for CMS.
 */

if (!defined('ABSPATH')) exit;

function sch_register_neonatology_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key'      => 'group_sch_neonatology',
        'title'    => 'Neonatology Services Page Sections',
        'fields'   => array(

            // ── Tab: Hero ──
            array('key' => 'field_sch_neo_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
            array('key' => 'field_sch_neo_hero_badge', 'label' => 'Badge Text', 'name' => 'neo_hero_badge', 'type' => 'text', 'default_value' => 'Newborn Care', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_neo_hero_badge_icon', 'label' => 'Badge Icon (Lucide)', 'name' => 'neo_hero_badge_icon', 'type' => 'text', 'default_value' => 'baby', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_neo_hero_heading', 'label' => 'Heading', 'name' => 'neo_hero_heading', 'type' => 'text', 'default_value' => 'Neonatology', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_neo_hero_heading_hl', 'label' => 'Heading Highlight', 'name' => 'neo_hero_heading_highlight', 'type' => 'text', 'default_value' => 'Services', 'wrapper' => array('width' => '50')),

            // ── Tab: Gallery ──
            array('key' => 'field_sch_neo_tab_gallery', 'label' => 'Gallery', 'type' => 'tab'),
            array(
                'key'          => 'field_sch_neo_gallery_images',
                'label'        => 'Gallery Images',
                'name'         => 'neo_gallery_images',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Image',
                'sub_fields'   => array(
                    array('key' => 'field_sch_neo_gallery_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'medium'),
                    array('key' => 'field_sch_neo_gallery_alt',   'label' => 'Alt Text', 'name' => 'alt', 'type' => 'text'),
                ),
            ),

            // ── Tab: NICU Overview ──
            array('key' => 'field_sch_neo_tab_overview', 'label' => 'NICU Overview', 'type' => 'tab'),
            array('key' => 'field_sch_neo_overview_title', 'label' => 'About Title', 'name' => 'neo_overview_title', 'type' => 'text', 'default_value' => 'About NICU'),
            array('key' => 'field_sch_neo_overview_text',  'label' => 'About Text',  'name' => 'neo_overview_text',  'type' => 'wysiwyg', 'media_upload' => 0),
            array(
                'key'          => 'field_sch_neo_overview_bullets',
                'label'        => 'Key Points',
                'name'         => 'neo_overview_bullets',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Point',
                'sub_fields'   => array(
                    array('key' => 'field_sch_neo_overview_bullet', 'label' => 'Text', 'name' => 'text', 'type' => 'text'),
                ),
            ),
            array(
                'key'          => 'field_sch_neo_overview_stats',
                'label'        => 'Stats Cards',
                'name'         => 'neo_overview_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Stat',
                'sub_fields'   => array(
                    array('key' => 'field_sch_neo_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text'),
                    array('key' => 'field_sch_neo_stat_label',  'label' => 'Label',  'name' => 'label',  'type' => 'text'),
                    array(
                        'key'     => 'field_sch_neo_stat_color',
                        'label'   => 'Color',
                        'name'    => 'color',
                        'type'    => 'select',
                        'choices' => array(
                            'primary'   => 'Primary (green)',
                            'secondary' => 'Secondary (purple)',
                            'accent'    => 'Accent',
                            'pink'      => 'Pink',
                        ),
                        'default_value' => 'primary',
                    ),
                ),
            ),

            // ── Tab: We Offer ──
            array('key' => 'field_sch_neo_tab_we_offer', 'label' => 'We Offer', 'type' => 'tab'),
            array(
                'key'          => 'field_sch_neo_we_offer',
                'label'        => 'We Offer Items',
                'name'         => 'neo_we_offer',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Item',
                'sub_fields'   => array(
                    array('key' => 'field_sch_neo_we_icon', 'label' => 'Icon (Lucide)', 'name' => 'icon', 'type' => 'text', 'default_value' => 'check-circle'),
                    array('key' => 'field_sch_neo_we_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text'),
                ),
            ),

            // ── Tab: Appointment Banner ──
            array('key' => 'field_sch_neo_tab_appt', 'label' => 'Appointment Banner', 'type' => 'tab'),
            array('key' => 'field_sch_neo_appt_heading', 'label' => 'Heading Text', 'name' => 'neo_appt_heading', 'type' => 'text', 'default_value' => 'FOR NICU & NEONATOLOGY ENQUIRIES, PLEASE CALL - 0144-2335565'),
            array('key' => 'field_sch_neo_appt_heading_icon', 'label' => 'Heading Icon (Lucide)', 'name' => 'neo_appt_heading_icon', 'type' => 'text', 'default_value' => 'phone'),
            array('key' => 'field_sch_neo_appt_btn_link', 'label' => 'Button Link', 'name' => 'neo_appt_btn_link', 'type' => 'link', 'return_format' => 'array'),
            array('key' => 'field_sch_neo_appt_btn_icon', 'label' => 'Button Icon (Lucide)', 'name' => 'neo_appt_btn_icon', 'type' => 'text', 'default_value' => 'calendar-check'),

            // ── Tab: Director ──
            array('key' => 'field_sch_neo_tab_director', 'label' => 'NICU Director', 'type' => 'tab'),
            array('key' => 'field_sch_neo_dir_badge', 'label' => 'Badge', 'name' => 'neo_dir_badge', 'type' => 'text', 'default_value' => 'Our Expert'),
            array('key' => 'field_sch_neo_dir_heading', 'label' => 'Heading', 'name' => 'neo_dir_heading', 'type' => 'text', 'default_value' => 'NICU'),
            array('key' => 'field_sch_neo_dir_heading_hl', 'label' => 'Heading Highlight', 'name' => 'neo_dir_heading_highlight', 'type' => 'text', 'default_value' => 'Director'),
            array('key' => 'field_sch_neo_dir_photo', 'label' => 'Photo', 'name' => 'neo_dir_photo', 'type' => 'image', 'return_format' => 'url'),
            array('key' => 'field_sch_neo_dir_name', 'label' => 'Name', 'name' => 'neo_dir_name', 'type' => 'text', 'default_value' => 'Dr. Manisha Rathi'),
            array('key' => 'field_sch_neo_dir_primary_title', 'label' => 'Primary Title', 'name' => 'neo_dir_primary_title', 'type' => 'text', 'default_value' => 'MBBS, MD Pediatrics'),
            array('key' => 'field_sch_neo_dir_line1', 'label' => 'Line 1', 'name' => 'neo_dir_line1', 'type' => 'text', 'default_value' => 'Fellowship in Neonatology (Neoclinic Hospital, Jaipur)'),
            array('key' => 'field_sch_neo_dir_line2', 'label' => 'Line 2', 'name' => 'neo_dir_line2', 'type' => 'text', 'default_value' => 'Ex SR – Neoclinic, PGIMS Rohtak, Fortis Jaipur'),
            array('key' => 'field_sch_neo_dir_line3', 'label' => 'Line 3', 'name' => 'neo_dir_line3', 'type' => 'text', 'default_value' => 'Consultant Neonatology, Sethi Children Hospital'),
            array('key' => 'field_sch_neo_dir_fellowship', 'label' => 'Fellowship Highlight Text', 'name' => 'neo_dir_fellowship', 'type' => 'text', 'default_value' => 'Fellowship: Neonatology from Neoclinic Jaipur (North India’s best Neonatology centre)'),
        ),
        'location' => array(
            array(
                array('param' => 'page_template', 'operator' => '==', 'value' => 'page-neonatology-services.php'),
            ),
        ),
        'menu_order' => 12,
        'style'      => 'default',
    ));
}
add_action('acf/init', 'sch_register_neonatology_fields');

