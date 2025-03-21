<?php

class GmailSyncController extends SugarController {
    public function action_saveCredentials() {
        if (!empty($_FILES['credentials_file']['tmp_name'])) {
            move_uploaded_file($_FILES['credentials_file']['tmp_name'], 'custom/modules/GmailSync/credentials.json');
            echo "Credenciales subidas correctamente.";
        } else {
            echo "Error al subir las credenciales.";
        }
    }
}
