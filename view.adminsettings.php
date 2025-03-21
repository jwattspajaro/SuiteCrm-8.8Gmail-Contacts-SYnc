<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class GmailSyncViewAdminSettings extends SugarView
{
    public function display()
    {
        global $sugar_config;
        $upload_url = 'index.php?module=GmailSync&action=saveCredentials';

        echo '<h2>Configuración de Sincronización con Gmail</h2>';
        echo '<form action="' . $upload_url . '" method="post" enctype="multipart/form-data">';
        echo '<label for="credentials_file">Subir archivo credentials.json:</label><br>';
        echo '<input type="file" name="credentials_file" id="credentials_file" required><br><br>';
        echo '<input type="submit" value="Subir Credenciales">';
        echo '</form>';

        // Verificar si hay credenciales cargadas
        $credentials_path = 'custom/modules/GmailSync/credentials/credentials.json';
        if (file_exists($credentials_path)) {
            echo '<p style="color: green;">Credenciales cargadas correctamente.</p>';
        } else {
            echo '<p style="color: red;">No se han subido credenciales aún.</p>';
        }
    }
}
