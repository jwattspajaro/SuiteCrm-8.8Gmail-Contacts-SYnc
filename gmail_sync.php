<?php

$hook_array['after_save'][] = array(
    100,
    'Sincronizar contactos con Gmail',
    'custom/modules/GmailSync/GmailSync.php',
    'GmailSync',
    'syncContact'
);
