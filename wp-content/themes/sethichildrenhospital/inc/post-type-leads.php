<?php
/**
 * Custom Post Type: Leads (Contact form submissions)
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register sch_lead post type for storing contact form submissions.
 */
function sch_register_leads_cpt() {
    $labels = array(
        'name'               => __('Leads', 'sethichildrenhospital'),
        'singular_name'      => __('Lead', 'sethichildrenhospital'),
        'menu_name'          => __('Leads', 'sethichildrenhospital'),
        'name_admin_bar'     => __('Lead', 'sethichildrenhospital'),
        'add_new'            => __('Add New', 'sethichildrenhospital'),
        'add_new_item'       => __('Add New Lead', 'sethichildrenhospital'),
        'new_item'           => __('New Lead', 'sethichildrenhospital'),
        'edit_item'          => __('Edit Lead', 'sethichildrenhospital'),
        'view_item'          => __('View Lead', 'sethichildrenhospital'),
        'all_items'          => __('Leads', 'sethichildrenhospital'),
        'search_items'       => __('Search Leads', 'sethichildrenhospital'),
        'not_found'          => __('No leads found.', 'sethichildrenhospital'),
        'not_found_in_trash' => __('No leads found in Trash.', 'sethichildrenhospital'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => false,
        'show_in_admin_bar'  => true,
        'exclude_from_search'=> true,
        'publicly_queryable' => false,
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 25,
        'menu_icon'          => 'dashicons-email-alt',
        // Store full message in post_content but don't expose editor; list screen will show main fields.
        'supports'           => array('title'),
        'capability_type'    => 'post',
        'map_meta_cap'       => true,
    );

    register_post_type('sch_lead', $args);
}
add_action('init', 'sch_register_leads_cpt');

/**
 * Custom columns for Leads list table.
 */
function sch_leads_columns($columns) {
    $new = array();
    $new['cb']        = $columns['cb'];
    $new['title']     = __('Lead', 'sethichildrenhospital');
    $new['sch_name']  = __('Name', 'sethichildrenhospital');
    $new['sch_email'] = __('Email', 'sethichildrenhospital');
    $new['sch_phone'] = __('Phone', 'sethichildrenhospital');
    $new['sch_subject'] = __('Subject', 'sethichildrenhospital');
    $new['sch_message'] = __('Message', 'sethichildrenhospital');
    $new['sch_date']  = __('Date', 'sethichildrenhospital');

    return $new;
}
add_filter('manage_sch_lead_posts_columns', 'sch_leads_columns');

function sch_leads_custom_column($column, $post_id) {
    if ($column === 'sch_name') {
        $name = get_post_meta($post_id, 'sch_lead_name', true);
        echo $name ? esc_html($name) : '—';
    } elseif ($column === 'sch_email') {
        $email = get_post_meta($post_id, 'sch_lead_email', true);
        echo $email ? esc_html($email) : '—';
    } elseif ($column === 'sch_phone') {
        $phone = get_post_meta($post_id, 'sch_lead_phone', true);
        echo $phone ? esc_html($phone) : '—';
    } elseif ($column === 'sch_subject') {
        $subject = get_post_meta($post_id, 'sch_lead_subject', true);
        echo $subject ? esc_html($subject) : '—';
    } elseif ($column === 'sch_message') {
        $content = get_post_field('post_content', $post_id);
        $excerpt = $content ? wp_trim_words($content, 18, '…') : '';
        echo $excerpt ? esc_html($excerpt) : '—';
    } elseif ($column === 'sch_date') {
        $date = get_post_time(get_option('date_format') . ' ' . get_option('time_format'), false, $post_id, true);
        echo esc_html($date);
    }
}
add_action('manage_sch_lead_posts_custom_column', 'sch_leads_custom_column', 10, 2);

/**
 * Lock down UI: no Add New, no Edit/Quick Edit – only view (if any) + Trash.
 */
function sch_leads_remove_add_new() {
    global $submenu;
    if (isset($submenu['edit.php?post_type=sch_lead'])) {
        foreach ($submenu['edit.php?post_type=sch_lead'] as $index => $item) {
            if (isset($item[2]) && $item[2] === 'post-new.php?post_type=sch_lead') {
                unset($submenu['edit.php?post_type=sch_lead'][$index]);
            }
        }
    }
}
add_action('admin_menu', 'sch_leads_remove_add_new', 999);

function sch_leads_hide_add_new_and_update() {
    $screen = get_current_screen();
    if ($screen && $screen->post_type === 'sch_lead') {
        // Hide \"Add New\" on list and edit screens.
        echo '<style>.post-type-sch_lead .page-title-action{display:none!important;}</style>';
        // On single edit screen, hide the Update button, but keep Move to Trash.
        if ($screen->base === 'post') {
            echo '<style>.post-type-sch_lead #publishing-action{display:none!important;}</style>';
        }
    }
}
add_action('admin_head', 'sch_leads_hide_add_new_and_update');

function sch_leads_row_actions($actions, $post) {
    if ($post->post_type === 'sch_lead') {
        unset($actions['edit']);
        unset($actions['inline hide']);
        // Keep 'trash' so admin can delete.
    }
    return $actions;
}
add_filter('post_row_actions', 'sch_leads_row_actions', 10, 2);

/**
 * Read-only details box on single Lead screen – show all data in a table.
 */
function sch_leads_add_details_metabox() {
    add_meta_box(
        'sch_lead_details',
        __('Lead details', 'sethichildrenhospital'),
        'sch_leads_render_details_metabox',
        'sch_lead',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'sch_leads_add_details_metabox');

function sch_leads_render_details_metabox($post) {
    $name    = get_post_meta($post->ID, 'sch_lead_name', true);
    $email   = get_post_meta($post->ID, 'sch_lead_email', true);
    $phone   = get_post_meta($post->ID, 'sch_lead_phone', true);
    $subject = get_post_meta($post->ID, 'sch_lead_subject', true);
    $ref     = get_post_meta($post->ID, 'sch_lead_referrer', true);
    $ip      = get_post_meta($post->ID, 'sch_lead_ip', true);
    $agent   = get_post_meta($post->ID, 'sch_lead_user_agent', true);
    $message = get_post_field('post_content', $post->ID);
    ?>
    <table class="widefat fixed striped">
        <tbody>
            <tr>
                <th style="width: 140px;"><?php esc_html_e('Name', 'sethichildrenhospital'); ?></th>
                <td><?php echo $name ? esc_html($name) : '—'; ?></td>
            </tr>
            <tr>
                <th><?php esc_html_e('Email', 'sethichildrenhospital'); ?></th>
                <td>
                    <?php if ($email) : ?>
                        <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                    <?php else : ?>
                        —
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th><?php esc_html_e('Phone', 'sethichildrenhospital'); ?></th>
                <td>
                    <?php if ($phone) : ?>
                        <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $phone)); ?>"><?php echo esc_html($phone); ?></a>
                    <?php else : ?>
                        —
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th><?php esc_html_e('Subject', 'sethichildrenhospital'); ?></th>
                <td><?php echo $subject ? esc_html($subject) : '—'; ?></td>
            </tr>
            <tr>
                <th><?php esc_html_e('Message', 'sethichildrenhospital'); ?></th>
                <td>
                    <?php echo $message ? wpautop(esc_html($message)) : '—'; ?>
                </td>
            </tr>
            <tr>
                <th><?php esc_html_e('Referrer URL', 'sethichildrenhospital'); ?></th>
                <td>
                    <?php if ($ref) : ?>
                        <a href="<?php echo esc_url($ref); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($ref); ?></a>
                    <?php else : ?>
                        —
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th><?php esc_html_e('IP address', 'sethichildrenhospital'); ?></th>
                <td><?php echo $ip ? esc_html($ip) : '—'; ?></td>
            </tr>
            <tr>
                <th><?php esc_html_e('User agent', 'sethichildrenhospital'); ?></th>
                <td style="word-break: break-all;"><?php echo $agent ? esc_html($agent) : '—'; ?></td>
            </tr>
        </tbody>
    </table>
    <p style="margin-top: 8px; color:#64748b; font-size:12px;">
        <?php esc_html_e('Leads are read-only. You can only move them to Trash from the right side.', 'sethichildrenhospital'); ?>
    </p>
    <?php
}

