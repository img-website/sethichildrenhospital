<?php
/**
 * Sethi Children Hospital Theme
 * Loads theme constants and includes functional modules.
 */

if (!defined('ABSPATH')) {
    exit;
}

define('SCH_THEME_VERSION', '1.0.0');
define('SCH_THEME_DIR', get_template_directory());
define('SCH_THEME_URI', get_template_directory_uri());

// ── Core ──
require_once SCH_THEME_DIR . '/inc/helpers.php';
require_once SCH_THEME_DIR . '/inc/theme-setup.php';
require_once SCH_THEME_DIR . '/inc/enqueue-assets.php';
require_once SCH_THEME_DIR . '/inc/template-filters.php';
require_once SCH_THEME_DIR . '/inc/widgets.php';

// ── Navigation ──
require_once SCH_THEME_DIR . '/inc/class-sch-walker-nav.php';

// ── ACF Options & Fields ──
require_once SCH_THEME_DIR . '/inc/acf-options.php';
require_once SCH_THEME_DIR . '/inc/acf-fields-header.php';
require_once SCH_THEME_DIR . '/inc/acf-fields-footer.php';
require_once SCH_THEME_DIR . '/inc/acf-fields-homepage.php';
require_once SCH_THEME_DIR . '/inc/acf-fields-about.php';
require_once SCH_THEME_DIR . '/inc/acf-fields-services.php';
require_once SCH_THEME_DIR . '/inc/acf-fields-doctors.php';
require_once SCH_THEME_DIR . '/inc/acf-fields-vaccination.php';
require_once SCH_THEME_DIR . '/inc/acf-fields-health-info.php';
