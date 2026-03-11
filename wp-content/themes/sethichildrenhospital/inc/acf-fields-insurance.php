<?php
/**
 * ACF Field Group: Insurance & TPA Page
 * Section-wise tabs for CMS.
 */

if (!defined('ABSPATH')) exit;

function sch_register_insurance_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key'      => 'group_sch_insurance',
        'title'    => 'Insurance & TPA Page Sections',
        'fields'   => array(

            // ── Tab: Hero ──
            array('key' => 'field_sch_ins_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
            array('key' => 'field_sch_ins_hero_badge', 'label' => 'Badge Text', 'name' => 'ins_hero_badge', 'type' => 'text', 'default_value' => 'Cashless Facility', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_ins_hero_badge_icon', 'label' => 'Badge Icon (Lucide)', 'name' => 'ins_hero_badge_icon', 'type' => 'text', 'default_value' => 'shield', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_ins_hero_heading', 'label' => 'Heading', 'name' => 'ins_hero_heading', 'type' => 'text', 'default_value' => 'Insurance &', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_ins_hero_heading_hl', 'label' => 'Heading Highlight', 'name' => 'ins_hero_heading_highlight', 'type' => 'text', 'default_value' => 'TPA Partners', 'wrapper' => array('width' => '50')),

            // ── Tab: Contact Banner ──
            array('key' => 'field_sch_ins_tab_contact_banner', 'label' => 'Top Contact Banner', 'type' => 'tab'),
            array('key' => 'field_sch_ins_banner_heading', 'label' => 'Heading', 'name' => 'ins_banner_heading', 'type' => 'text', 'default_value' => 'For Any Enquiry & Detail Contact to'),
            array('key' => 'field_sch_ins_banner_person',  'label' => 'Contact Person Name', 'name' => 'ins_banner_person', 'type' => 'text', 'default_value' => 'Mr. Vipin Tolani'),
            array('key' => 'field_sch_ins_banner_icon',    'label' => 'Heading Icon (Lucide)', 'name' => 'ins_banner_icon', 'type' => 'text', 'default_value' => 'phone'),
            array('key' => 'field_sch_ins_banner_btn_link','label' => 'Button Link', 'name' => 'ins_banner_btn_link', 'type' => 'link', 'return_format' => 'array'),
            array('key' => 'field_sch_ins_banner_btn_icon','label' => 'Button Icon (Lucide)', 'name' => 'ins_banner_btn_icon', 'type' => 'text', 'default_value' => 'phone'),

            // ── Tab: Stats ──
            array('key' => 'field_sch_ins_tab_stats', 'label' => 'Stats', 'type' => 'tab'),
            array(
                'key'          => 'field_sch_ins_stats',
                'label'        => 'Stats Cards',
                'name'         => 'ins_stats',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Stat',
                'sub_fields'   => array(
                    array('key' => 'field_sch_ins_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text'),
                    array('key' => 'field_sch_ins_stat_label',  'label' => 'Label',  'name' => 'label',  'type' => 'text'),
                    array(
                        'key'     => 'field_sch_ins_stat_color',
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

            // ── Tab: Partners List ──
            array('key' => 'field_sch_ins_tab_partners', 'label' => 'Partners List', 'type' => 'tab'),
            array('key' => 'field_sch_ins_partners_badge',   'label' => 'Badge',   'name' => 'ins_partners_badge',   'type' => 'text', 'default_value' => 'Cashless Mediclaim'),
            array('key' => 'field_sch_ins_partners_heading', 'label' => 'Heading', 'name' => 'ins_partners_heading', 'type' => 'text', 'default_value' => 'Our'),
            array('key' => 'field_sch_ins_partners_heading_hl', 'label' => 'Heading Highlight', 'name' => 'ins_partners_heading_highlight', 'type' => 'text', 'default_value' => 'Network Partners'),
            array('key' => 'field_sch_ins_partners_desc',    'label' => 'Description', 'name' => 'ins_partners_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Cashless & Mediclaim Facility is available for these TPA / Insurance Companies'),
            array('key' => 'field_sch_ins_partners_intro',   'label' => 'Intro Heading (inside box)', 'name' => 'ins_partners_intro', 'type' => 'text', 'default_value' => 'Cashless & Mediclaim Facility Available For:'),
            array(
                'key'          => 'field_sch_ins_partners_list',
                'label'        => 'Partners',
                'name'         => 'ins_partners_list',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Partner',
                'sub_fields'   => array(
                    array('key' => 'field_sch_ins_partner_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text'),
                ),
            ),
            array('key' => 'field_sch_ins_partners_total', 'label' => 'Total Badge Text', 'name' => 'ins_partners_total', 'type' => 'text', 'default_value' => 'Total 36+ Insurance & TPA Partners'),

            // ── Tab: Contact & Support ──
            array('key' => 'field_sch_ins_tab_support', 'label' => 'Contact & Support', 'type' => 'tab'),
            array('key' => 'field_sch_ins_support_badge', 'label' => 'Badge', 'name' => 'ins_support_badge', 'type' => 'text', 'default_value' => 'Dedicated Support'),
            array('key' => 'field_sch_ins_support_badge_icon', 'label' => 'Badge Icon (Lucide)', 'name' => 'ins_support_badge_icon', 'type' => 'text', 'default_value' => 'headphones'),
            array('key' => 'field_sch_ins_support_heading', 'label' => 'Heading', 'name' => 'ins_support_heading', 'type' => 'text', 'default_value' => 'Need Help with Insurance?'),
            array('key' => 'field_sch_ins_support_desc', 'label' => 'Description', 'name' => 'ins_support_description', 'type' => 'textarea', 'rows' => 3),
            // Coordinator card
            array('key' => 'field_sch_ins_coord_name', 'label' => 'Coordinator Name', 'name' => 'ins_coord_name', 'type' => 'text', 'default_value' => 'Mr. Vipin Tolani'),
            array('key' => 'field_sch_ins_coord_role', 'label' => 'Coordinator Role', 'name' => 'ins_coord_role', 'type' => 'text', 'default_value' => 'Insurance Coordinator'),
            array('key' => 'field_sch_ins_coord_phone1', 'label' => 'Primary Phone', 'name' => 'ins_coord_phone1', 'type' => 'text', 'default_value' => '+91 78914 52498'),
            array('key' => 'field_sch_ins_coord_phone2', 'label' => 'Alternate Phone', 'name' => 'ins_coord_phone2', 'type' => 'text', 'default_value' => '+91 97993 46653'),
            array('key' => 'field_sch_ins_coord_hours',  'label' => 'Support Hours', 'name' => 'ins_coord_hours', 'type' => 'text', 'default_value' => '24/7 Available'),
            // Right image/overlay
            array('key' => 'field_sch_ins_support_image', 'label' => 'Right Side Image', 'name' => 'ins_support_image', 'type' => 'image', 'return_format' => 'url'),
            array('key' => 'field_sch_ins_support_overlay_title', 'label' => 'Overlay Title', 'name' => 'ins_support_overlay_title', 'type' => 'text', 'default_value' => 'Cashless'),
            array('key' => 'field_sch_ins_support_overlay_label', 'label' => 'Overlay Label', 'name' => 'ins_support_overlay_label', 'type' => 'text', 'default_value' => 'Facility Available'),
        ),
        'location' => array(
            array(
                array('param' => 'page_template', 'operator' => '==', 'value' => 'page-tpa-insurance.php'),
            ),
        ),
        'menu_order' => 10,
        'style'      => 'default',
    ));
}
add_action('acf/init', 'sch_register_insurance_fields');

