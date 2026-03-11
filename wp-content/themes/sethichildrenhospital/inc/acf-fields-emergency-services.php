<?php
/**
 * ACF Field Group: Emergency Services Page
 */

if (!defined('ABSPATH')) exit;

function sch_register_emergency_services_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key'      => 'group_sch_emergency_services',
        'title'    => 'Emergency Services Page Sections',
        'fields'   => array(

            // ── Tab: Hero ──
            array('key' => 'field_sch_em_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
            array('key' => 'field_sch_em_hero_badge', 'label' => 'Badge Text', 'name' => 'em_hero_badge', 'type' => 'text', 'default_value' => '24/7 Care', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_em_hero_badge_icon', 'label' => 'Badge Icon (Lucide)', 'name' => 'em_hero_badge_icon', 'type' => 'text', 'default_value' => 'ambulance', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_em_hero_heading', 'label' => 'Heading', 'name' => 'em_hero_heading', 'type' => 'text', 'default_value' => 'Emergency', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_em_hero_heading_hl', 'label' => 'Heading Highlight', 'name' => 'em_hero_heading_highlight', 'type' => 'text', 'default_value' => 'Services', 'wrapper' => array('width' => '50')),

            // ── Tab: Gallery ──
            array('key' => 'field_sch_em_tab_gallery', 'label' => 'Gallery', 'type' => 'tab'),
            array(
                'key'          => 'field_sch_em_gallery_images',
                'label'        => 'Gallery Images',
                'name'         => 'em_gallery_images',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Image',
                'sub_fields'   => array(
                    array('key' => 'field_sch_em_gallery_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'medium'),
                    array('key' => 'field_sch_em_gallery_alt',   'label' => 'Alt Text', 'name' => 'alt', 'type' => 'text'),
                ),
            ),

            // ── Tab: Emergency Banner ──
            array('key' => 'field_sch_em_tab_banner', 'label' => 'Emergency Banner', 'type' => 'tab'),
            array('key' => 'field_sch_em_banner_heading', 'label' => 'Heading Text (before phone)', 'name' => 'em_banner_heading', 'type' => 'text', 'default_value' => 'EMERGENCY CONTACT:'),
            array('key' => 'field_sch_em_banner_heading_icon', 'label' => 'Heading Icon (Lucide)', 'name' => 'em_banner_heading_icon', 'type' => 'text', 'default_value' => 'phone'),
            array('key' => 'field_sch_em_banner_phone', 'label' => 'Phone Number (clickable)', 'name' => 'em_banner_phone', 'type' => 'text', 'default_value' => '+91 9549101235'),
            array('key' => 'field_sch_em_banner_btn_link', 'label' => 'Call Now Button Link', 'name' => 'em_banner_btn_link', 'type' => 'link', 'return_format' => 'array', 'instructions' => 'Use URL like tel:+919549101235 for Call Now button.'),
            array('key' => 'field_sch_em_banner_btn_icon', 'label' => 'Call Now Button Icon (Lucide)', 'name' => 'em_banner_btn_icon', 'type' => 'text', 'default_value' => 'phone-call'),

            // ── Tab: Overview ──
            array('key' => 'field_sch_em_tab_overview', 'label' => 'Overview', 'type' => 'tab'),
            array('key' => 'field_sch_em_overview_title', 'label' => 'About Title', 'name' => 'em_overview_title', 'type' => 'text', 'default_value' => 'About Our Emergency Department'),
            array('key' => 'field_sch_em_overview_text',  'label' => 'About Text',  'name' => 'em_overview_text',  'type' => 'wysiwyg', 'media_upload' => 0),
            array('key' => 'field_sch_em_we_offer_heading', 'label' => 'We Offer Section Heading', 'name' => 'em_we_offer_heading', 'type' => 'text', 'default_value' => 'We Offer'),
            array(
                'key'          => 'field_sch_em_we_offer',
                'label'        => 'We Offer Items',
                'name'         => 'em_we_offer',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Item',
                'instructions' => 'For links (e.g. phone) use HTML: <a href="tel:+919549101235" class="font-bold underline hover:no-underline">+91 9549101235</a>',
                'sub_fields'   => array(
                    array('key' => 'field_sch_em_we_offer_text', 'label' => 'Text (HTML allowed for links)', 'name' => 'text', 'type' => 'textarea', 'rows' => 2),
                ),
            ),
        ),
        'location' => array(
            array(
                array('param' => 'page_template', 'operator' => '==', 'value' => 'page-emergency-services.php'),
            ),
        ),
        'menu_order' => 16,
        'style'      => 'default',
    ));
}
add_action('acf/init', 'sch_register_emergency_services_fields');
