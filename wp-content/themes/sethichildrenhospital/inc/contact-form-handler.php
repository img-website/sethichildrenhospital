<?php
/**
 * Contact form submission handler – uses wp_mail() (WP Mail SMTP hooks into it).
 */

if (!defined('ABSPATH')) exit;

/**
 * Handle contact form POST – send email via wp_mail().
 */
function sch_handle_contact_form_submit() {

    if (!isset($_POST['sch_contact_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['sch_contact_nonce'])), 'sch_contact_form')) {
        sch_contact_redirect('error', __('Security check failed. Please try again.', 'sethichildrenhospital'));
        return;
    }

    $name    = isset($_POST['sch_contact_name']) ? sanitize_text_field(wp_unslash($_POST['sch_contact_name'])) : '';
    $email   = isset($_POST['sch_contact_email']) ? sanitize_email(wp_unslash($_POST['sch_contact_email'])) : '';
    $subject = isset($_POST['sch_contact_subject']) ? sanitize_text_field(wp_unslash($_POST['sch_contact_subject'])) : '';
    $phone   = isset($_POST['sch_contact_phone']) ? sanitize_text_field(wp_unslash($_POST['sch_contact_phone'])) : '';
    $message = isset($_POST['sch_contact_message']) ? sanitize_textarea_field(wp_unslash($_POST['sch_contact_message'])) : '';

    if (empty($name) || empty($email)) {
        sch_contact_redirect('error', __('Name and email are required.', 'sethichildrenhospital'));
        return;
    }

    if (!is_email($email)) {
        sch_contact_redirect('error', __('Please enter a valid email address.', 'sethichildrenhospital'));
        return;
    }

    $to      = get_option('admin_email');
    $subj    = $subject ? sprintf(/* translators: 1: site name, 2: subject */ __('[%1$s] Contact: %2$s', 'sethichildrenhospital'), get_bloginfo('name'), $subject) : sprintf(/* translators: %s: site name */ __('[%s] Contact form submission', 'sethichildrenhospital'), get_bloginfo('name'));
    $body    = sprintf(__('Name: %s', 'sethichildrenhospital'), $name) . "\n";
    $body   .= sprintf(__('Email: %s', 'sethichildrenhospital'), $email) . "\n";
    $body   .= sprintf(__('Phone: %s', 'sethichildrenhospital'), $phone) . "\n\n";
    $body   .= __('Message:', 'sethichildrenhospital') . "\n" . $message . "\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    $sent = wp_mail($to, $subj, $body, $headers);

    if ($sent) {
        sch_contact_redirect('success', __('Thank you. Your message has been sent.', 'sethichildrenhospital'));
    } else {
        sch_contact_redirect('error', __('Sorry, the message could not be sent. Please try again or contact us by phone.', 'sethichildrenhospital'));
    }
}

/**
 * Redirect back to referrer with status.
 *
 * @param string $status success|error
 * @param string $message Optional message (stored in transient for display).
 */
function sch_contact_redirect($status, $message = '') {

    $url = wp_get_referer();
    if (!$url) {
        $url = home_url('/contact-us/');
    }
    $url = remove_query_arg(array('sch_contact', 'sch_contact_msg'), $url);
    $url = add_query_arg('sch_contact', $status, $url);

    if ($message) {
        set_transient('sch_contact_flash', array('status' => $status, 'message' => $message), 60);
    }

    wp_safe_redirect(esc_url_raw($url));
    exit;
}

add_action('admin_post_nopriv_sch_contact_form', 'sch_handle_contact_form_submit');
add_action('admin_post_sch_contact_form', 'sch_handle_contact_form_submit');
