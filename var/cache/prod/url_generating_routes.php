<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'admin_menu' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::admin'], [], [['text', '/admin/']], [], []],
    'admin_polist' => [['active'], ['_controller' => 'App\\Controller\\Admin\\AdminController::polist'], [], [['variable', '/', '[^/]++', 'active', true], ['text', '/admin/polist']], [], []],
    'admin_mark_done' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminController::markAsDone'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/done']], [], []],
    'admin_view_lots' => [['po_number', 'state'], ['_controller' => 'App\\Controller\\Admin\\AdminController::viewLots'], [], [['variable', '', '[^/]++', 'state', true], ['text', '&'], ['variable', '/', '[^/]+', 'po_number', true], ['text', '/admin/lots']], [], []],
    'admin_view_photos' => [['lot', 'state'], ['_controller' => 'App\\Controller\\Admin\\AdminController::viewPhotos'], [], [['variable', '', '[^/]++', 'state', true], ['text', '&'], ['variable', '/', '[^/]+', 'lot', true], ['text', '/admin/lots/photos']], [], []],
    'admin_delete_photo' => [['id', 'name', 'state'], ['_controller' => 'App\\Controller\\Admin\\AdminController::deletePhoto'], [], [['variable', '/', '[^/]++', 'state', true], ['variable', '/', '[^/]++', 'name', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/delete_photo']], [], []],
    'admin_mail_csv' => [['po_number', 'state'], ['_controller' => 'App\\Controller\\Admin\\AdminController::mailCsv'], [], [['variable', '/', '[^/]++', 'state', true], ['variable', '/', '[^/]++', 'po_number', true], ['text', '/admin/mailcsv']], [], []],
    'admin_get_csv' => [['po_number'], ['_controller' => 'App\\Controller\\Admin\\AdminController::getCsv'], [], [['variable', '/', '[^/]++', 'po_number', true], ['text', '/admin/getcsv']], [], []],
    'settings_menu' => [[], ['_controller' => 'App\\Controller\\Admin\\SettingsController::settings'], [], [['text', '/admin/settings/']], [], []],
    'settings_add_box' => [[], ['_controller' => 'App\\Controller\\Admin\\SettingsController::add_box'], [], [['text', '/admin/settings/add_box']], [], []],
    'settings_modify_box' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SettingsController::modify_box'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/settings/modify_box']], [], []],
    'settings_delete_box' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SettingsController::delete_box'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/settings/delete_box']], [], []],
    'settings_add_email' => [[], ['_controller' => 'App\\Controller\\Admin\\SettingsController::add_email'], [], [['text', '/admin/settings/add_email']], [], []],
    'settings_modify_email' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SettingsController::modify_email'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/settings/modify_email']], [], []],
    'settings_delete_email' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SettingsController::delete_email'], [], [['variable', '', '[^/]++', 'id', true], ['text', '/admin/settings/delete_email']], [], []],
    'settings_dav_change_configuration' => [['name'], ['name' => 'null', '_controller' => 'App\\Controller\\Admin\\SettingsController::dav_change_configuration'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/admin/settings/dav_change_configuration']], [], []],
    'data_upload' => [[], ['_controller' => 'App\\Controller\\BoothController::upload'], [], [['text', '/upload']], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], []],
    'booth_start' => [['scan'], ['scan' => 'null', '_controller' => 'App\\Controller\\MainController::booth_start'], [], [['variable', '/', '[^/]++', 'scan', true], ['text', '/booth/scan']], [], []],
    'verifyLotExist' => [['lot'], ['_controller' => 'App\\Controller\\MainController::verifyLotExist'], [], [['variable', '/', '[^/]++', 'lot', true], ['text', '/verifyLotExist']], [], []],
    'code_return' => [['s'], ['_controller' => 'App\\Controller\\MainController::code_return'], [], [['variable', '/', '[^/]++', 's', true], ['text', '/scan']], [], []],
    'user_settings' => [[], ['_controller' => 'App\\Controller\\MainController::user_settings'], [], [['text', '/user_settings']], [], []],
    'admin_add_user' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/admin/adduser']], [], []],
    'admin_modify_user' => [['id'], ['_controller' => 'App\\Controller\\RegistrationController::modify'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/modifyuser']], [], []],
    'admin_delete_user' => [['id'], ['_controller' => 'App\\Controller\\RegistrationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/deleteuser']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];