<?php

$hook_version = 1;
$hook_array = array();

// Hook para sincronizar contactos con Gmail después de guardar
$hook_array['after_save'][] = array(
    100,
    'Sincronizar contactos con Gmail',
    'custom/modules/GmailSync/GmailSync.php',
    'GmailSync',
    'syncContact'
);
