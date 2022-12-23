<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Gestor de Copias de Seguridad de la Base de Datos';

const TABLE_HEADING_TITLE = 'Título';
const TABLE_HEADING_FILE_DATE = 'Fecha';
const TABLE_HEADING_FILE_SIZE = 'Tamaño';
const TABLE_HEADING_ACTION = 'Acción';

const TEXT_INFO_HEADING_NEW_BACKUP = 'Nueva Copia de Seguridad';
const TEXT_INFO_HEADING_RESTORE_LOCAL = 'Restaurar desde copia local';
const TEXT_INFO_NEW_BACKUP = 'No interrumpa el proceso de copia, puede durar varios minutos.';
const TEXT_INFO_UNPACK = '<br /><br />(después de descomprimir el archivo)';
const TEXT_INFO_RESTORE = 'No interrumpa el proceso de restauración.<br><br>¡Cuanto más grande sea la copia de seguridad, más tardará este proceso!<br><br>Si es posible, use el cliente mysql.<br><br>Por ejemplo:<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s';
const TEXT_INFO_RESTORE_LOCAL = 'No interrumpa el proceso de restauración.<br /><br />* ¡Cuanto más grande sea la copia de seguridad, más tardará este proceso!';
const TEXT_INFO_RESTORE_LOCAL_RAW_FILE = 'El archivo subido debe ser texto.';
const TEXT_INFO_DATE = 'Fecha: %s';
const TEXT_INFO_SIZE = 'Tamaño: %s';
const TEXT_INFO_COMPRESSION = 'Compresión: %s';
const TEXT_INFO_USE_GZIP = 'Usar GZIP';
const TEXT_INFO_USE_ZIP = 'Usar ZIP';
const TEXT_INFO_USE_NO_COMPRESSION = 'Sin Compresión (directamente SQL)';
const TEXT_INFO_DOWNLOAD_ONLY = 'Bajar solo (no guardar en el servidor)';
const TEXT_INFO_BEST_THROUGH_HTTPS = 'Preferiblemente con una conexión segura';
const TEXT_DELETE_INTRO = '¿Seguro que quiere eliminar esta copia?';
const TEXT_NO_EXTENSION = 'Ninguna';
const TEXT_BACKUP_DIRECTORY = 'Directorio para las Copias de Seguridad:<br>%s';
const TEXT_LAST_RESTORATION = 'Última Restauración:<br>%s';
const TEXT_FORGET = 'Olvidar)';

const ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST = '<strong>Error:</strong> No existe directorio para las copias de seguridad. Por favor, defínalo en el archivo configure.php';
const ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE = '<strong>Error:</strong> El directorio para las copias de seguridad no tiene permisos de escritura.';
const ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE = '<strong>Error:</strong> Enlace de Descarga no válido.';
const ERROR_INVALID_FILE = 'No se reconoce el archivo [%s] como una copia de seguridad válida. Verifique que exista, que tenga una extensión .sql y que tenga un tamaño razonable.';
const ERROR_FILE_TOO_LARGE = 'El archivo tiene "%d" bytes pero el límite es "%s".';
const ERROR_PATH_NOT_REMOVEABLE = '<strong>Error:</strong> No se puede quitar "%s"';

const SUCCESS_LAST_RESTORE_CLEARED = '<strong>Éxito:</strong> La última fecha de restauración ha sido borrada.';
const SUCCESS_DATABASE_SAVED = '<strong>Éxito:</strong> La base de datos ha sido guardada.';
const SUCCESS_DATABASE_RESTORED = '<strong>Éxito:</strong> La base de datos ha sido restaurada.';
const SUCCESS_BACKUP_DELETED = '<strong>Éxito:</strong> La copia de seguridad ha sido eliminada.';

const TEXT_INFO_BACKUP_SIZE = '%s MB';
