<?php

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) { // needs this condition or there is error on login page
    $settings = new admin_settingpage('local_facialbiometrics', get_string('pluginname', 'local_facialbiometrics'));
    $ADMIN->add('localplugins', $settings);

    // Facial Biometrics API Key
    $setting = new admin_setting_configtext(
        'local_facialbiometrics/apikey',
        get_string('apikey', 'local_facialbiometrics'),
        get_string('apikeydesc', 'local_facialbiometrics'),
        '',
        PARAM_TEXT
    );
    $settings->add($setting);

    // Facial Biometrics API Secret
    $setting = new admin_setting_configpasswordunmask(
        'local_facialbiometrics/apisecret',
        get_string('apisecret', 'local_facialbiometrics'),
        get_string('apisecretdesc', 'local_facialbiometrics'),
        '',
        PARAM_TEXT
    );
    $settings->add($setting);

    // Facial Biometrics Region
    $setting = new admin_setting_configselect(
        'local_facialbiometrics/region',
        get_string('region', 'local_facialbiometrics'),
        get_string('regiondesc', 'local_facialbiometrics'),
        'eastus',
        array(
            'westus' => 'West US',
            'eastus' => 'East US',
            'westeurope' => 'West Europe',
            'northeurope' => 'North Europe',
        )
    );
    $settings->add($setting);
}
?>
