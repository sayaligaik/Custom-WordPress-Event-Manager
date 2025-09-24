<?php
// Add menu page
add_action('admin_menu', 'cem_admin_menu');
function cem_admin_menu() {
    add_menu_page('Event Manager', 'Event Manager', 'manage_options', 'cem-admin', 'cem_admin_page', 'dashicons-calendar-alt', 6);
}

function cem_admin_page() {
    echo '<h1>Custom Event Manager</h1>';
    echo '<p>Manage your events here.</p>';
}
