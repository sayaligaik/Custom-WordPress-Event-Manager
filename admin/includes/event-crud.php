<?php
global $wpdb;
$table_name = $wpdb->prefix . "cem_events";

// Add Event
function cem_add_event($name, $date, $location) {
    global $wpdb, $table_name;
    $wpdb->insert($table_name, [
        'event_name' => $name,
        'event_date' => $date,
        'event_location' => $location
    ]);
}

// Get All Events
function cem_get_events() {
    global $wpdb, $table_name;
    return $wpdb->get_results("SELECT * FROM $table_name ORDER BY event_date ASC");
}
