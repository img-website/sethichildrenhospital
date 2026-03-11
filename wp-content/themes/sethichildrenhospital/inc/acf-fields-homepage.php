<?php
/**
 * ACF Field Group: Homepage Sections
 * Each section is a tab in the admin editor.
 */

if (!defined('ABSPATH')) exit;

function sch_register_homepage_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key'      => 'group_sch_homepage',
        'title'    => 'Homepage Sections',
        'fields'   => array(

            // ═══════════════════════════════════════
            // TAB: Hero Slider
            // ═══════════════════════════════════════
            array(
                'key'   => 'field_sch_home_tab_hero',
                'label' => 'Hero Slider',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_home_hero_slides',
                'label'        => 'Slides',
                'name'         => 'hero_slides',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Slide',
                'sub_fields'   => array(
                    array(
                        'key'     => 'field_sch_home_hero_theme',
                        'label'   => 'Slide Color Theme',
                        'name'    => 'slide_theme',
                        'type'    => 'select',
                        'choices' => array(
                            'blue-green'  => 'Blue / Green (Primary)',
                            'purple'      => 'Purple (Secondary)',
                            'pink-orange' => 'Pink / Orange',
                        ),
                        'default_value' => 'blue-green',
                        'wrapper' => array('width' => '50'),
                    ),
                    array(
                        'key'     => 'field_sch_home_hero_layout',
                        'label'   => 'Layout',
                        'name'    => 'slide_layout',
                        'type'    => 'select',
                        'choices' => array(
                            'image-right' => 'Text Left / Image Right',
                            'image-left'  => 'Image Left / Text Right',
                        ),
                        'default_value' => 'image-right',
                        'wrapper' => array('width' => '50'),
                    ),
                    array(
                        'key'   => 'field_sch_home_hero_badge',
                        'label' => 'Badge Text',
                        'name'  => 'badge_text',
                        'type'  => 'text',
                        'wrapper' => array('width' => '50'),
                    ),
                    array(
                        'key'          => 'field_sch_home_hero_badge_icon',
                        'label'        => 'Badge Icon (Lucide)',
                        'name'         => 'badge_icon',
                        'type'         => 'text',
                        'placeholder'  => 'e.g. heart-pulse, stethoscope, baby',
                        'wrapper'      => array('width' => '50'),
                    ),
                    array(
                        'key'   => 'field_sch_home_hero_heading',
                        'label' => 'Heading',
                        'name'  => 'heading',
                        'type'  => 'text',
                        'wrapper' => array('width' => '50'),
                    ),
                    array(
                        'key'   => 'field_sch_home_hero_heading_highlight',
                        'label' => 'Heading Highlight (colored part)',
                        'name'  => 'heading_highlight',
                        'type'  => 'text',
                        'wrapper' => array('width' => '50'),
                    ),
                    array(
                        'key'   => 'field_sch_home_hero_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),
                    array(
                        'key'           => 'field_sch_home_hero_btn1_link',
                        'label'         => 'Button 1 Link',
                        'name'          => 'btn_primary_link',
                        'type'          => 'link',
                        'return_format' => 'array',
                        'wrapper'       => array('width' => '50'),
                    ),
                    array(
                        'key'           => 'field_sch_home_hero_btn2_link',
                        'label'         => 'Button 2 Link',
                        'name'          => 'btn_secondary_link',
                        'type'          => 'link',
                        'return_format' => 'array',
                        'wrapper'       => array('width' => '50'),
                    ),
                    array(
                        'key'          => 'field_sch_home_hero_btn1_icon',
                        'label'        => 'Button 1 Icon (Lucide)',
                        'name'         => 'btn_primary_icon',
                        'type'         => 'text',
                        'placeholder'  => 'e.g. arrow-right, calendar-check. Leave empty for no icon.',
                        'wrapper'      => array('width' => '50'),
                    ),
                    array(
                        'key'          => 'field_sch_home_hero_btn2_icon',
                        'label'        => 'Button 2 Icon (Lucide)',
                        'name'         => 'btn_secondary_icon',
                        'type'         => 'text',
                        'placeholder'  => 'e.g. phone, users, info',
                        'wrapper'      => array('width' => '50'),
                    ),
                    array(
                        'key'          => 'field_sch_home_hero_image',
                        'label'        => 'Slide Image',
                        'name'         => 'image',
                        'type'         => 'image',
                        'return_format'=> 'url',
                        'preview_size' => 'medium',
                    ),
                    array(
                        'key'   => 'field_sch_home_hero_float_number',
                        'label' => 'Floating Card Number',
                        'name'  => 'floating_number',
                        'type'  => 'text',
                        'wrapper' => array('width' => '33'),
                    ),
                    array(
                        'key'   => 'field_sch_home_hero_float_label',
                        'label' => 'Floating Card Label',
                        'name'  => 'floating_label',
                        'type'  => 'text',
                        'wrapper' => array('width' => '33'),
                    ),
                    array(
                        'key'          => 'field_sch_home_hero_float_icon',
                        'label'        => 'Floating Card Lucide Icon',
                        'name'         => 'floating_icon',
                        'type'         => 'text',
                        'placeholder'  => 'e.g. users, ambulance, thermometer',
                        'wrapper'      => array('width' => '34'),
                    ),
                    array(
                        'key'           => 'field_sch_home_hero_stats_style',
                        'label'         => 'Stats / Trust display style',
                        'name'          => 'stats_style',
                        'type'          => 'select',
                        'choices'       => array(
                            'inline' => 'Inline (icon + text, like slide 1 & 2)',
                            'grid'   => 'Grid (number + label, like slide 3)',
                        ),
                        'default_value' => 'inline',
                        'wrapper'       => array('width' => '100'),
                    ),
                    array(
                        'key'          => 'field_sch_home_hero_trust_badges',
                        'label'        => 'Trust Badges / Stats',
                        'name'         => 'trust_badges',
                        'type'         => 'repeater',
                        'layout'       => 'table',
                        'button_label' => 'Add Row',
                        'max'          => 4,
                        'instructions' => 'Inline: use Text + Icon. Grid: use Number + Label.',
                        'sub_fields'   => array(
                            array(
                                'key'   => 'field_sch_home_hero_badge_text',
                                'label' => 'Text (for Inline)',
                                'name'  => 'text',
                                'type'  => 'text',
                            ),
                            array(
                                'key'          => 'field_sch_home_hero_trust_item_icon',
                                'label'        => 'Icon (for Inline, e.g. circle-check)',
                                'name'         => 'icon',
                                'type'         => 'text',
                                'placeholder'  => 'circle-check',
                            ),
                            array(
                                'key'   => 'field_sch_home_hero_stat_number',
                                'label' => 'Number (for Grid)',
                                'name'  => 'number',
                                'type'  => 'text',
                                'placeholder' => 'e.g. 15+, 24/7',
                            ),
                            array(
                                'key'   => 'field_sch_home_hero_stat_label',
                                'label' => 'Label (for Grid)',
                                'name'  => 'label',
                                'type'  => 'text',
                                'placeholder' => 'e.g. NICU Beds',
                            ),
                        ),
                    ),
                ),
            ),

            // ═══════════════════════════════════════
            // TAB: Appointment Banner
            // ═══════════════════════════════════════
            array(
                'key'   => 'field_sch_home_tab_appointment',
                'label' => 'Appointment Banner',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_home_appt_heading',
                'label'        => 'Banner Heading',
                'name'         => 'appointment_banner_heading',
                'type'         => 'text',
                'default_value'=> 'FOR BOOKING APPOINTMENT, PLEASE CALL - 0144-2335565',
            ),
            array(
                'key'           => 'field_sch_home_appt_btn_link',
                'label'         => 'Button Link',
                'name'          => 'appointment_banner_link',
                'type'          => 'link',
                'return_format' => 'array',
            ),

            // ═══════════════════════════════════════
            // TAB: Mission & Overview
            // ═══════════════════════════════════════
            array(
                'key'   => 'field_sch_home_tab_mission',
                'label' => 'Mission & Overview',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_home_mission_badge',
                'label'        => 'Badge Text',
                'name'         => 'mission_badge',
                'type'         => 'text',
                'default_value'=> 'Our endeavour',
            ),
            array(
                'key'          => 'field_sch_home_mission_heading',
                'label'        => 'Heading',
                'name'         => 'mission_heading',
                'type'         => 'text',
                'default_value'=> 'Sethi Children',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_mission_heading_highlight',
                'label'        => 'Heading Highlight',
                'name'         => 'mission_heading_highlight',
                'type'         => 'text',
                'default_value'=> 'Hospital',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_mission_description',
                'label'        => 'Description',
                'name'         => 'mission_description',
                'type'         => 'wysiwyg',
                'media_upload' => 0,
                'toolbar'      => 'basic',
            ),
            array(
                'key'          => 'field_sch_home_mission_image',
                'label'        => 'Image',
                'name'         => 'mission_image',
                'type'         => 'image',
                'return_format'=> 'url',
                'preview_size' => 'medium',
            ),
            array(
                'key'          => 'field_sch_home_mission_image_badge',
                'label'        => 'Image Badge Text',
                'name'         => 'mission_image_badge',
                'type'         => 'text',
                'default_value'=> 'ISO certified',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_mission_badge_icon',
                'label'        => 'Image Badge Icon',
                'name'         => 'mission_image_badge_icon',
                'type'         => 'text',
                'placeholder'  => 'e.g. circle-check',
                'default_value'=> 'circle-check',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_mission_stats',
                'label'        => 'Stats',
                'name'         => 'mission_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Stat',
                'max'          => 4,
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_sch_home_mission_stat_number',
                        'label' => 'Number',
                        'name'  => 'number',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_sch_home_mission_stat_label',
                        'label' => 'Label',
                        'name'  => 'label',
                        'type'  => 'text',
                    ),
                ),
            ),

            // ═══════════════════════════════════════
            // TAB: Legacy & Vision
            // ═══════════════════════════════════════
            array(
                'key'   => 'field_sch_home_tab_legacy',
                'label' => 'Legacy & Vision',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_home_legacy_badge',
                'label'        => 'Badge Text',
                'name'         => 'legacy_badge',
                'type'         => 'text',
                'default_value'=> 'Our legacy',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_legacy_badge_icon',
                'label'        => 'Badge Icon',
                'name'         => 'legacy_badge_icon',
                'type'         => 'text',
                'placeholder'  => 'e.g. sparkles',
                'default_value'=> 'sparkles',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_legacy_heading',
                'label'        => 'Heading (before highlight)',
                'name'         => 'legacy_heading',
                'type'         => 'text',
                'default_value'=> 'The',
                'wrapper'      => array('width' => '33'),
            ),
            array(
                'key'          => 'field_sch_home_legacy_heading_highlight',
                'label'        => 'Heading Highlight',
                'name'         => 'legacy_heading_highlight',
                'type'         => 'text',
                'default_value'=> 'Legacy',
                'wrapper'      => array('width' => '34'),
            ),
            array(
                'key'          => 'field_sch_home_legacy_heading_suffix',
                'label'        => 'Heading (after highlight)',
                'name'         => 'legacy_heading_suffix',
                'type'         => 'text',
                'default_value'=> 'of excellence',
                'wrapper'      => array('width' => '33'),
            ),
            array(
                'key'          => 'field_sch_home_legacy_image',
                'label'        => 'Image',
                'name'         => 'legacy_image',
                'type'         => 'image',
                'return_format'=> 'url',
                'preview_size' => 'medium',
            ),
            array(
                'key'          => 'field_sch_home_legacy_founded_year',
                'label'        => 'Founded Year',
                'name'         => 'legacy_founded_year',
                'type'         => 'text',
                'default_value'=> '1997',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_legacy_founded_text',
                'label'        => 'Founded By Text',
                'name'         => 'legacy_founded_text',
                'type'         => 'text',
                'default_value'=> 'founded by Dr. Dileep Sethi',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_legacy_description',
                'label'        => 'Description',
                'name'         => 'legacy_description',
                'type'         => 'textarea',
                'rows'         => 3,
            ),
            array(
                'key'          => 'field_sch_home_legacy_vision_heading',
                'label'        => 'Vision Heading',
                'name'         => 'legacy_vision_heading',
                'type'         => 'text',
                'default_value'=> 'Our vision',
            ),
            array(
                'key'          => 'field_sch_home_legacy_vision_text',
                'label'        => 'Vision Text',
                'name'         => 'legacy_vision_text',
                'type'         => 'textarea',
                'rows'         => 3,
            ),
            array(
                'key'          => 'field_sch_home_legacy_stats',
                'label'        => 'Stats',
                'name'         => 'legacy_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Stat',
                'max'          => 4,
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_sch_home_legacy_stat_number',
                        'label' => 'Number',
                        'name'  => 'number',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_sch_home_legacy_stat_label',
                        'label' => 'Label',
                        'name'  => 'label',
                        'type'  => 'text',
                    ),
                ),
            ),

            // ═══════════════════════════════════════
            // TAB: Core Values
            // ═══════════════════════════════════════
            array(
                'key'   => 'field_sch_home_tab_values',
                'label' => 'Core Values',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_home_values_badge',
                'label'        => 'Badge Text',
                'name'         => 'values_badge',
                'type'         => 'text',
                'default_value'=> 'Why we are different',
            ),
            array(
                'key'          => 'field_sch_home_values_heading',
                'label'        => 'Heading',
                'name'         => 'values_heading',
                'type'         => 'text',
                'default_value'=> 'Our core',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_values_heading_highlight',
                'label'        => 'Heading Highlight',
                'name'         => 'values_heading_highlight',
                'type'         => 'text',
                'default_value'=> 'values',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_values_items',
                'label'        => 'Value Items',
                'name'         => 'values_items',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Value',
                'sub_fields'   => array(
                    array(
                        'key'         => 'field_sch_home_values_item_icon',
                        'label'       => 'Lucide Icon Name',
                        'name'        => 'icon',
                        'type'        => 'text',
                        'placeholder' => 'e.g. heart-pulse, graduation-cap, building-2',
                        'wrapper'     => array('width' => '25'),
                    ),
                    array(
                        'key'   => 'field_sch_home_values_item_heading',
                        'label' => 'Heading',
                        'name'  => 'heading',
                        'type'  => 'text',
                        'wrapper' => array('width' => '25'),
                    ),
                    array(
                        'key'   => 'field_sch_home_values_item_desc',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 2,
                        'wrapper' => array('width' => '25'),
                    ),
                    array(
                        'key'     => 'field_sch_home_values_item_color',
                        'label'   => 'Color Theme',
                        'name'    => 'color',
                        'type'    => 'select',
                        'choices' => array(
                            'green'  => 'Green (Primary)',
                            'purple' => 'Purple (Secondary)',
                        ),
                        'default_value' => 'green',
                        'wrapper' => array('width' => '25'),
                    ),
                ),
            ),

            // ═══════════════════════════════════════
            // TAB: Health Tips
            // ═══════════════════════════════════════
            array(
                'key'   => 'field_sch_home_tab_health',
                'label' => 'Health Tips',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_home_health_badge',
                'label'        => 'Badge Text',
                'name'         => 'health_tips_badge',
                'type'         => 'text',
                'default_value'=> 'Health Information',
            ),
            array(
                'key'          => 'field_sch_home_health_heading',
                'label'        => 'Heading',
                'name'         => 'health_tips_heading',
                'type'         => 'text',
                'default_value'=> 'Our Health',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_health_heading_hl',
                'label'        => 'Heading Highlight',
                'name'         => 'health_tips_heading_highlight',
                'type'         => 'text',
                'default_value'=> 'Tips',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_health_items',
                'label'        => 'Tips',
                'name'         => 'health_tips_items',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Tip',
                'sub_fields'   => array(
                    array(
                        'key'         => 'field_sch_home_health_item_icon',
                        'label'       => 'Lucide Icon',
                        'name'        => 'icon',
                        'type'        => 'text',
                        'wrapper'     => array('width' => '20'),
                    ),
                    array(
                        'key'   => 'field_sch_home_health_item_heading',
                        'label' => 'Heading',
                        'name'  => 'heading',
                        'type'  => 'text',
                        'wrapper' => array('width' => '20'),
                    ),
                    array(
                        'key'   => 'field_sch_home_health_item_desc',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 2,
                        'wrapper' => array('width' => '20'),
                    ),
                    array(
                        'key'           => 'field_sch_home_health_item_link',
                        'label'         => 'Link',
                        'name'          => 'link',
                        'type'          => 'link',
                        'return_format' => 'array',
                        'wrapper'       => array('width' => '20'),
                    ),
                    array(
                        'key'     => 'field_sch_home_health_item_color',
                        'label'   => 'Color',
                        'name'    => 'color',
                        'type'    => 'select',
                        'choices' => array(
                            'green'  => 'Green',
                            'purple' => 'Purple',
                            'pink'   => 'Pink',
                        ),
                        'wrapper' => array('width' => '20'),
                    ),
                ),
            ),

            // ═══════════════════════════════════════
            // TAB: Emergency Services
            // ═══════════════════════════════════════
            array(
                'key'   => 'field_sch_home_tab_emergency',
                'label' => 'Emergency Services',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_home_emergency_heading',
                'label'        => 'Emergency Card Heading',
                'name'         => 'emergency_heading',
                'type'         => 'text',
                'default_value'=> 'Emergency Services',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_emergency_icon',
                'label'        => 'Emergency Card Icon',
                'name'         => 'emergency_card_icon',
                'type'         => 'text',
                'placeholder'  => 'e.g. ambulance',
                'default_value'=> 'ambulance',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_emergency_phones',
                'label'        => 'Emergency Phone Numbers',
                'name'         => 'emergency_phones',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Phone',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_sch_home_emergency_phone',
                        'label' => 'Phone',
                        'name'  => 'phone',
                        'type'  => 'text',
                    ),
                ),
            ),
            array(
                'key'          => 'field_sch_home_emergency_night_heading',
                'label'        => 'Night Services Heading',
                'name'         => 'emergency_night_heading',
                'type'         => 'text',
                'default_value'=> 'Emergency Services at Night:',
            ),
            array(
                'key'          => 'field_sch_home_emergency_night_desc',
                'label'        => 'Night Services Description',
                'name'         => 'emergency_night_description',
                'type'         => 'textarea',
                'rows'         => 3,
            ),
            array(
                'key'          => 'field_sch_home_emergency_appt_phone',
                'label'        => 'Appointment Booking Phone',
                'name'         => 'emergency_appointment_phone',
                'type'         => 'text',
                'default_value'=> '0144-2335565',
            ),
            array(
                'key'          => 'field_sch_home_important_heading',
                'label'        => 'Important Notes Heading',
                'name'         => 'important_notes_heading',
                'type'         => 'text',
                'default_value'=> 'Important Notes',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_important_icon',
                'label'        => 'Important Notes Icon',
                'name'         => 'important_notes_icon',
                'type'         => 'text',
                'placeholder'  => 'e.g. info',
                'default_value'=> 'info',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_important_notes',
                'label'        => 'Important Notes',
                'name'         => 'important_notes',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Note',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_sch_home_important_note',
                        'label' => 'Note Text',
                        'name'  => 'note',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),
                ),
            ),

            // ═══════════════════════════════════════
            // TAB: CTA Section
            // ═══════════════════════════════════════
            array(
                'key'   => 'field_sch_home_tab_cta',
                'label' => 'CTA Section',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_home_cta_badge',
                'label'        => 'Badge Text',
                'name'         => 'cta_badge',
                'type'         => 'text',
                'default_value'=> 'join our family',
            ),
            array(
                'key'          => 'field_sch_home_cta_heading',
                'label'        => 'Heading',
                'name'         => 'cta_heading',
                'type'         => 'text',
                'default_value'=> 'Be part of the Sethi legacy',
            ),
            array(
                'key'          => 'field_sch_home_cta_desc',
                'label'        => 'Description',
                'name'         => 'cta_description',
                'type'         => 'textarea',
                'rows'         => 2,
            ),
            array(
                'key'          => 'field_sch_home_cta_bg_image',
                'label'        => 'Background Image',
                'name'         => 'cta_bg_image',
                'type'         => 'image',
                'return_format'=> 'url',
            ),
            array(
                'key'           => 'field_sch_home_cta_btn1_link',
                'label'         => 'Button 1 Link',
                'name'          => 'cta_btn1_link',
                'type'          => 'link',
                'return_format' => 'array',
                'wrapper'       => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_cta_btn1_icon',
                'label'        => 'Button 1 Icon',
                'name'         => 'cta_btn1_icon',
                'type'         => 'text',
                'placeholder'  => 'e.g. calendar-check',
                'default_value'=> 'calendar-check',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'           => 'field_sch_home_cta_btn2_link',
                'label'         => 'Button 2 Link',
                'name'          => 'cta_btn2_link',
                'type'          => 'link',
                'return_format' => 'array',
                'wrapper'       => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_cta_btn2_icon',
                'label'        => 'Button 2 Icon',
                'name'         => 'cta_btn2_icon',
                'type'         => 'text',
                'placeholder'  => 'e.g. phone',
                'default_value'=> 'phone',
                'wrapper'      => array('width' => '50'),
            ),

            // ═══════════════════════════════════════
            // TAB: Team / Doctors
            // ═══════════════════════════════════════
            array(
                'key'   => 'field_sch_home_tab_team',
                'label' => 'Our Doctors',
                'type'  => 'tab',
            ),
            array(
                'key'          => 'field_sch_home_team_badge',
                'label'        => 'Badge Text',
                'name'         => 'team_badge',
                'type'         => 'text',
                'default_value'=> 'Our Experts',
            ),
            array(
                'key'          => 'field_sch_home_team_heading',
                'label'        => 'Heading',
                'name'         => 'team_heading',
                'type'         => 'text',
                'default_value'=> 'Meet Our',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_team_heading_hl',
                'label'        => 'Heading Highlight',
                'name'         => 'team_heading_highlight',
                'type'         => 'text',
                'default_value'=> 'Specialists',
                'wrapper'      => array('width' => '50'),
            ),
            array(
                'key'          => 'field_sch_home_team_desc',
                'label'        => 'Description',
                'name'         => 'team_description',
                'type'         => 'textarea',
                'rows'         => 2,
            ),
            array(
                'key'          => 'field_sch_home_team_members',
                'label'        => 'Team Members',
                'name'         => 'team_members',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Doctor',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_sch_home_team_name',
                        'label' => 'Name (without Dr.)',
                        'name'  => 'name',
                        'type'  => 'text',
                        'wrapper' => array('width' => '33'),
                    ),
                    array(
                        'key'   => 'field_sch_home_team_specialization',
                        'label' => 'Specialization',
                        'name'  => 'specialization',
                        'type'  => 'text',
                        'wrapper' => array('width' => '34'),
                    ),
                    array(
                        'key'          => 'field_sch_home_team_photo',
                        'label'        => 'Photo',
                        'name'         => 'photo',
                        'type'         => 'image',
                        'return_format'=> 'url',
                        'preview_size' => 'thumbnail',
                        'wrapper'      => array('width' => '33'),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_type',
                    'operator' => '==',
                    'value'    => 'front_page',
                ),
            ),
        ),
        'menu_order' => 0,
        'style'      => 'default',
        'position'   => 'normal',
    ));
}
add_action('acf/init', 'sch_register_homepage_fields');
