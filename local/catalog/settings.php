<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_heading('mod_pulse/general', '', get_string('configintro', 'catalog')));

    $settings->add(new admin_setting_configcheckbox('mod_pulse/detailedlog', get_string('showhide', 'catalog'),
        get_string('detailedlog', 'catalog'), false));

}
