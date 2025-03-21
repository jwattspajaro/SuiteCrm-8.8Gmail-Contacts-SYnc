<?php
$manifest = array(
    'acceptable_sugar_versions' => array(),
    'acceptable_sugar_flavors' => array('CE'),
    'readme' => '',
    'key' => 'SuiteCRM',
    'author' => 'TuNombre',
    'description' => 'Módulo para sincronizar contactos de SuiteCRM con Gmail.',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'SuiteCRM Gmail Sync',
    'published_date' => '2025-03-13',
    'type' => 'module',
    'version' => '1.1',
    'remove_tables' => 'prompt',
);

$installdefs = array(
    'id' => 'SuiteCRM_GmailSync',
    'copy' => array(
        array(
            'from' => '<basepath>/custom/modules/GmailSync',
            'to' => 'custom/modules/GmailSync',
        ),
        array(
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/gmail_sync.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/gmail_sync.php',
        ),
    ),
    'administration' => array(
        array(
            'from' => '<basepath>/custom/modules/GmailSync/AdminSettings.php',
            'to' => 'custom/modules/GmailSync/AdminSettings.php',
        ),
    ),
    'language' => array(
        array(
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/es_ES.gmail_sync.php',
            'to_module' => 'Administration',
            'language' => 'es_ES',
        ),
        array(
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.gmail_sync.php',
            'to_module' => 'Administration',
            'language' => 'en_us',
        ),
    ),
    'logic_hooks' => array(
        array(
            'module' => 'Contacts',
            'hook' => 'after_save',
            'order' => 99,
            'description' => 'Sincronización de contactos con Gmail después de guardarlos',
            'file' => 'custom/modules/GmailSync/logic_hooks.php',
            'class' => 'GmailSyncHooks',
            'function' => 'syncContactWithGmail',
        ),
    ),
);
