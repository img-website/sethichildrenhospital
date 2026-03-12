<?php
/**
 * Contact form submission handler – uses wp_mail() (WP Mail SMTP hooks into it).
 */

if (!defined('ABSPATH')) exit;

/**
 * Build premium HTML email body for contact form submission.
 *
 * @param string $name    Sender name.
 * @param string $email   Sender email.
 * @param string $phone   Sender phone.
 * @param string $subject Subject line.
 * @param string $message Message body.
 * @return string HTML email body.
 */
function sch_get_contact_email_html($name, $email, $phone, $subject, $message) {

    $site_name = get_bloginfo('name');
    $primary   = '#00a650';
    $secondary = '#3d348b';
    $gray_50   = '#f8fafc';
    $gray_100  = '#f1f5f9';
    $gray_600  = '#475569';
    $gray_800  = '#1e293b';
    $gray_900  = '#0f172a';

    $name_esc    = esc_html($name);
    $email_esc   = esc_html($email);
    $phone_esc   = esc_html($phone);
    $subject_esc = esc_html($subject);
    $message_esc = nl2br(esc_html($message));

    $label_name    = esc_html__('Name', 'sethichildrenhospital');
    $label_email   = esc_html__('Email', 'sethichildrenhospital');
    $label_phone   = esc_html__('Phone', 'sethichildrenhospital');
    $label_subject = esc_html__('Subject', 'sethichildrenhospital');
    $label_message = esc_html__('Message', 'sethichildrenhospital');
    $heading      = esc_html__('New contact form submission', 'sethichildrenhospital');
    $footer_text  = sprintf(/* translators: %s: site name */ esc_html__('This email was sent from the contact form on %s.', 'sethichildrenhospital'), $site_name);

    ob_start();
    ?>
<!DOCTYPE html>
<html lang="<?php echo esc_attr(get_bloginfo('language')); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo esc_html($heading); ?></title>
</head>
<body style="margin:0; padding:0; background-color:#e2e8f0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; line-height: 1.6; color: <?php echo esc_attr($gray_800); ?>;">
    <div style="max-width: 560px; margin: 0 auto; padding: 32px 20px;">
        <!-- Card container -->
        <div style="background:#ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1);">
            <!-- Header strip -->
            <div style="background-color: <?php echo esc_attr($primary); ?>; background: linear-gradient(135deg, <?php echo esc_attr($primary); ?> 0%, <?php echo esc_attr($secondary); ?> 100%); padding: 28px 32px; text-align: center;">
                <h1 style="margin:0; font-size: 20px; font-weight: 700; color: #ffffff; letter-spacing: -0.02em;"><?php echo $heading; ?></h1>
                <p style="margin: 6px 0 0; font-size: 13px; color: rgba(255,255,255,0.9);"><?php echo esc_html($site_name); ?></p>
            </div>
            <!-- Content -->
            <div style="padding: 32px;">
                <p style="margin: 0 0 24px; font-size: 14px; color: <?php echo esc_attr($gray_600); ?>;"><?php echo esc_html(sprintf(__('You have received a new message from %s.', 'sethichildrenhospital'), $name_esc)); ?></p>

                <div style="background: <?php echo esc_attr($gray_50); ?>; border-radius: 12px; padding: 20px 24px; margin-bottom: 24px;">
                    <div style="margin-bottom: 16px;">
                        <span style="display: block; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; color: <?php echo esc_attr($gray_600); ?>;"><?php echo $label_name; ?></span>
                        <span style="font-size: 15px; font-weight: 500; color: <?php echo esc_attr($gray_900); ?>;"><?php echo $name_esc; ?></span>
                    </div>
                    <div style="margin-bottom: 16px;">
                        <span style="display: block; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; color: <?php echo esc_attr($gray_600); ?>;"><?php echo $label_email; ?></span>
                        <a href="mailto:<?php echo esc_attr($email); ?>" style="font-size: 15px; color: <?php echo esc_attr($primary); ?>; text-decoration: none; font-weight: 500;"><?php echo $email_esc; ?></a>
                    </div>
                    <?php if ($phone_esc !== '') : ?>
                    <div style="margin-bottom: 16px;">
                        <span style="display: block; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; color: <?php echo esc_attr($gray_600); ?>;"><?php echo $label_phone; ?></span>
                        <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $phone)); ?>" style="font-size: 15px; color: <?php echo esc_attr($primary); ?>; text-decoration: none; font-weight: 500;"><?php echo $phone_esc; ?></a>
                    </div>
                    <?php endif; ?>
                    <?php if ($subject_esc !== '') : ?>
                    <div>
                        <span style="display: block; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; color: <?php echo esc_attr($gray_600); ?>;"><?php echo $label_subject; ?></span>
                        <span style="font-size: 15px; font-weight: 500; color: <?php echo esc_attr($gray_900); ?>;"><?php echo $subject_esc; ?></span>
                    </div>
                    <?php endif; ?>
                </div>

                <div style="margin-bottom: 0;">
                    <span style="display: block; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; color: <?php echo esc_attr($gray_600); ?>; margin-bottom: 10px;"><?php echo $label_message; ?></span>
                    <div style="background: #ffffff; border: 1px solid <?php echo esc_attr($gray_100); ?>; border-radius: 12px; padding: 20px 24px; font-size: 15px; color: <?php echo esc_attr($gray_800); ?>;"><?php echo $message_esc; ?></div>
                </div>
            </div>
            <!-- Footer -->
            <div style="padding: 20px 32px; background: <?php echo esc_attr($gray_50); ?>; border-top: 1px solid <?php echo esc_attr($gray_100); ?>;">
                <p style="margin: 0; font-size: 12px; color: <?php echo esc_attr($gray_600); ?>;"><?php echo $footer_text; ?></p>
            </div>
        </div>
    </div>
