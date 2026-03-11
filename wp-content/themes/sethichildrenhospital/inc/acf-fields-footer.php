<?php
/**
 * ACF Field Group: Footer Settings
 */

if (!defined('ABSPATH')) exit;

function sch_register_footer_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key'      => 'group_sch_footer',
        'title'    => 'Footer Settings',
        'fields'   => array(

            // ── Tab: Logo ──
            array(
                'key'   => 'field_sch_footer_tab_logo',
                'label' => 'Logo',
                'type'  => 'tab',
            ),
            array(
                'key'           => 'field_sch_footer_logo',
                'label'         => 'Footer Logo',
                'name'          => 'footer_logo',
                'type'          => 'image',
                'return_format' => 'url',
                'preview_size'  => 'medium',
                'instructions'  => 'Leave empty to use the header logo or site logo from Customize.',
            ),

            // ── Tab: Footer About ──
            array(
                'key'   => 'field_sch_footer_tab_about',
                'label' => 'About & Address',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_footer_about_text',
                'label'        => 'Footer About Text',
                'name'         => 'footer_about_text',
                'type'         => 'textarea',
                'rows'         => 3,
                'default_value'=> 'We have been most trusted health care innovators for 25+ years. We are glad for our rich history of serving the community with excellence and compassion.',
            ),
            array(
                'key'          => 'field_sch_footer_address',
                'label'        => 'Address',
                'name'         => 'footer_address',
                'type'         => 'textarea',
                'rows'         => 2,
                'default_value'=> 'Sethi Children Hospital, 19 Lajpat Nagar, Vijay Mandir Road, Alwar',
            ),

            // ── Tab: Quick Links ──
            array(
                'key'   => 'field_sch_footer_tab_quick_links',
                'label' => 'Quick Links',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_footer_quick_links',
                'label'        => 'Quick Links',
                'name'         => 'footer_quick_links',
                'type'         => 'repeater',
                'instructions' => 'Template: Home, About Us, Our Doctors, Services, Vaccination, Insurance.',
                'layout'       => 'table',
                'button_label' => 'Add Link',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_sch_footer_quick_links_link',
                        'label'         => 'Link',
                        'name'          => 'link',
                        'type'          => 'link',
                        'return_format' => 'array',
                    ),
                ),
            ),

            // ── Tab: Our Services ──
            array(
                'key'   => 'field_sch_footer_tab_services',
                'label' => 'Our Services',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_footer_services_links',
                'label'        => 'Services Links',
                'name'         => 'footer_services_links',
                'type'         => 'repeater',
                'instructions' => 'Template: Super Speciality Clinics, PICU, Neonatology, X-Ray & Lab, Vaccination, Emergency.',
                'layout'       => 'table',
                'button_label' => 'Add Service Link',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_sch_footer_services_links_link',
                        'label'         => 'Link',
                        'name'          => 'link',
                        'type'          => 'link',
                        'return_format' => 'array',
                    ),
                ),
            ),

            // ── Tab: CTA Section ──
            array(
                'key'   => 'field_sch_footer_tab_cta',
                'label' => 'CTA Section',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_footer_cta_badge',
                'label'        => 'Badge Text',
                'name'         => 'footer_cta_badge',
                'type'         => 'text',
                'default_value'=> 'Get in touch',
            ),
            array(
                'key'          => 'field_sch_footer_cta_heading',
                'label'        => 'Heading',
                'name'         => 'footer_cta_heading',
                'type'         => 'text',
                'default_value'=> "We're Here for Your Child's Health",
            ),
            array(
                'key'          => 'field_sch_footer_cta_description',
                'label'        => 'Description',
                'name'         => 'footer_cta_description',
                'type'         => 'textarea',
                'rows'         => 2,
                'default_value'=> 'Have questions about admissions, programs, or emergency care? Our team is available 24/7 to help you.',
            ),
            array(
                'key'           => 'field_sch_footer_cta_btn1_link',
                'label'         => 'Button 1 Link',
                'name'          => 'footer_cta_btn1_link',
                'type'          => 'link',
                'return_format' => 'array',
                'wrapper'       => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_footer_cta_btn1_icon',
                'label'        => 'Button 1 Icon',
                'name'         => 'footer_cta_btn1_icon',
                'type'         => 'text',
                'placeholder'  => 'e.g. calendar-check',
                'default_value'=> 'calendar-check',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'           => 'field_sch_footer_cta_btn2_link',
                'label'         => 'Button 2 Link',
                'name'          => 'footer_cta_btn2_link',
                'type'          => 'link',
                'return_format' => 'array',
                'wrapper'       => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_footer_cta_btn2_icon',
                'label'        => 'Button 2 Icon',
                'name'         => 'footer_cta_btn2_icon',
                'type'         => 'text',
                'placeholder'  => 'e.g. phone',
                'default_value'=> 'phone',
                'wrapper'      => array('width' => '50'),
            ),

            // ── Tab: Contact Info ──
            array(
                'key'   => 'field_sch_footer_tab_contact',
                'label' => 'Contact Info',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_footer_emergency_phone',
                'label'        => 'Emergency Phone',
                'name'         => 'footer_emergency_phone',
                'type'         => 'text',
                'default_value'=> '+91 95491 01235',
            ),
            array(
                'key'          => 'field_sch_footer_appointment_phone',
                'label'        => 'Appointment Phone(s)',
                'name'         => 'footer_appointment_phone',
                'type'         => 'text',
                'default_value'=> '+91 78914 52498',
            ),
            array(
                'key'          => 'field_sch_footer_insurance_phone',
                'label'        => 'Insurance Phone',
                'name'         => 'footer_insurance_phone',
                'type'         => 'text',
                'default_value'=> '+91 97993 46653',
            ),
            array(
                'key'          => 'field_sch_footer_email',
                'label'        => 'Email',
                'name'         => 'footer_email',
                'type'         => 'email',
                'default_value'=> 'sethichildrenhospital@gmail.com',
            ),
            array(
                'key'          => 'field_sch_footer_fax',
                'label'        => 'Fax Number',
                'name'         => 'footer_fax',
                'type'         => 'text',
                'default_value'=> '+91-144-2335565',
            ),

            // ── Tab: Opening Hours ──
            array(
                'key'   => 'field_sch_footer_tab_hours',
                'label' => 'Opening Hours',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_footer_opening_hours',
                'label'        => 'Opening Hours',
                'name'         => 'footer_opening_hours',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Row',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_sch_footer_hours_day',
                        'label' => 'Day',
                        'name'  => 'day',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_sch_footer_hours_time',
                        'label' => 'Time',
                        'name'  => 'time',
                        'type'  => 'text',
                    ),
                    array(
                        'key'           => 'field_sch_footer_hours_highlight',
                        'label'         => 'Highlight Style',
                        'name'          => 'highlight',
                        'type'          => 'select',
                        'choices'       => array(
                            'normal'    => 'Normal (white)',
                            'accent'    => 'Accent (yellow)',
                            'primary'   => 'Primary (green, bold)',
                        ),
                        'default_value' => 'normal',
                    ),
                    array(
                        'key'           => 'field_sch_footer_hours_separator',
                        'label'         => 'Show Top Border?',
                        'name'          => 'separator',
                        'type'          => 'true_false',
                        'default_value' => 0,
                    ),
                ),
            ),

            // ── Tab: Bottom Bar ──
            array(
                'key'   => 'field_sch_footer_tab_bottom',
                'label' => 'Bottom Bar',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_footer_copyright',
                'label'        => 'Copyright Text',
                'name'         => 'footer_copyright',
                'type'         => 'text',
                'default_value'=> 'Copyright © 2017 Sethi Children Hospital. All rights reserved.',
            ),
            array(
                'key'          => 'field_sch_footer_developer_text',
                'label'        => 'Developer Credit Text',
                'name'         => 'footer_developer_text',
                'type'         => 'text',
                'default_value'=> 'IMG GLOBAL INFOTECH',
            ),
            array(
                'key'          => 'field_sch_footer_transport_note',
                'label'        => 'Transport Note',
                'name'         => 'footer_transport_note',
                'type'         => 'textarea',
                'rows'         => 2,
                'default_value'=> 'We have only exclusive "Hospital to Hospital" Transport services. We do not have "Home to Hospital" transport.',
            ),
            array(
                'key'          => 'field_sch_footer_disclaimer',
                'label'        => 'Disclaimer Text',
                'name'         => 'footer_disclaimer',
                'type'         => 'textarea',
                'rows'         => 2,
                'default_value'=> 'The intent of this website is purely for information and guidance. It is not meant for marketing or promotion of any kind.',
            ),

            // ── Tab: Social Links ──
            array(
                'key'   => 'field_sch_footer_tab_social',
                'label' => 'Social Links',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_footer_social_links',
                'label'        => 'Social Links',
                'name'         => 'footer_social_links',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Social Link',
                'sub_fields'   => array(
                    array(
                        'key'     => 'field_sch_footer_social_platform',
                        'label'   => 'Platform',
                        'name'    => 'platform',
                        'type'    => 'select',
                        'choices' => array(
                            'facebook'  => 'Facebook',
                            'twitter'   => 'Twitter',
                            'instagram' => 'Instagram',
                            'linkedin'  => 'LinkedIn',
                            'youtube'   => 'YouTube',
                        ),
                    ),
                    array(
                        'key'   => 'field_sch_footer_social_url',
                        'label' => 'URL',
                        'name'  => 'url',
                        'type'  => 'url',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'sch-footer-settings',
                ),
            ),
        ),
        'menu_order' => 0,
        'style'      => 'default',
    ));
}
add_action('acf/init', 'sch_register_footer_fields');
