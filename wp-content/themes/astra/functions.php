<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.11.5' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ASTRA_THEME_ORG_VERSION', file_exists( ASTRA_THEME_DIR . 'inc/w-org-version.php' ) );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.11.1' );

/**
 * Load in-house compatibility.
 */
if ( ASTRA_THEME_ORG_VERSION ) {
	require_once ASTRA_THEME_DIR . 'inc/w-org-version.php';
}

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define( 'ASTRA_WEBSITE_BASE_URL', 'https://wpastra.com' );

/**
 * ToDo: Deprecate constants in future versions as they are no longer used in the codebase.
 */
define( 'ASTRA_PRO_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url( '/pricing/', 'free-theme', 'dashboard', 'upgrade' ) : 'https://woocommerce.com/products/astra-pro/' );
define( 'ASTRA_PRO_CUSTOMIZER_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url( '/pricing/', 'free-theme', 'customizer', 'upgrade' ) : 'https://woocommerce.com/products/astra-pro/' );

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/lib/docs/class-astra-docs-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/dark-mode.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

// Enable NPS Survey only if the starter templates version is < 4.3.7 or > 4.4.4 to prevent fatal error.
if ( ! defined( 'ASTRA_SITES_VER' ) || version_compare( ASTRA_SITES_VER, '4.3.7', '<' ) || version_compare( ASTRA_SITES_VER, '4.4.4', '>' ) ) {
	// NPS Survey Integration
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-notice.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-survey.php';
}

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-elementor-editor-settings.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/surecart/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';
add_filter('wp_nav_menu_items', 'replace_user_info_in_menu', 10, 2);
function replace_user_info_in_menu($items, $args) {
    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();
        $username = esc_html($current_user->display_name);
        $avatar = get_avatar($current_user->ID, 24); // 24 là kích thước ảnh avatar

        // Thay thế các placeholder
        $items = str_replace('%%username%%', $username, $items);
        $items = str_replace('%%user-avatar%%', $avatar, $items);
    } else {
        // Nếu chưa đăng nhập thì ẩn avatar, hoặc dùng icon mặc định
        $items = str_replace('%%username%%', 'Khách', $items);
        $items = str_replace('%%user-avatar%%', '', $items);
    }
    return $items;
}
if (!is_plugin_active('tutor/tutor.php')) {
    $_SESSION['course_key_notice'] = '🚫 Tutor LMS chưa được kích hoạt. Vui lòng kích hoạt plugin.';
    return;
}

function register_course_key_cpt() {
    register_post_type('course_key', array(
        'labels' => array(
            'name' => 'Course Keys',
            'singular_name' => 'Course Key',
            'add_new_item' => 'Add New Course Key',
            'edit_item' => 'Edit Course Key'
        ),
        'public' => false,
        'show_ui' => true,
        'menu_icon' => 'dashicons-key',
        'supports' => array('title'),
        'capability_type' => 'post',
        'has_archive' => false,
        'menu_position' => 20,
    ));
}
add_action('init', 'register_course_key_cpt');

// ✅ Meta Boxes
function course_key_meta_boxes() {
    add_meta_box('course_key_info', 'Course Key Details', 'course_key_meta_callback', 'course_key');
}
add_action('add_meta_boxes', 'course_key_meta_boxes');

function course_key_meta_callback($post) {
    wp_nonce_field('course_key_meta_nonce', 'course_key_meta_nonce');
    $course_id = get_post_meta($post->ID, 'course_id', true);
    $used = get_post_meta($post->ID, 'used', true);
    $used_by = get_post_meta($post->ID, 'used_by', true);
    ?>
    <p><label>Course ID: </label>
    <input type="number" name="course_id" value="<?php echo esc_attr($course_id); ?>" /></p>

    <p><label>Used: </label>
    <input type="checkbox" name="used" value="1" <?php checked($used, '1'); ?> /></p>

    <p><label>Used By (User ID): </label>
    <input type="number" name="used_by" value="<?php echo esc_attr($used_by); ?>" /></p>
    <?php
}

function save_course_key_meta($post_id) {
    // Check nonce and permissions
    if (!isset($_POST['course_key_meta_nonce']) || !wp_verify_nonce($_POST['course_key_meta_nonce'], 'course_key_meta_nonce')) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (array_key_exists('course_id', $_POST)) {
        update_post_meta($post_id, 'course_id', intval($_POST['course_id']));
    }
    update_post_meta($post_id, 'used', isset($_POST['used']) ? '1' : '0');

    if (array_key_exists('used_by', $_POST)) {
        update_post_meta($post_id, 'used_by', intval($_POST['used_by']));
    }
}
add_action('save_post', 'save_course_key_meta');

// ✅ Auto-generate title if missing
function auto_generate_course_key($post_id) {
    $post = get_post($post_id);
    if ($post->post_type !== 'course_key') return;

    if (!get_the_title($post_id)) {
        $random = strtoupper(bin2hex(random_bytes(3)));
        $key = 'KEY_' . $random;
        wp_update_post(array(
            'ID' => $post_id,
            'post_title' => $key
        ));
    }
}
add_action('save_post_course_key', 'auto_generate_course_key');

// ✅ Start session if not already started
function start_session() {
    if (!session_id()) {
        session_start();
    }
}
add_action('init', 'start_session');
// ✅ Course key activation handler - FIXED VERSION
function handle_course_key_activation() {

    if (!isset($_GET['active_key'])) {
        return;
    }

    $active_key = sanitize_text_field($_GET['active_key']);
    error_log("[DEBUG] ✅ Received active_key = {$active_key}");

    if (!is_user_logged_in()) {
        $redirect_url = esc_url_raw(add_query_arg('active_key', $active_key, home_url()));

        $custom_login_url = home_url('/login/?redirect_to=' . urlencode($redirect_url));

        wp_redirect($custom_login_url);
        exit;
    }

    $post = get_page_by_title($active_key, OBJECT, 'course_key');
    if (!$post) {
        return;
    }

    $course_id = get_post_meta($post->ID, 'course_id', true);
    if (!$course_id) {
        return;
    }

    $user_id = get_current_user_id();

    // Check if function exists
    if (!function_exists('tutor_enroll_a_student')) {
        $result = enroll_user_to_course_tutor_2x($course_id, $user_id, $post->ID);
    }

    // Redirect
    wp_redirect(get_permalink($course_id));
    exit;
}

function enroll_user_to_course_tutor_2x($course_id, $user_id, $course_key_post_id = null) {
    // Check if already enrolled
    $args = array(
        'post_type'   => 'tutor_enrolled',
        'post_parent' => $course_id,
        'author'      => $user_id,
        'post_status' => array('publish'),
        'fields'      => 'ids',
    );
    $existing = get_posts($args);

    if (!empty($existing)) {
        error_log('[DEBUG] 🔁 User already enrolled.');
        return 'already_enrolled';
    }

    $enroll_id = wp_insert_post(array(
        'post_type'   => 'tutor_enrolled',
        'post_title'  => 'Enrollment for user ' . $user_id . ' in course ' . $course_id,
        'post_status' => 'publish',
        'post_parent' => $course_id,
        'post_author' => $user_id,
    ));

    if (is_wp_error($enroll_id)) {
        error_log('[DEBUG] ❌ Failed to insert enrollment post: ' . $enroll_id->get_error_message());
        return false;
    }

    if ($course_key_post_id) {
        update_post_meta($course_key_post_id, 'used', '1');
        update_post_meta($course_key_post_id, 'used_by', $user_id);
        update_post_meta($course_key_post_id, 'used_date', current_time('mysql'));
    }

    error_log("[DEBUG] ✅ User {$user_id} enrolled in course {$course_id} with post ID {$enroll_id}");
    return true;
}

add_action('init', function () {
    handle_course_key_activation();
}, 1);



// ✅ Display notices
function display_course_key_notices() {
    if (isset($_SESSION['course_key_notice'])) {
        echo '<div id="course-key-notice" style="position:fixed;bottom:20px;right:20px;padding:15px 25px;background:#333;color:#fff;border-radius:8px;z-index:9999;font-size:16px;box-shadow:0 4px 6px rgba(0,0,0,0.1);max-width:400px;">'
            . esc_html($_SESSION['course_key_notice']) .
            '<button onclick="document.getElementById(\'course-key-notice\').style.display=\'none\'" style="background:none;border:none;color:#fff;float:right;cursor:pointer;font-size:18px;margin-left:10px;">×</button>'
            . '</div>';

        // Auto-hide after 5 seconds
        echo '<script>setTimeout(function(){var notice=document.getElementById("course-key-notice");if(notice)notice.style.display="none";}, 5000);</script>';

        unset($_SESSION['course_key_notice']);
    }
}
add_action('wp_footer', 'display_course_key_notices');

// ✅ Add admin column to show key usage
function add_course_key_columns($columns) {
    $columns['course_id'] = 'Course ID';
    $columns['used'] = 'Used';
    $columns['used_by'] = 'Used By';
    $columns['used_date'] = 'Used Date';
    return $columns;
}
add_filter('manage_course_key_posts_columns', 'add_course_key_columns');

function populate_course_key_columns($column, $post_id) {
    switch ($column) {
        case 'course_id':
            $course_id = get_post_meta($post_id, 'course_id', true);
            if ($course_id) {
                $course = get_post($course_id);
                echo $course ? '<a href="' . get_edit_post_link($course_id) . '">' . esc_html($course->post_title) . ' (ID: ' . $course_id . ')</a>' : 'Course not found';
            } else {
                echo 'Not set';
            }
            break;
        case 'used':
            $used = get_post_meta($post_id, 'used', true);
            echo $used === '1' ? '✅ Yes' : '❌ No';
            break;
        case 'used_by':
            $used_by = get_post_meta($post_id, 'used_by', true);
            if ($used_by) {
                $user = get_userdata($used_by);
                echo $user ? '<a href="' . get_edit_user_link($used_by) . '">' . esc_html($user->display_name) . '</a>' : 'User not found';
            } else {
                echo 'N/A';
            }
            break;
        case 'used_date':
            $used_date = get_post_meta($post_id, 'used_date', true);
            echo $used_date ? date('Y-m-d H:i:s', strtotime($used_date)) : 'N/A';
            break;
    }
}
add_action('manage_course_key_posts_custom_column', 'populate_course_key_columns', 10, 2);

// ✅ Add shortcode to generate activation URL
function course_key_activation_url_shortcode($atts) {
    $atts = shortcode_atts(array(
        'key' => '',
        'text' => 'Activate Course'
    ), $atts);

    if (empty($atts['key'])) {
        return 'Error: No key provided';
    }

    $url = home_url('/?active_key=' . urlencode($atts['key']));
    return '<a href="' . esc_url($url) . '" class="course-activation-link">' . esc_html($atts['text']) . '</a>';
}
add_shortcode('course_key_url', 'course_key_activation_url_shortcode');

// ✅ Debug function to check Tutor LMS status
function debug_tutor_lms_status() {
    if (current_user_can('manage_options')) {
        $tutor_functions = [
            'tutor_enroll_a_student',
            'tutor_utils',
            'tutor_get_course_id_by_lesson',
            'tutor_is_enrolled'
        ];

        // foreach ($tutor_functions as $func) {
        //     error_log('[DEBUG] Function ' . $func . ': ' . (function_exists($func) ? 'EXISTS' : 'NOT FOUND'));
        // }

        // $tutor_active = is_plugin_active('tutor/tutor.php');
        // error_log('[DEBUG] Tutor LMS plugin active: ' . ($tutor_active ? 'YES' : 'NO'));

        // global $wpdb;
        // $table_exists = $wpdb->get_var("SHOW TABLES LIKE '{$wpdb->prefix}tutor_enrollments'");
        // error_log('[DEBUG] Tutor enrollments table exists: ' . ($table_exists ? 'YES' : 'NO'));
    }
}
add_action('wp', 'debug_tutor_lms_status');

// ✅ Alternative enrollment function if Tutor LMS is not available
function fallback_enroll_student($course_id, $user_id) {
    global $wpdb;

    // Check if already enrolled
    $existing = $wpdb->get_var($wpdb->prepare(
        "SELECT COUNT(*) FROM {$wpdb->prefix}tutor_enrollments
         WHERE course_id = %d AND user_id = %d",
        $course_id, $user_id
    ));

    if ($existing > 0) {
        return true; // Already enrolled
    }

    // Insert enrollment record
    $result = $wpdb->insert(
        $wpdb->prefix . 'tutor_enrollments',
        array(
            'course_id' => $course_id,
            'user_id' => $user_id,
            'enrollment_date' => current_time('mysql'),
            'status' => 'publish'
        ),
        array('%d', '%d', '%s', '%s')
    );

    if ($result) {
        // Trigger enrollment actions
        do_action('tutor_after_enroll', $course_id, $user_id);
        return true;
    }

    return false;
}
add_action('wp_loaded', function () {
    if (current_user_can('administrator')) {
        $functions = get_defined_functions();
        $user_functions = $functions['user'];

        // Kiểm tra 1 số hàm của Tutor LMS
        $target = [
            'tutor_enroll_a_student',
            'tutor_utils',
            'tutor',
            'tutor_get_course_by_enrollment',
        ];

        foreach ($target as $fn) {
            error_log('[CHECK] Function "' . $fn . '" exists? ' . (in_array($fn, $user_functions) ? 'YES' : 'NO'));
        }
    }
});

// Add this filter to append enrolled students to course content
add_filter('the_content', 'append_enrolled_students_to_course_content');

function append_enrolled_students_to_course_content($content) {
    if (!is_singular('courses')) return $content;

    global $post;
    $course_id = $post->ID;
    $students = get_enrolled_students_for_course($course_id);

    if (empty($students)) {
        return '';
    }

    $output = '<h3>👥 Học viên (' . count($students) . '):</h3><ul>';
    foreach ($students as $student) {
        $output .= '<li>' . esc_html($student['name']) . ' (' . esc_html($student['email']) . ')</li>';
    }
    $output .= '</ul>';

    return $content . $output;
}

function get_enrolled_students_for_course($course_id) {
    $args = array(
        'post_type'      => 'tutor_enrolled',
        'post_parent'    => $course_id,
        'post_status'    => array('publish'),
        'posts_per_page' => -1,
    );

    $enrollments = get_posts($args);

    $students = [];

    foreach ($enrollments as $enrollment) {
        $user_id = $enrollment->post_author;
        $user = get_userdata($user_id);
        if ($user) {
            $students[] = [
                'ID'    => $user->ID,
                'name'  => $user->display_name,
                'email' => $user->user_email,
            ];
        }
    }

    return $students;
}

// Make sure only enrolled users can access lessons

add_action('template_include', 'tutor_protect_lessons_include', 99);

function tutor_protect_lessons_include($template) {
    if (!function_exists('tutor_utils')) {
        return $template;
    }

    global $post;

    if (!($post instanceof WP_Post)) {
        return $template;
    }

    $post_type = get_post_type($post);

    if ($post_type !== 'lesson') {
        return $template;
    }

    $course_id = tutor_utils()->get_course_id_by('lesson', $post->ID);
    if (!$course_id) {
        return $template;
    }

    $user_id = get_current_user_id();

    if (!$user_id) {
        // Not logged in → redirect to custom login
        $redirect_url = urlencode(get_permalink());
        wp_redirect(site_url("/login?redirect_to=$redirect_url"));
        exit;
    }

    $students = get_enrolled_students_for_course($course_id);

    if ($students) {
        foreach ($students as $student) {
            if ($student['ID'] === $user_id) {
                return $template;
            }
        }
    }

    wp_redirect(get_permalink($course_id));
    exit;
}


?>