</body>
</html>
    <?php
    return ob_get_clean();
}

/**
 * Handle contact form POST – send email via wp_mail().
 */
function sch_handle_contact_form_submit() {

    if (!isset($_POST['sch_contact_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['sch_contact_nonce'])), 'sch_contact_form')) {
        sch_contact_redirect('error', __('Security check failed. Please try again.', 'sethichildrenhospital'));
        return;
    }

    $raw_name  = isset($_POST['sch_contact_name']) && is_string($_POST['sch_contact_name']) ? wp_unslash($_POST['sch_contact_name']) : '';
    $raw_email = isset($_POST['sch_contact_email']) && is_string($_POST['sch_contact_email']) ? wp_unslash($_POST['sch_contact_email']) : '';
    $name      = sanitize_text_field(trim($raw_name));
    $email     = sanitize_email(trim($raw_email));
    $subject   = isset($_POST['sch_contact_subject']) && is_string($_POST['sch_contact_subject']) ? sanitize_text_field(wp_unslash($_POST['sch_contact_subject'])) : '';
    $phone     = isset($_POST['sch_contact_phone']) && is_string($_POST['sch_contact_phone']) ? sanitize_text_field(wp_unslash($_POST['sch_contact_phone'])) : '';
    $message   = isset($_POST['sch_contact_message']) && is_string($_POST['sch_contact_message']) ? sanitize_textarea_field(wp_unslash($_POST['sch_contact_message'])) : '';

    if (empty($name) || empty($email)) {
        sch_contact_redirect('error', __('Name and email are required.', 'sethichildrenhospital'));
        return;
    }

    if (!is_email($email)) {
        sch_contact_redirect('error', __('Please enter a valid email address.', 'sethichildrenhospital'));
        return;
    }

    // Save lead to database (custom post type: sch_lead).
    $lead_title = $name ? sprintf(__('Lead from %s', 'sethichildrenhospital'), $name) : __('Contact form lead', 'sethichildrenhospital');
    $lead_args  = array(
        'post_type'   => 'sch_lead',
        'post_status' => 'publish',
        'post_title'  => $lead_title,
        'post_content'=> $message,
    );
    $lead_id = wp_insert_post($lead_args, true);
    if (!is_wp_error($lead_id)) {
        update_post_meta($lead_id, 'sch_lead_name', $name);
        update_post_meta($lead_id, 'sch_lead_email', $email);
        update_post_meta($lead_id, 'sch_lead_phone', $phone);
        update_post_meta($lead_id, 'sch_lead_subject', $subject);
        update_post_meta($lead_id, 'sch_lead_referrer', wp_get_referer());
        update_post_meta($lead_id, 'sch_lead_ip', isset($_SERVER['REMOTE_ADDR']) ? sanitize_text_field(wp_unslash($_SERVER['REMOTE_ADDR'])) : '');
        update_post_meta($lead_id, 'sch_lead_user_agent', isset($_SERVER['HTTP_USER_AGENT']) ? sanitize_textarea_field(wp_unslash($_SERVER['HTTP_USER_AGENT'])) : '');
    }

    $to   = get_option('admin_email');
    $subj = $subject ? sprintf(/* translators: 1: site name, 2: subject */ __('[%1$s] Contact: %2$s', 'sethichildrenhospital'), get_bloginfo('name'), $subject) : sprintf(/* translators: %s: site name */ __('[%s] Contact form submission', 'sethichildrenhospital'), get_bloginfo('name'));
    $body = sch_get_contact_email_html($name, $email, $phone, $subject, $message);

    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
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
