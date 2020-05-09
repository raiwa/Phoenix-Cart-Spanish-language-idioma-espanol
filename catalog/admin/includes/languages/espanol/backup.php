<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Gestor de Copias de Seguridad de la Base de Datos');

define('TABLE_HEADING_TITLE', 'Título');
define('TABLE_HEADING_FILE_DATE', 'Fecha');
define('TABLE_HEADING_FILE_SIZE', 'Tamaño');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nueva Copia de Seguridad');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Restaurar desde copia local');
define('TEXT_INFO_NEW_BACKUP', 'No interrumpa el proceso de copia, puede durar varios minutos.');
define('TEXT_INFO_UNPACK', '<br /><br />(después de descomprimir el archivo)');
define('TEXT_INFO_RESTORE', 'No interrumpa el proceso de restauración.<br><br>¡Cuanto más grande sea la copia de seguridad, más tardará este proceso!<br><br>Si es posible, use el cliente mysql.<br><br>Por ejemplo:<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'No interrumpa el proceso de restauración.<br /><br />* ¡Cuanto más grande sea la copia de seguridad, más tardará este proceso!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'El archivo subido debe ser texto.');
define('TEXT_INFO_DATE', 'Fecha: %s');
define('TEXT_INFO_SIZE', 'Tamaño: %s');
define('TEXT_INFO_COMPRESSION', 'Compresión: %s');
define('TEXT_INFO_USE_GZIP', 'Usar GZIP');
define('TEXT_INFO_USE_ZIP', 'Usar ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Sin Compresión (directamente SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Bajar solo (no guardar en el servidor)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Preferiblemente con una conexión segura');
define('TEXT_DELETE_INTRO', '¿Seguro que quiere eliminar esta copia?');
define('TEXT_NO_EXTENSION', 'Ninguna');
define('TEXT_BACKUP_DIRECTORY', 'Directorio para las Copias de Seguridad:<br>%s');
define('TEXT_LAST_RESTORATION', 'Última Restauración:<br>%s');
define('TEXT_FORGET', 'Olvidar)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', '<strong>Error:</strong> No existe directorio para las copias de seguridad. Por favor, defínalo en el archivo configure.php');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', '<strong>Error:</strong> El directorio para las copias de seguridad no tiene permisos de escritura.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', '<strong>Error:</strong> Enlace de Descarga no válido.');

define('SUCCESS_LAST_RESTORE_CLEARED', '<strong>Éxito:</strong> La última fecha de restauración ha sido borrada.');
define('SUCCESS_DATABASE_SAVED', '<strong>Éxito:</strong> La base de datos ha sido guardada.');
define('SUCCESS_DATABASE_RESTORED', '<strong>Éxito:</strong> La base de datos ha sido restaurada.');
define('SUCCESS_BACKUP_DELETED', '<strong>Éxito:</strong> La copia de seguridad ha sido eliminada.');
define('TEXT_INFO_BACKUP_SIZE', '%s MB');
