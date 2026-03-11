<?php
/**
 * ACF Field Group: Health Info Page
 * Section-wise tabs for CMS.
 */

if (!defined('ABSPATH')) exit;

function sch_register_health_info_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key'      => 'group_sch_health_info',
        'title'    => 'Health Info Page Sections',
        'fields'   => array(

            // ── Tab: Hero ──
            array('key' => 'field_sch_hi_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
            array('key' => 'field_sch_hi_hero_badge', 'label' => 'Badge Text', 'name' => 'hi_hero_badge', 'type' => 'text', 'default_value' => 'Parent Resources', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_hi_hero_badge_icon', 'label' => 'Badge Icon (Lucide)', 'name' => 'hi_hero_badge_icon', 'type' => 'text', 'default_value' => 'heart-pulse', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_hi_hero_heading', 'label' => 'Heading', 'name' => 'hi_hero_heading', 'type' => 'text', 'default_value' => 'Health Information', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sch_hi_hero_heading_hl', 'label' => 'Heading Highlight', 'name' => 'hi_hero_heading_highlight', 'type' => 'text', 'default_value' => 'for Parents', 'wrapper' => array('width' => '50')),

            // ── Tab: Articles ──
            array('key' => 'field_sch_hi_tab_articles', 'label' => 'Articles', 'type' => 'tab'),
            array(
                'key'          => 'field_sch_hi_articles_list',
                'label'        => 'Articles',
                'name'         => 'hi_articles_list',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Article',
                'sub_fields'   => array(
                    array('key' => 'field_sch_hi_article_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'medium'),
                    array('key' => 'field_sch_hi_article_tag_label', 'label' => 'Tag Label', 'name' => 'tag_label', 'type' => 'text'),
                    array(
                        'key'     => 'field_sch_hi_article_tag_color',
                        'label'   => 'Tag Color',
                        'name'    => 'tag_color',
                        'type'    => 'select',
                        'choices' => array(
                            'primary'   => 'Primary (green)',
                            'secondary' => 'Secondary (purple)',
                            'orange'    => 'Orange',
                            'red'       => 'Red',
                            'purple'    => 'Purple',
                        ),
                        'default_value' => 'primary',
                    ),
                    array('key' => 'field_sch_hi_article_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_sch_hi_article_excerpt1', 'label' => 'Excerpt 1', 'name' => 'excerpt1', 'type' => 'textarea', 'rows' => 3),
                    array('key' => 'field_sch_hi_article_excerpt2', 'label' => 'Excerpt 2', 'name' => 'excerpt2', 'type' => 'textarea', 'rows' => 3),
                    array('key' => 'field_sch_hi_article_updated', 'label' => 'Last Updated Text', 'name' => 'updated', 'type' => 'text', 'default_value' => 'Last updated: 2024'),
                    array('key' => 'field_sch_hi_article_link', 'label' => 'Read More Link', 'name' => 'link', 'type' => 'link', 'return_format' => 'array'),
                ),
            ),

            // ── Tab: Quick Tips ──
            array('key' => 'field_sch_hi_tab_tips', 'label' => 'Quick Tips', 'type' => 'tab'),
            array('key' => 'field_sch_hi_tips_badge', 'label' => 'Badge', 'name' => 'hi_tips_badge', 'type' => 'text', 'default_value' => 'Quick Reference'),
            array('key' => 'field_sch_hi_tips_heading', 'label' => 'Heading', 'name' => 'hi_tips_heading', 'type' => 'text', 'default_value' => 'Emergency'),
            array('key' => 'field_sch_hi_tips_heading_hl', 'label' => 'Heading Highlight', 'name' => 'hi_tips_heading_highlight', 'type' => 'text', 'default_value' => 'First Aid Tips'),
            array(
                'key'          => 'field_sch_hi_tips_list',
                'label'        => 'Tips',
                'name'         => 'hi_tips_list',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Tip',
                'sub_fields'   => array(
                    array('key' => 'field_sch_hi_tip_icon', 'label' => 'Icon (Lucide)', 'name' => 'icon', 'type' => 'text', 'default_value' => 'thermometer'),
                    array('key' => 'field_sch_hi_tip_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_sch_hi_tip_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3),
                    array(
                        'key'     => 'field_sch_hi_tip_color',
                        'label'   => 'Color',
                        'name'    => 'color',
                        'type'    => 'select',
                        'choices' => array(
                            'primary'   => 'Primary',
                            'secondary' => 'Secondary',
                            'accent'    => 'Accent',
                        ),
                        'default_value' => 'primary',
                    ),
                ),
            ),

            // ── Tab: Appointment Banner ──
            array('key' => 'field_sch_hi_tab_appt', 'label' => 'Appointment Banner', 'type' => 'tab'),
            array('key' => 'field_sch_hi_appt_heading', 'label' => 'Heading Text', 'name' => 'hi_appt_heading', 'type' => 'text', 'default_value' => 'FOR MEDICAL ADVICE & APPOINTMENTS, PLEASE CALL - 0144-2335565'),
            array('key' => 'field_sch_hi_appt_heading_icon', 'label' => 'Heading Icon (Lucide)', 'name' => 'hi_appt_heading_icon', 'type' => 'text', 'default_value' => 'phone'),
            array('key' => 'field_sch_hi_appt_btn_link', 'label' => 'Button Link', 'name' => 'hi_appt_btn_link', 'type' => 'link', 'return_format' => 'array'),
            array('key' => 'field_sch_hi_appt_btn_icon', 'label' => 'Button Icon (Lucide)', 'name' => 'hi_appt_btn_icon', 'type' => 'text', 'default_value' => 'calendar-check'),
        ),
        'location' => array(
            array(
                array('param' => 'page_template', 'operator' => '==', 'value' => 'page-health-info.php'),
            ),
        ),
        'menu_order' => 9,
        'style'      => 'default',
    ));
}
add_action('acf/init', 'sch_register_health_info_fields');

