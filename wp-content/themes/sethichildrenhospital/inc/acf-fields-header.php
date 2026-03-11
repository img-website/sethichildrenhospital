<?php
/**
 * ACF Field Group: Header Settings
 */

if (!defined('ABSPATH')) exit;

function sch_register_header_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key'      => 'group_sch_header',
        'title'    => 'Header Settings',
        'fields'   => array(

            // ── Tab: Logo ──
            array(
                'key'   => 'field_sch_header_tab_logo',
                'label' => 'Logo',
                'type'  => 'tab',
            ),
            array(
                'key'           => 'field_sch_header_logo',
                'label'         => 'Header Logo',
                'name'          => 'header_logo',
                'type'          => 'image',
                'return_format' => 'url',
                'preview_size'  => 'medium',
                'instructions'  => 'Leave empty to use the site logo from Appearance → Customize.',
            ),

            // ── Tab: Desktop Navigation ──
            array(
                'key'   => 'field_sch_header_tab_desktop_nav',
                'label' => 'Desktop Navigation',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_header_desktop_nav',
                'label'        => 'Desktop Nav Links',
                'name'         => 'header_desktop_nav',
                'type'         => 'repeater',
                'instructions' => 'Links shown in the top header bar (desktop only). Template has: Home, About, Services, Insurance.',
                'layout'       => 'table',
                'button_label' => 'Add Nav Link',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_sch_header_desktop_nav_link',
                        'label'         => 'Link',
                        'name'          => 'link',
                        'type'          => 'link',
                        'return_format' => 'array',
                    ),
                ),
            ),

            // ── Tab: Overlay Menu ──
            array(
                'key'   => 'field_sch_header_tab_overlay',
                'label' => 'Overlay Menu',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_header_overlay_nav',
                'label'        => 'Overlay Menu Links',
                'name'         => 'header_overlay_nav',
                'type'         => 'repeater',
                'instructions' => 'Large links in the fullscreen overlay "Explore" section. Template has: Home, About, Services, Doctors.',
                'layout'       => 'table',
                'button_label' => 'Add Menu Link',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_sch_header_overlay_nav_link',
                        'label'         => 'Link',
                        'name'          => 'link',
                        'type'          => 'link',
                        'return_format' => 'array',
                    ),
                ),
            ),
            array(
                'key'           => 'field_sch_header_overlay_appointment_link',
                'label'         => 'Appointment Link (Quick Action)',
                'name'          => 'header_overlay_appointment_link',
                'type'          => 'link',
                'return_format' => 'array',
            ),
            array(
                'key'           => 'field_sch_header_overlay_emergency_link',
                'label'         => 'Emergency Link',
                'name'          => 'header_overlay_emergency_link',
                'type'          => 'link',
                'return_format' => 'array',
            ),

            // ── Tab: Contact Info ──
            array(
                'key'   => 'field_sch_header_tab_contact',
                'label' => 'Contact Info (Overlay)',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_header_contact_email',
                'label'        => 'Email',
                'name'         => 'header_contact_email',
                'type'         => 'email',
                'default_value'=> 'info@sethihospital.com',
            ),
            array(
                'key'          => 'field_sch_header_contact_phone',
                'label'        => 'Phone',
                'name'         => 'header_contact_phone',
                'type'         => 'text',
                'default_value'=> '+91 98290 20015',
            ),

            // ── Tab: Social Links ──
            array(
                'key'   => 'field_sch_header_tab_social',
                'label' => 'Social Links',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_header_social_links',
                'label'        => 'Social Links',
                'name'         => 'header_social_links',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Social Link',
                'sub_fields'   => array(
                    array(
                        'key'     => 'field_sch_header_social_platform',
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
                        'key'   => 'field_sch_header_social_url',
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
                    'value'    => 'sch-header-settings',
                ),
            ),
        ),
        'menu_order' => 0,
        'style'      => 'default',
    ));
}
add_action('acf/init', 'sch_register_header_fields');
