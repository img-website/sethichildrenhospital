<?php
/**
 * ACF Field Group: Our Doctors Page
 * Section-wise tabs for CMS.
 */

if (!defined('ABSPATH')) exit;

function sch_register_doctors_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key'      => 'group_sch_doctors',
        'title'    => 'Our Doctors Page Sections',
        'fields'   => array(

            // ── Tab: Hero ──
            array('key' => 'field_sch_doctors_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
            array('key' => 'field_sch_doctors_hero_badge', 'label' => 'Badge Text', 'name' => 'doctors_hero_badge', 'type' => 'text', 'default_value' => 'Our Medical Experts', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_doctors_hero_badge_icon', 'label' => 'Badge Icon (Lucide)', 'name' => 'doctors_hero_badge_icon', 'type' => 'text', 'default_value' => 'stethoscope', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_doctors_hero_heading', 'label' => 'Heading', 'name' => 'doctors_hero_heading', 'type' => 'text', 'default_value' => 'Meet Our', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_doctors_hero_heading_hl', 'label' => 'Heading Highlight', 'name' => 'doctors_hero_heading_highlight', 'type' => 'text', 'default_value' => 'Specialists', 'wrapper' => array('width' => '50')),

            // ── Tab: Appointment Banner ──
            array('key' => 'field_sch_doctors_tab_appt', 'label' => 'Appointment Banner', 'type' => 'tab'),
            array('key' => 'field_sch_doctors_appt_heading', 'label' => 'Heading Text', 'name' => 'doctors_appt_heading', 'type' => 'text', 'default_value' => 'FOR BOOKING APPOINTMENT, PLEASE CALL - 0144-2701321'),
            array('key' => 'field_sch_doctors_appt_heading_icon', 'label' => 'Heading Icon (Lucide)', 'name' => 'doctors_appt_heading_icon', 'type' => 'text', 'default_value' => 'phone'),
            array('key' => 'field_sch_doctors_appt_btn_link', 'label' => 'Button Link', 'name' => 'doctors_appt_btn_link', 'type' => 'link', 'return_format' => 'array'),
            array('key' => 'field_sch_doctors_appt_btn_icon', 'label' => 'Button Icon (Lucide)', 'name' => 'doctors_appt_btn_icon', 'type' => 'text', 'default_value' => 'calendar-check'),

            // ── Tab: Featured Doctor ──
            array('key' => 'field_sch_doctors_tab_featured', 'label' => 'Featured Doctor', 'type' => 'tab'),
            array('key' => 'field_sch_doctors_featured_photo', 'label' => 'Photo', 'name' => 'doctors_featured_photo', 'type' => 'image', 'return_format' => 'url'),
            array('key' => 'field_sch_doctors_featured_badge', 'label' => 'Badge Label', 'name' => 'doctors_featured_badge', 'type' => 'text', 'default_value' => 'Director & Senior Consultant'),
            array('key' => 'field_sch_doctors_featured_name', 'label' => 'Name', 'name' => 'doctors_featured_name', 'type' => 'text', 'default_value' => 'Dr. Dileep Sethi'),
            array('key' => 'field_sch_doctors_featured_qualification', 'label' => 'Qualification', 'name' => 'doctors_featured_qualification', 'type' => 'text', 'default_value' => 'MD (paed.), MIAP, MNNF, MISCCM'),
            array('key' => 'field_sch_doctors_featured_bio', 'label' => 'Bio', 'name' => 'doctors_featured_bio', 'type' => 'wysiwyg', 'media_upload' => 0),
            array(
                'key'          => 'field_sch_doctors_featured_tags',
                'label'        => 'Tags (e.g. Experience, Award)',
                'name'         => 'doctors_featured_tags',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Tag',
                'sub_fields'   => array(
                    array('key' => 'field_sch_doctors_tag_icon', 'label' => 'Icon (Lucide)', 'name' => 'icon', 'type' => 'text', 'placeholder' => 'calendar'),
                    array('key' => 'field_sch_doctors_tag_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text'),
                ),
            ),

            // ── Tab: Our Doctors List ──
            array('key' => 'field_sch_doctors_tab_list', 'label' => 'Our Doctors List', 'type' => 'tab'),
            array('key' => 'field_sch_doctors_list_badge', 'label' => 'Badge', 'name' => 'doctors_list_badge', 'type' => 'text', 'default_value' => 'Our Team'),
            array('key' => 'field_sch_doctors_list_heading', 'label' => 'Heading', 'name' => 'doctors_list_heading', 'type' => 'text', 'default_value' => 'Our'),
            array('key' => 'field_sch_doctors_list_heading_hl', 'label' => 'Heading Highlight', 'name' => 'doctors_list_heading_highlight', 'type' => 'text', 'default_value' => 'Doctors'),
            array('key' => 'field_sch_doctors_list_desc', 'label' => 'Description', 'name' => 'doctors_list_description', 'type' => 'textarea', 'rows' => 2),
            array(
                'key'          => 'field_sch_doctors_list',
                'label'        => 'Doctors',
                'name'         => 'doctors_list',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Doctor',
                'sub_fields'   => array(
                    array('key' => 'field_sch_doc_photo', 'label' => 'Photo', 'name' => 'photo', 'type' => 'image', 'return_format' => 'url'),
                    array('key' => 'field_sch_doc_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text'),
                    array('key' => 'field_sch_doc_subtitle', 'label' => 'Subtitle (below name on card)', 'name' => 'subtitle', 'type' => 'text'),
                    array(
                        'key'          => 'field_sch_doc_highlights',
                        'label'        => 'Highlights (icon + text)',
                        'name'         => 'highlights',
                        'type'         => 'repeater',
                        'layout'       => 'table',
                        'button_label' => 'Add',
                        'sub_fields'   => array(
                            array('key' => 'field_sch_doc_hl_icon', 'label' => 'Icon (Lucide)', 'name' => 'icon', 'type' => 'text', 'placeholder' => 'award'),
                            array('key' => 'field_sch_doc_hl_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text'),
                        ),
                    ),
                ),
            ),

            // ── Tab: Visiting Faculty ──
            array('key' => 'field_sch_doctors_tab_faculty', 'label' => 'Visiting Faculty', 'type' => 'tab'),
            array('key' => 'field_sch_doctors_faculty_badge', 'label' => 'Badge', 'name' => 'doctors_faculty_badge', 'type' => 'text', 'default_value' => 'Expert Consultants'),
            array('key' => 'field_sch_doctors_faculty_heading', 'label' => 'Heading', 'name' => 'doctors_faculty_heading', 'type' => 'text', 'default_value' => 'Visiting'),
            array('key' => 'field_sch_doctors_faculty_heading_hl', 'label' => 'Heading Highlight', 'name' => 'doctors_faculty_heading_highlight', 'type' => 'text', 'default_value' => 'Faculty'),
            array('key' => 'field_sch_doctors_faculty_desc', 'label' => 'Description', 'name' => 'doctors_faculty_description', 'type' => 'textarea', 'rows' => 2),
            array(
                'key'          => 'field_sch_doctors_faculty_list',
                'label'        => 'Faculty Members',
                'name'         => 'doctors_faculty_list',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Member',
                'sub_fields'   => array(
                    array('key' => 'field_sch_faculty_icon', 'label' => 'Icon (Lucide)', 'name' => 'icon', 'type' => 'text', 'default_value' => 'user'),
                    array('key' => 'field_sch_faculty_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text'),
                    array('key' => 'field_sch_faculty_designation', 'label' => 'Designation', 'name' => 'designation', 'type' => 'text'),
                    array('key' => 'field_sch_faculty_extra', 'label' => 'Extra Info (optional)', 'name' => 'extra', 'type' => 'textarea', 'rows' => 2),
                ),
            ),
        ),
        'location' => array(
            array(
                array('param' => 'page_template', 'operator' => '==', 'value' => 'page-our-doctors.php'),
            ),
        ),
        'menu_order' => 7,
        'style'      => 'default',
    ));
}
add_action('acf/init', 'sch_register_doctors_fields');
