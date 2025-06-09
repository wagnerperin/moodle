<?php

defined('MOODLE_INTERNAL') || die();

$capabilities = array(
    'local/facialbiometrics:view' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            'user' => CAP_ALLOW, // Added user
            'manager' => CAP_ALLOW,
        ),
    ),
    'local/facialbiometrics:manage' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            'manager' => CAP_ALLOW,
        ),
    ),
);
?>
