<?php
class GmailSyncAdminSettings {
    public function display() {
        echo '<h2>Configuración de Gmail Sync</h2>';
        echo '<form action="index.php?module=GmailSync&action=saveCredentials" method="post" enctype="multipart/form-data">';
        echo '<input type="file" name="credentials_file" required>';
        echo '<input type="submit" value="Subir credenciales">';
        echo '</form>';
    }
}
?>
