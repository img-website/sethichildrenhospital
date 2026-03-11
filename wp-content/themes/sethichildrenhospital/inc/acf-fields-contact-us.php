<?php
/**
 * ACF Field Group: Contact Us Page
 */

if (!defined('ABSPATH')) exit;

function sch_register_contact_us_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key'      => 'group_sch_contact_us',
        'title'    => 'Contact Us Page Sections',
        'fields'   => array(

            // ── Tab: Hero ──
            array('key' => 'field_sch_cu_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
            array('key' => 'field_sch_cu_hero_badge', 'label' => 'Badge Text', 'name' => 'cu_hero_badge', 'type' => 'text', 'default_value' => 'Get in Touch', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_cu_hero_badge_icon', 'label' => 'Badge Icon (Lucide)', 'name' => 'cu_hero_badge_icon', 'type' => 'text', 'default_value' => 'phone', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_cu_hero_heading', 'label' => 'Heading', 'name' => 'cu_hero_heading', 'type' => 'text', 'default_value' => 'Contact', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_cu_hero_heading_hl', 'label' => 'Heading Highlight', 'name' => 'cu_hero_heading_highlight', 'type' => 'text', 'default_value' => 'Us', 'wrapper' => array('width' => '50')),

            // ── Tab: Quick Contact Banner ──
            array('key' => 'field_sch_cu_tab_banner', 'label' => 'Quick Contact Banner', 'type' => 'tab'),
            array('key' => 'field_sch_cu_banner_heading', 'label' => 'Heading Text', 'name' => 'cu_banner_heading', 'type' => 'text', 'default_value' => 'Need Immediate Assistance? Call Our 24/7 Helpline'),
            array('key' => 'field_sch_cu_banner_heading_icon', 'label' => 'Heading Icon (Lucide)', 'name' => 'cu_banner_heading_icon', 'type' => 'text', 'default_value' => 'phone'),
            array('key' => 'field_sch_cu_banner_btn_link', 'label' => 'Helpline Button Link', 'name' => 'cu_banner_btn_link', 'type' => 'link', 'return_format' => 'array', 'instructions' => 'Use tel: URL e.g. tel:+919549101235. Button text from link title.'),
            array('key' => 'field_sch_cu_banner_btn_icon', 'label' => 'Button Icon (Lucide)', 'name' => 'cu_banner_btn_icon', 'type' => 'text', 'default_value' => 'phone'),

            // ── Tab: Contact Form ──
            array('key' => 'field_sch_cu_tab_form', 'label' => 'Contact Form', 'type' => 'tab'),
            array('key' => 'field_sch_cu_form_heading', 'label' => 'Form Section Heading', 'name' => 'cu_form_heading', 'type' => 'text', 'default_value' => 'Contact Form'),
            array('key' => 'field_sch_cu_form_submit_text', 'label' => 'Submit Button Text', 'name' => 'cu_form_submit_text', 'type' => 'text', 'default_value' => 'Send Message'),

            // ── Tab: Contact Info ──
            array('key' => 'field_sch_cu_tab_info', 'label' => 'Contact Info', 'type' => 'tab'),
            array('key' => 'field_sch_cu_info_heading', 'label' => 'Contact Info Heading', 'name' => 'cu_info_heading', 'type' => 'text', 'default_value' => 'Contact Info'),
            array('key' => 'field_sch_cu_info_phones', 'label' => 'Phone Numbers', 'name' => 'cu_info_phones', 'type' => 'textarea', 'rows' => 4, 'instructions' => 'One per line. Use HTML for links: <a href="tel:+911442701321">+91-144-2701321</a>'),
            array('key' => 'field_sch_cu_info_email', 'label' => 'Email', 'name' => 'cu_info_email', 'type' => 'text'),
            array('key' => 'field_sch_cu_info_fax', 'label' => 'Fax (number or link)', 'name' => 'cu_info_fax', 'type' => 'text'),
            array('key' => 'field_sch_cu_info_address', 'label' => 'Address', 'name' => 'cu_info_address', 'type' => 'textarea', 'rows' => 4),

            // ── Tab: Emergency Contacts ──
            array('key' => 'field_sch_cu_tab_emergency', 'label' => 'Emergency Contacts Card', 'type' => 'tab'),
            array('key' => 'field_sch_cu_emergency_heading', 'label' => 'Card Heading', 'name' => 'cu_emergency_heading', 'type' => 'text', 'default_value' => 'Emergency Contacts'),
            array('key' => 'field_sch_cu_emergency_icon', 'label' => 'Heading Icon (Lucide)', 'name' => 'cu_emergency_icon', 'type' => 'text', 'default_value' => 'ambulance'),
            array(
                'key'          => 'field_sch_cu_emergency_rows',
                'label'        => 'Contact Rows',
                'name'         => 'cu_emergency_rows',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Row',
                'sub_fields'   => array(
                    array('key' => 'field_sch_cu_emergency_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'placeholder' => 'e.g. Emergency:'),
                    array('key' => 'field_sch_cu_emergency_link', 'label' => 'Link', 'name' => 'link', 'type' => 'link', 'return_format' => 'array', 'instructions' => 'Use tel: URL for phone numbers'),
                ),
            ),
            array('key' => 'field_sch_cu_emergency_note', 'label' => 'Footer Note', 'name' => 'cu_emergency_note', 'type' => 'text', 'default_value' => '24/7 Emergency Services Available'),

            // ── Tab: Map ──
            array('key' => 'field_sch_cu_tab_map', 'label' => 'Map', 'type' => 'tab'),
            array('key' => 'field_sch_cu_map_embed_url', 'label' => 'Google Map Embed URL', 'name' => 'cu_map_embed_url', 'type' => 'url', 'instructions' => 'Paste the embed URL from Google Maps (iframe src).'),
            array('key' => 'field_sch_cu_map_badge_text', 'label' => 'Map Overlay Address Text', 'name' => 'cu_map_badge_text', 'type' => 'text', 'default_value' => '19, Lajpat nagar, Vijay Mandir road, Alwar'),
        ),
        'location' => array(
            array(
                array('param' => 'page_template', 'operator' => '==', 'value' => 'page-contact-us.php'),
            ),
        ),
        'menu_order' => 17,
        'style'      => 'default',
    ));
}
add_action('acf/init', 'sch_register_contact_us_fields');
