<?php
/**
 * ACF Field Group: Super Speciality Clinics Page
 * Section-wise tabs for CMS.
 */

if (!defined('ABSPATH')) exit;

function sch_register_super_clinics_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key'      => 'group_sch_super_clinics',
        'title'    => 'Super Speciality Clinics Page Sections',
        'fields'   => array(

            // ── Tab: Hero ──
            array('key' => 'field_sch_sc_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
            array('key' => 'field_sch_sc_hero_badge', 'label' => 'Badge Text', 'name' => 'sc_hero_badge', 'type' => 'text', 'default_value' => 'Specialized Care', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_sc_hero_badge_icon', 'label' => 'Badge Icon (Lucide)', 'name' => 'sc_hero_badge_icon', 'type' => 'text', 'default_value' => 'stethoscope', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_sc_hero_heading', 'label' => 'Heading', 'name' => 'sc_hero_heading', 'type' => 'text', 'default_value' => 'Super Speciality', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_sc_hero_heading_hl', 'label' => 'Heading Highlight', 'name' => 'sc_hero_heading_highlight', 'type' => 'text', 'default_value' => 'Clinics', 'wrapper' => array('width' => '50')),

            // ── Tab: Gallery ──
            array('key' => 'field_sch_sc_tab_gallery', 'label' => 'Gallery', 'type' => 'tab'),
            array(
                'key'          => 'field_sch_sc_gallery_images',
                'label'        => 'Gallery Images',
                'name'         => 'sc_gallery_images',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Image',
                'sub_fields'   => array(
                    array('key' => 'field_sch_sc_gallery_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'medium'),
                    array('key' => 'field_sch_sc_gallery_alt',   'label' => 'Alt Text', 'name' => 'alt', 'type' => 'text'),
                ),
            ),

            // ── Tab: Overview & Features ──
            array('key' => 'field_sch_sc_tab_overview', 'label' => 'Overview & Features', 'type' => 'tab'),
            array('key' => 'field_sch_sc_about_title', 'label' => 'About Title', 'name' => 'sc_about_title', 'type' => 'text', 'default_value' => 'About the Clinics'),
            array('key' => 'field_sch_sc_about_text',  'label' => 'About Text',  'name' => 'sc_about_text',  'type' => 'textarea', 'rows' => 3),
            array(
                'key'          => 'field_sch_sc_we_offer_left',
                'label'        => '"We Offer" Left List',
                'name'         => 'sc_we_offer_left',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Item',
                'sub_fields'   => array(
                    array('key' => 'field_sch_sc_we_offer_left_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text'),
                ),
            ),
            array(
                'key'          => 'field_sch_sc_we_offer_right',
                'label'        => '"We Offer" Right List',
                'name'         => 'sc_we_offer_right',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Item',
                'sub_fields'   => array(
                    array('key' => 'field_sch_sc_we_offer_right_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text'),
                ),
            ),
            // Right side "Why Choose Us"
            array(
                'key'          => 'field_sch_sc_why_items',
                'label'        => 'Why Choose Us Cards',
                'name'         => 'sc_why_items',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Card',
                'sub_fields'   => array(
                    array('key' => 'field_sch_sc_why_icon',  'label' => 'Icon (Lucide)', 'name' => 'icon', 'type' => 'text', 'default_value' => 'award'),
                    array('key' => 'field_sch_sc_why_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_sch_sc_why_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2),
                ),
            ),
            array(
                'key'          => 'field_sch_sc_why_stats',
                'label'        => 'Quick Stats',
                'name'         => 'sc_why_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Stat',
                'sub_fields'   => array(
                    array('key' => 'field_sch_sc_why_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text'),
                    array('key' => 'field_sch_sc_why_stat_label',  'label' => 'Label',  'name' => 'label',  'type' => 'text'),
                ),
            ),

            // ── Tab: Clinics Schedule ──
            array('key' => 'field_sch_sc_tab_schedule', 'label' => 'Clinics Schedule', 'type' => 'tab'),
            array('key' => 'field_sch_sc_schedule_badge',   'label' => 'Badge', 'name' => 'sc_schedule_badge',   'type' => 'text', 'default_value' => 'Schedule'),
            array('key' => 'field_sch_sc_schedule_heading', 'label' => 'Heading', 'name' => 'sc_schedule_heading', 'type' => 'text', 'default_value' => 'Clinic'),
            array('key' => 'field_sch_sc_schedule_heading_hl', 'label' => 'Heading Highlight', 'name' => 'sc_schedule_heading_highlight', 'type' => 'text', 'default_value' => 'Timings'),
            array('key' => 'field_sch_sc_schedule_desc', 'label' => 'Description', 'name' => 'sc_schedule_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Visit our specialized clinics as per the scheduled days and timings'),
            array(
                'key'          => 'field_sch_sc_schedule_rows',
                'label'        => 'Schedule Rows',
                'name'         => 'sc_schedule_rows',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Clinic',
                'sub_fields'   => array(
                    array('key' => 'field_sch_sc_sched_clinic', 'label' => 'Clinic',  'name' => 'clinic',  'type' => 'text'),
                    array('key' => 'field_sch_sc_sched_days',   'label' => 'Days',    'name' => 'days',    'type' => 'text'),
                    array('key' => 'field_sch_sc_sched_time',   'label' => 'Timings', 'name' => 'timings', 'type' => 'text'),
                ),
            ),
            array('key' => 'field_sch_sc_schedule_note', 'label' => 'Below Note', 'name' => 'sc_schedule_note', 'type' => 'textarea', 'rows' => 3),

            // ── Tab: Appointment Banner ──
            array('key' => 'field_sch_sc_tab_appt', 'label' => 'Appointment Banner', 'type' => 'tab'),
            array('key' => 'field_sch_sc_appt_heading', 'label' => 'Heading Text', 'name' => 'sc_appt_heading', 'type' => 'text', 'default_value' => 'FOR APPOINTMENT IN SPECIALITY CLINICS, PLEASE CALL - 0144-2335565'),
            array('key' => 'field_sch_sc_appt_heading_icon', 'label' => 'Heading Icon (Lucide)', 'name' => 'sc_appt_heading_icon', 'type' => 'text', 'default_value' => 'phone'),
            array('key' => 'field_sch_sc_appt_btn_link', 'label' => 'Button Link', 'name' => 'sc_appt_btn_link', 'type' => 'link', 'return_format' => 'array'),
            array('key' => 'field_sch_sc_appt_btn_icon', 'label' => 'Button Icon (Lucide)', 'name' => 'sc_appt_btn_icon', 'type' => 'text', 'default_value' => 'calendar-check'),

            // ── Tab: Specialists ──
            array('key' => 'field_sch_sc_tab_specialists', 'label' => 'Specialists', 'type' => 'tab'),
            array('key' => 'field_sch_sc_spec_badge', 'label' => 'Badge', 'name' => 'sc_spec_badge', 'type' => 'text', 'default_value' => 'Our Experts'),
            array('key' => 'field_sch_sc_spec_heading', 'label' => 'Heading', 'name' => 'sc_spec_heading', 'type' => 'text', 'default_value' => 'Clinic'),
            array('key' => 'field_sch_sc_spec_heading_hl', 'label' => 'Heading Highlight', 'name' => 'sc_spec_heading_highlight', 'type' => 'text', 'default_value' => 'Specialists'),
            array(
                'key'          => 'field_sch_sc_spec_list',
                'label'        => 'Specialists',
                'name'         => 'sc_spec_list',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Specialist',
                'sub_fields'   => array(
                    array('key' => 'field_sch_sc_spec_photo', 'label' => 'Photo', 'name' => 'photo', 'type' => 'image', 'return_format' => 'url'),
                    array('key' => 'field_sch_sc_spec_name',  'label' => 'Name',  'name' => 'name',  'type' => 'text'),
                    array('key' => 'field_sch_sc_spec_role',  'label' => 'Role',  'name' => 'role',  'type' => 'text'),
                    array('key' => 'field_sch_sc_spec_extra', 'label' => 'Extra Info', 'name' => 'extra', 'type' => 'text'),
                    array('key' => 'field_sch_sc_spec_border_color', 'label' => 'Photo Border Color', 'name' => 'border_color', 'type' => 'select', 'choices' => array('primary' => 'Primary', 'secondary' => 'Secondary', 'purple' => 'Purple', 'pink' => 'Pink'), 'default_value' => 'primary'),
                ),
            ),
        ),
        'location' => array(
            array(
                array('param' => 'page_template', 'operator' => '==', 'value' => 'page-super-speciality-clinics.php'),
            ),
        ),
        'menu_order' => 11,
        'style'      => 'default',
    ));
}
add_action('acf/init', 'sch_register_super_clinics_fields');

