<?php
/**
 * ACF Field Group: Vaccination Page
 * Section-wise tabs for CMS.
 */

if (!defined('ABSPATH')) exit;

function sch_register_vaccination_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key'      => 'group_sch_vaccination',
        'title'    => 'Vaccination Page Sections',
        'fields'   => array(

            // ── Tab: Hero ──
            array('key' => 'field_sch_vacc_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
            array('key' => 'field_sch_vacc_hero_badge', 'label' => 'Badge Text', 'name' => 'vacc_hero_badge', 'type' => 'text', 'default_value' => 'Child Immunization', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_vacc_hero_badge_icon', 'label' => 'Badge Icon (Lucide)', 'name' => 'vacc_hero_badge_icon', 'type' => 'text', 'default_value' => 'syringe', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_vacc_hero_heading', 'label' => 'Heading', 'name' => 'vacc_hero_heading', 'type' => 'text', 'default_value' => 'Vaccination', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_vacc_hero_heading_hl', 'label' => 'Heading Highlight', 'name' => 'vacc_hero_heading_highlight', 'type' => 'text', 'default_value' => 'Schedule', 'wrapper' => array('width' => '50')),

            // ── Tab: Schedule Table ──
            array('key' => 'field_sch_vacc_tab_table', 'label' => 'Vaccination Table', 'type' => 'tab'),
            array('key' => 'field_sch_vacc_table_badge', 'label' => 'Badge', 'name' => 'vacc_table_badge', 'type' => 'text', 'default_value' => 'Immunization Schedule'),
            array('key' => 'field_sch_vacc_table_heading', 'label' => 'Heading', 'name' => 'vacc_table_heading', 'type' => 'text', 'default_value' => 'Recommended'),
            array('key' => 'field_sch_vacc_table_heading_hl', 'label' => 'Heading Highlight', 'name' => 'vacc_table_heading_highlight', 'type' => 'text', 'default_value' => 'Vaccination Chart'),
            array('key' => 'field_sch_vacc_table_desc', 'label' => 'Description', 'name' => 'vacc_table_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Protect your child with timely vaccinations as per the recommended schedule'),
            array(
                'key'          => 'field_sch_vacc_table_rows',
                'label'        => 'Schedule Rows',
                'name'         => 'vacc_table_rows',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Row',
                'sub_fields'   => array(
                    array('key' => 'field_sch_vacc_row_age',  'label' => 'Age Of The Child','name' => 'age',    'type' => 'text'),
                    array('key' => 'field_sch_vacc_row_vacs', 'label' => 'Name of Vaccine', 'name' => 'vaccines','type' => 'text'),
                ),
            ),
            array('key' => 'field_sch_vacc_table_note', 'label' => 'Below Note', 'name' => 'vacc_table_note', 'type' => 'textarea', 'rows' => 3),

            // ── Tab: Appointment Banner ──
            array('key' => 'field_sch_vacc_tab_appt', 'label' => 'Appointment Banner', 'type' => 'tab'),
            array('key' => 'field_sch_vacc_appt_heading', 'label' => 'Heading Text', 'name' => 'vacc_appt_heading', 'type' => 'text', 'default_value' => 'FOR VACCINATION APPOINTMENT, PLEASE CALL - 0144-2335565'),
            array('key' => 'field_sch_vacc_appt_heading_icon', 'label' => 'Heading Icon (Lucide)', 'name' => 'vacc_appt_heading_icon', 'type' => 'text', 'default_value' => 'phone'),
            array('key' => 'field_sch_vacc_appt_btn_link', 'label' => 'Button Link', 'name' => 'vacc_appt_btn_link', 'type' => 'link', 'return_format' => 'array'),
            array('key' => 'field_sch_vacc_appt_btn_icon', 'label' => 'Button Icon (Lucide)', 'name' => 'vacc_appt_btn_icon', 'type' => 'text', 'default_value' => 'calendar-check'),

            // ── Tab: FAQ ──
            array('key' => 'field_sch_vacc_tab_faq', 'label' => 'FAQ', 'type' => 'tab'),
            array('key' => 'field_sch_vacc_faq_badge', 'label' => 'Badge', 'name' => 'vacc_faq_badge', 'type' => 'text', 'default_value' => 'Know More'),
            array('key' => 'field_sch_vacc_faq_heading', 'label' => 'Heading', 'name' => 'vacc_faq_heading', 'type' => 'text', 'default_value' => 'Common'),
            array('key' => 'field_sch_vacc_faq_heading_hl', 'label' => 'Heading Highlight', 'name' => 'vacc_faq_heading_highlight', 'type' => 'text', 'default_value' => 'Questions'),
            array('key' => 'field_sch_vacc_faq_desc', 'label' => 'Description', 'name' => 'vacc_faq_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Everything you need to know about vaccinations for your child'),
            array(
                'key'          => 'field_sch_vacc_faq_items',
                'label'        => 'FAQ Items',
                'name'         => 'vacc_faq_items',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add FAQ',
                'sub_fields'   => array(
                    array('key' => 'field_sch_vacc_faq_side', 'label' => 'Column (left/right)', 'name' => 'side', 'type' => 'select', 'choices' => array('left' => 'Left', 'right' => 'Right'), 'default_value' => 'left'),
                    array('key' => 'field_sch_vacc_faq_icon', 'label' => 'Icon (Lucide)', 'name' => 'icon', 'type' => 'text', 'default_value' => 'alert-circle'),
                    array('key' => 'field_sch_vacc_faq_title','label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_sch_vacc_faq_body', 'label' => 'Body',  'name' => 'body',  'type' => 'wysiwyg', 'media_upload' => 0, 'toolbar' => 'basic'),
                ),
            ),

            // ── Tab: Vaccination Services ──
            array('key' => 'field_sch_vacc_tab_services', 'label' => 'Vaccination Services', 'type' => 'tab'),
            array('key' => 'field_sch_vacc_services_badge', 'label' => 'Badge', 'name' => 'vacc_services_badge', 'type' => 'text', 'default_value' => 'Our Commitment'),
            array('key' => 'field_sch_vacc_services_heading', 'label' => 'Heading', 'name' => 'vacc_services_heading', 'type' => 'text', 'default_value' => 'International Standards Vaccination Services'),
            array('key' => 'field_sch_vacc_services_desc', 'label' => 'Description', 'name' => 'vacc_services_description', 'type' => 'textarea', 'rows' => 3),
            array(
                'key'          => 'field_sch_vacc_services_points',
                'label'        => 'Bullet Points',
                'name'         => 'vacc_services_points',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Point',
                'sub_fields'   => array(
                    array('key' => 'field_sch_vacc_point_icon', 'label' => 'Icon (Lucide)', 'name' => 'icon', 'type' => 'text', 'default_value' => 'check'),
                    array('key' => 'field_sch_vacc_point_title','label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_sch_vacc_point_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'text'),
                ),
            ),
            array('key' => 'field_sch_vacc_services_image', 'label' => 'Right Side Image', 'name' => 'vacc_services_image', 'type' => 'image', 'return_format' => 'url'),
            array('key' => 'field_sch_vacc_services_overlay_num', 'label' => 'Overlay Number', 'name' => 'vacc_services_overlay_number', 'type' => 'text', 'default_value' => '1000+'),
            array('key' => 'field_sch_vacc_services_overlay_label', 'label' => 'Overlay Label', 'name' => 'vacc_services_overlay_label', 'type' => 'text', 'default_value' => 'Children Vaccinated Yearly'),
        ),
        'location' => array(
            array(
                array('param' => 'page_template', 'operator' => '==', 'value' => 'page-vaccination.php'),
            ),
        ),
        'menu_order' => 8,
        'style'      => 'default',
    ));
}
add_action('acf/init', 'sch_register_vaccination_fields');

