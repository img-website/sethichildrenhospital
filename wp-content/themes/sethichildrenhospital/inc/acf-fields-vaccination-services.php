<?php
/**
 * ACF Field Group: Vaccination Services Page
 */

if (!defined('ABSPATH')) exit;

function sch_register_vaccination_services_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key'      => 'group_sch_vacc_services',
        'title'    => 'Vaccination Services Page Sections',
        'fields'   => array(

            // ── Tab: Hero ──
            array('key' => 'field_sch_vsvc_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
            array('key' => 'field_sch_vsvc_hero_badge', 'label' => 'Badge Text', 'name' => 'vsvc_hero_badge', 'type' => 'text', 'default_value' => 'Immunization', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_vsvc_hero_badge_icon', 'label' => 'Badge Icon (Lucide)', 'name' => 'vsvc_hero_badge_icon', 'type' => 'text', 'default_value' => 'shield-check', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_vsvc_hero_heading', 'label' => 'Heading', 'name' => 'vsvc_hero_heading', 'type' => 'text', 'default_value' => 'Vaccination', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_vsvc_hero_heading_hl', 'label' => 'Heading Highlight', 'name' => 'vsvc_hero_heading_highlight', 'type' => 'text', 'default_value' => 'Services', 'wrapper' => array('width' => '50')),

            // ── Tab: Gallery ──
            array('key' => 'field_sch_vsvc_tab_gallery', 'label' => 'Gallery', 'type' => 'tab'),
            array(
                'key'          => 'field_sch_vsvc_gallery_images',
                'label'        => 'Gallery Images',
                'name'         => 'vsvc_gallery_images',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Image',
                'sub_fields'   => array(
                    array('key' => 'field_sch_vsvc_gallery_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'medium'),
                    array('key' => 'field_sch_vsvc_gallery_alt',   'label' => 'Alt Text', 'name' => 'alt', 'type' => 'text'),
                ),
            ),

            // ── Tab: Appointment Banner ──
            array('key' => 'field_sch_vsvc_tab_appt', 'label' => 'Appointment Banner', 'type' => 'tab'),
            array('key' => 'field_sch_vsvc_appt_heading', 'label' => 'Heading Text', 'name' => 'vsvc_appt_heading', 'type' => 'text', 'default_value' => 'FOR VACCINATION ENQUIRIES & APPOINTMENTS, PLEASE CALL - 0144-2335565'),
            array('key' => 'field_sch_vsvc_appt_heading_icon', 'label' => 'Heading Icon (Lucide)', 'name' => 'vsvc_appt_heading_icon', 'type' => 'text', 'default_value' => 'phone'),
            array('key' => 'field_sch_vsvc_appt_btn_link', 'label' => 'Button Link', 'name' => 'vsvc_appt_btn_link', 'type' => 'link', 'return_format' => 'array'),
            array('key' => 'field_sch_vsvc_appt_btn_icon', 'label' => 'Button Icon (Lucide)', 'name' => 'vsvc_appt_btn_icon', 'type' => 'text', 'default_value' => 'calendar-check'),

            // ── Tab: Overview ──
            array('key' => 'field_sch_vsvc_tab_overview', 'label' => 'Overview', 'type' => 'tab'),
            array('key' => 'field_sch_vsvc_overview_title', 'label' => 'About Title', 'name' => 'vsvc_overview_title', 'type' => 'text', 'default_value' => 'About Vaccination at SCH'),
            array('key' => 'field_sch_vsvc_overview_text',  'label' => 'About Text',  'name' => 'vsvc_overview_text',  'type' => 'wysiwyg', 'media_upload' => 0),
            array(
                'key'          => 'field_sch_vsvc_overview_link',
                'label'        => 'Vaccination Chart Link',
                'name'         => 'vsvc_overview_link',
                'type'         => 'link',
                'return_format'=> 'array',
            ),
            array('key' => 'field_sch_vsvc_overview_link_icon', 'label' => 'Chart Link Icon (Lucide)', 'name' => 'vsvc_overview_link_icon', 'type' => 'text', 'default_value' => 'calendar'),
            array(
                'key'   => 'field_sch_vsvc_overview_image',
                'label' => 'Side Image',
                'name'  => 'vsvc_overview_image',
                'type'  => 'image',
                'return_format' => 'url',
            ),
            array('key' => 'field_sch_vsvc_overview_image_alt', 'label' => 'Image Alt Text', 'name' => 'vsvc_overview_image_alt', 'type' => 'text', 'default_value' => 'Vaccination'),
            array('key' => 'field_sch_vsvc_overview_image_caption', 'label' => 'Image Caption', 'name' => 'vsvc_overview_image_caption', 'type' => 'text', 'default_value' => 'Vaccination at Sethi Children Hospital'),
        ),
        'location' => array(
            array(
                array('param' => 'page_template', 'operator' => '==', 'value' => 'page-vaccination-services.php'),
            ),
        ),
        'menu_order' => 14,
        'style'      => 'default',
    ));
}
add_action('acf/init', 'sch_register_vaccination_services_fields');

