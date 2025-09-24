<?php
// Display events using shortcode [cem_events]
add_shortcode('cem_events', 'cem_display_events');
function cem_display_events() {
    $events = cem_get_events();
    $output = '<div class="cem-event-list">';
    foreach($events as $event) {
        $output .= '<div class="cem-event">';
        $output .= '<h3>' . esc_html($event->event_name) . '</h3>';
        $output .= '<p>Date: ' . esc_html($event->event_date) . '</p>';
        $output .= '<p>Location: ' . esc_html($event->event_location) . '</p>';
        $output .= '</div>';
    }
    $output .= '</div>';
    return $output;
}
