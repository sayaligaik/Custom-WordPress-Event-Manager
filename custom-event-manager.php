include_once plugin_dir_path(__FILE__) . 'admin/admin-functions.php';
include_once plugin_dir_path(__FILE__) . 'includes/event-crud.php';
include_once plugin_dir_path(__FILE__) . 'includes/shortcode-functions.php';

// Activation Hook
register_activation_hook(__FILE__, 'cem_activate_plugin');
function cem_activate_plugin() {
    global $wpdb;
    $table_name = $wpdb->prefix . "cem_events";
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        event_name varchar(255) NOT NULL,
        event_date date NOT NULL,
        event_location varchar(255) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
