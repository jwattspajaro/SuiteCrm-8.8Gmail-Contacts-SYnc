SuiteCRM Gmail Sync

Descripción

Este módulo permite la sincronización bidireccional de contactos entre SuiteCRM 8.8 y Gmail. Los contactos de SuiteCRM se exportan a Gmail y los contactos de Gmail se importan a SuiteCRM, asegurando que la información se mantenga actualizada en ambas plataformas.

Características

Sincronización bidireccional entre SuiteCRM y Gmail.

Los contactos incluyen información detallada como nombre, empresa, cargo, dirección, teléfono y correo electrónico.

Se ejecuta de manera automática cada 15 minutos.

Se integra con la API de Google People para la gestión de contactos en Gmail.

Requisitos

SuiteCRM 8.8 instalado.

Cuenta de Google con acceso a la API de People.

Claves de API de Google (archivo credentials.json).

Servidor con PHP y acceso a cronjobs o procesos en segundo plano.

Instalación

Copiar el módulo en la carpeta de SuiteCRM dentro de custom/Modules/GmailSync/.

Subir el archivo credentials.json en la misma carpeta del módulo.

Editar el config.php de SuiteCRM y agregar la configuración del módulo.

Configurar un cronjob para ejecutar el script automáticamente cada 15 minutos:

*/15 * * * * php /ruta/a/SuiteCRM/custom/Modules/GmailSync/sync.php

Uso

Para ejecutar la sincronización manualmente:

php /ruta/a/SuiteCRM/custom/Modules/GmailSync/sync.php

La sincronización se ejecuta de manera automática cada 15 minutos en segundo plano.

Configuración Adicional

Para obtener credenciales de API de Google:

Ir a Google Cloud Console.

Crear un proyecto nuevo y habilitar la API de People.

Generar un archivo credentials.json y descargarlo.

Ubicar el archivo en custom/Modules/GmailSync/.

Soporte

Para más información o soporte técnico, contactar con el administrador de SuiteCRM o revisar la documentación de la API de Google People.
