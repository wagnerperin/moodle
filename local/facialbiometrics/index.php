<?php

require_once(__DIR__ . '/../../config.php');

// Get the language strings for this plugin.
$pluginstring = function(string $key, $a = null) {
    return get_string($key, 'local_facialbiometrics', $a);
};

$PAGE->set_url('/local/facialbiometrics/index.php');
$PAGE->set_context(context_system::instance()); // Consider context_course if it's course-specific later.
$PAGE->set_title($pluginstring('pluginname'));
$PAGE->set_heading($pluginstring('pluginname'));

// Require login to view this page.
require_login(); // Keep this to ensure user is logged in.
$context = context_system::instance(); // Get system context.
require_capability('local/facialbiometrics:view', $context); // Check for the new capability.

echo $OUTPUT->header();

// Button to trigger the validation message.
echo html_writer::tag('button', $pluginstring('validatebutton'), ['id' => 'validateBtn']);

// Paragraph that will be shown on button click.
echo html_writer::tag('p', $pluginstring('validationrequested'), ['id' => 'validationMsg', 'style' => 'display:none;']);

// JavaScript to handle the button click.
$PAGE->requires->js_init_call('M.local_facialbiometrics.init', [], false, [
    'amd' => true // Assuming we might move this to an AMD module later
]);

echo $OUTPUT->footer();

?>
