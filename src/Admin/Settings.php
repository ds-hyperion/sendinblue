<?php

namespace Hyperion\Sendinblue\Admin;

class Settings
{
    public const SETTINGS_GROUP = 'sendInBlueSettingsGroup';

    public static function createMenu()
    {
        //create new top-level menu
        add_menu_page('Configuration du plugin sendinblue',
            'Email',
            'manage_options',
            __DIR__."/SettingsPageView.php"
        );

        //call register settings function
        add_action('admin_init', [\Hyperion\Sendinblue\Admin\Settings::class,'registerPluginSettings']);
    }

    public static function registerPluginSettings()
    {
        register_setting(self::SETTINGS_GROUP, \Hyperion\Sendinblue\Plugin::SENDINBLUE_API_KEY_OPTION);
    }
}