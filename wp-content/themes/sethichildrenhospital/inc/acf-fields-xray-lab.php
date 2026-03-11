<?php
/**
 * ACF Field Group: X-Ray and Lab Services Page
 */

if (!defined('ABSPATH')) exit;

function sch_register_xray_lab_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key'      => 'group_sch_xray_lab',
        'title'    => 'X-Ray & Lab Services Page Sections',
        'fields'   => array(

            // ── Tab: Hero ──
            array('key' => 'field_sch_xlab_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
            array('key' => 'field_sch_xlab_hero_badge', 'label' => 'Badge Text', 'name' => 'xlab_hero_badge', 'type' => 'text', 'default_value' => 'Imaging & Lab', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_xlab_hero_badge_icon', 'label' => 'Badge Icon (Lucide)', 'name' => 'xlab_hero_badge_icon', 'type' => 'text', 'default_value' => 'scan-line', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_xlab_hero_heading', 'label' => 'Heading', 'name' => 'xlab_hero_heading', 'type' => 'text', 'default_value' => 'X-Ray and', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_xlab_hero_heading_hl', 'label' => 'Heading Highlight', 'name' => 'xlab_hero_heading_highlight', 'type' => 'text', 'default_value' => 'Lab Services', 'wrapper' => array('width' => '50')),

            // ── Tab: Gallery ──
            array('key' => 'field_sch_xlab_tab_gallery', 'label' => 'Gallery', 'type' => 'tab'),
            array(
                'key'          => 'field_sch_xlab_gallery_images',
                'label'        => 'Gallery Images',
                'name'         => 'xlab_gallery_images',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Image',
                'sub_fields'   => array(
                    array('key' => 'field_sch_xlab_gallery_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'medium'),
                    array('key' => 'field_sch_xlab_gallery_alt',   'label' => 'Alt Text', 'name' => 'alt', 'type' => 'text'),
                ),
            ),

            // ── Tab: Overview ──
            array('key' => 'field_sch_xlab_tab_overview', 'label' => 'Overview', 'type' => 'tab'),
            array('key' => 'field_sch_xlab_overview_title', 'label' => 'About Title', 'name' => 'xlab_overview_title', 'type' => 'text', 'default_value' => 'About Our Services'),
            array('key' => 'field_sch_xlab_overview_text',  'label' => 'About Text',  'name' => 'xlab_overview_text',  'type' => 'wysiwyg', 'media_upload' => 0),
            array(
                'key'          => 'field_sch_xlab_overview_lists',
                'label'        => 'Subsections (Biochemistry / Microbiology / Pathology)',
                'name'         => 'xlab_overview_lists',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Subsection',
                'sub_fields'   => array(
                    array('key' => 'field_sch_xlab_list_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_sch_xlab_list_body',  'label' => 'Body Text', 'name' => 'body', 'type' => 'textarea', 'rows' => 3),
                ),
            ),

            // ── Tab: We Offer ──
            array('key' => 'field_sch_xlab_tab_we_offer', 'label' => 'We Offer', 'type' => 'tab'),
            array(
                'key'          => 'field_sch_xlab_we_left',
                'label'        => 'We Offer – Left List',
                'name'         => 'xlab_we_left',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Item',
                'sub_fields'   => array(
                    array('key' => 'field_sch_xlab_we_left_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text'),
                ),
            ),
            array(
                'key'          => 'field_sch_xlab_we_right',
                'label'        => 'We Offer – Right List',
                'name'         => 'xlab_we_right',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Item',
                'sub_fields'   => array(
                    array('key' => 'field_sch_xlab_we_right_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text'),
                ),
            ),

            // ── Tab: Appointment Banner ──
            array('key' => 'field_sch_xlab_tab_appt', 'label' => 'Appointment Banner', 'type' => 'tab'),
            array('key' => 'field_sch_xlab_appt_heading', 'label' => 'Heading Text', 'name' => 'xlab_appt_heading', 'type' => 'text', 'default_value' => 'FOR X-RAY & LAB ENQUIRIES, PLEASE CALL - 0144-2335565'),
            array('key' => 'field_sch_xlab_appt_heading_icon', 'label' => 'Heading Icon (Lucide)', 'name' => 'xlab_appt_heading_icon', 'type' => 'text', 'default_value' => 'phone'),
            array('key' => 'field_sch_xlab_appt_btn_link', 'label' => 'Button Link', 'name' => 'xlab_appt_btn_link', 'type' => 'link', 'return_format' => 'array'),
            array('key' => 'field_sch_xlab_appt_btn_icon', 'label' => 'Button Icon (Lucide)', 'name' => 'xlab_appt_btn_icon', 'type' => 'text', 'default_value' => 'calendar-check'),
        ),
        'location' => array(
            array(
                array('param' => 'page_template', 'operator' => '==', 'value' => 'page-x-ray-and-lab-services.php'),
            ),
        ),
        'menu_order' => 15,
        'style'      => 'default',
    ));
}
add_action('acf/init', 'sch_register_xray_lab_fields');

