<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Gestor de publicidad');

define('TABLE_HEADING_ADVERT', 'Anuncio');
define('TABLE_HEADING_GROUP', 'Grupo');
define('TABLE_HEADING_SORT_ORDER', 'Orden');
define('TABLE_HEADING_STATUS', 'Activo');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_ADVERT_TITLE', 'Título');
define('TEXT_ADVERT_URL', 'URL');
define('TEXT_ADVERT_FRAGMENT', 'Fragmento');
define('TEXT_ADVERT_GROUP', 'Grupo');
define('TEXT_ADVERT_SORT_ORDER', 'Orden');
define('TEXT_ADVERT_NEW_GROUP', 'O crear un nuevo Grupo');
define('TEXT_ADVERT_IMAGE', 'Imagen');
define('TEXT_ADVERT_IMAGE_LOCAL', 'O introducir el nombre local');
define('TEXT_ADVERT_IMAGE_TARGET', 'Guardar en directorio');
define('TEXT_ADVERT_HTML_TEXT', 'Texto HTML');

define('TEXT_ADVERT_TITLE_HELP', 'Esto se usa solo en el Listado de anuncios como recordatorio interno.');
define('TEXT_ADVERT_URL_HELP', 'Incluya https: // para enlaces externos o solo un nombre de página para enlaces internos (por ejemplo, product_info.php o advanced_search_result.php)');
define('TEXT_ADVERT_FRAGMENT_HELP', '¡Solo se usa junto con enlaces internos de tienda! El fragmento de la URL es (por ejemplo) products_id=3 o keywords=xyz');
define('TEXT_ADVERT_SORT_HELP', 'Esto determina el orden del anuncio *dentro* de su grupo.');

define('TEXT_ADVERT_NOTE', '
<strong>Notas de anuncios:</strong>
<ul>
  <li>Puede usar una imagen y/o HTML (¡Habitualmente texto!).</li>
  <li>La visualización de la imagen/html dependerá del Addon en la tienda.</li>
</ul>');
define('TEXT_INSERT_NOTE', '
<strong>Notas importantes acerca de la imagen:</strong>
<ul>
  <li>¡Los directorios de subida deben tener permisos de escritura configurados!</li>
  <li>No rellene el campo "Guardar en directorio" si no está cargando una imagen en el servidor web (es decir, está utilizando una imagen local (del servidor)).</li>
  <li>El campo "Guardar en directorio" debe ser un directorio existente con barra final (por ejemplo, anuncios/ o carruseles/).</li>
</ul>');

define('TEXT_IMAGE_NONEXISTENT', '¡FALTA la imagen!');

define('TEXT_ADVERT_DATE_ADDED', 'Añadido el: %s');
define('TEXT_ADVERT_STATUS_CHANGE', 'Cambio de Estado: %s');

define('TEXT_INFO_DELETE_INTRO', '¿Está seguro que quiere eliminar este anuncio?');
define('TEXT_INFO_DELETE_IMAGE', 'Eliminar Imagen');

define('SUCCESS_IMAGE_INSERTED', '<strong>Éxito:</strong> Nuevo anuncio insertado.');
define('SUCCESS_IMAGE_UPDATED', '<strong>Éxito:</strong> Este anuncio ha sido actualizado.');
define('SUCCESS_IMAGE_REMOVED', '<strong>Éxito:</strong> Este anuncio ha sido eliminado.');
define('SUCCESS_ADVERT_STATUS_UPDATED', '<strong>Éxito:</strong> El estado de este anuncio se ha actualizado.');

define('ERROR_ADVERT_TITLE_REQUIRED', '<strong>Error:</strong> Se requiere un TÍTULO de anuncio.');
define('ERROR_ADVERT_GROUP_REQUIRED', '<strong>Error:</strong> Se requiere un GRUPO de anuncios.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', '<strong>Error:</strong> El directorio de destino no existe: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', '<strong>Error:</strong> No se puede escribir en el directorio de destino: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', '<strong>Error:</strong> La imagen no existe.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', '<strong>Error:</strong> La imagen no se puede eliminar.');
define('ERROR_ADVERT_IMAGE_OR_TEXT_REQUIRED', '<strong>Error:</strong> No ha insertado imagen o texto. Los anuncios necesitan Imagen/Texto/Ambos para mostrarse.');

define('TEXT_DISPLAY_NUMBER_OF_ADVERTS', 'Mostrando <b>%s</b> a <b>%s</b> de <b>%s</b> Anuncios');
define('IMAGE_NEW_ADVERT', 'Nuevo Anuncio');

define('TEXT_ADVERT_EXTERNAL_URL', '<i class="fas fa-external-link-alt mr-1"></i> enlace externo:<br>%s');
define('TEXT_ADVERT_INTERNAL_URL', '<i class="fas fa-link mr-1"></i> enlace interno:<br>%s');

define('IMAGE_IMPORT_ADVERT', 'Intento de importación de banner');
define('IMAGE_IMPORT_ADVERT_EXPLANATION', 'Esto importará datos de la tabla de la base de datos "banners". Es posible que deba eliminar algunos de los datos después de la importación, ya que los "banners" nunca fueron para uso en Carousel ...');
define('SUCCESS_BANNERS_IMPORTED', '<strong>Éxito:</strong> ¡La tabla de banners ha sido importada!');
