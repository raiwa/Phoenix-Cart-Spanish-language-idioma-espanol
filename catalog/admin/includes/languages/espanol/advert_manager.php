<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Gestor de publicidad';

const TABLE_HEADING_ADVERT = 'Anuncio';
const TABLE_HEADING_GROUP = 'Grupo';
const TABLE_HEADING_SORT_ORDER = 'Orden';
const TABLE_HEADING_STATUS = 'Activo';
const TABLE_HEADING_ACTION = 'Acción';

const TEXT_ADVERT_TITLE = 'Título';
const TEXT_ADVERT_URL = 'URL';
const TEXT_ADVERT_FRAGMENT = 'Fragmento';
const TEXT_ADVERT_GROUP = 'Grupo';
const TEXT_ADVERT_SORT_ORDER = 'Orden';
const TEXT_ADVERT_NEW_GROUP = 'O crear un nuevo Grupo';
const TEXT_ADVERT_IMAGE = 'Imagen';
const TEXT_ADVERT_IMAGE_LOCAL = 'O introducir el nombre local';
const TEXT_ADVERT_IMAGE_TARGET = 'Guardar en directorio';
const TEXT_ADVERT_HTML_TEXT = 'Texto HTML';

const TEXT_ADVERT_TITLE_HELP = 'Esto se usa solo en el Listado de anuncios como recordatorio interno.';
const TEXT_ADVERT_URL_HELP = 'Incluya https: // para enlaces externos o solo un nombre de página para enlaces internos (por ejemplo, product_info.php o advanced_search_result.php)';
const TEXT_ADVERT_FRAGMENT_HELP = '¡Solo se usa junto con enlaces internos de tienda! El fragmento de la URL es (por ejemplo) products_id=3 o keywords=xyz';
const TEXT_ADVERT_SORT_HELP = 'Esto determina el orden del anuncio *dentro* de su grupo.';

const TEXT_ADVERT_NOTE = '
<strong>Notas de anuncios:</strong>
<ul>
  <li>Puede usar una imagen y/o HTML (¡Habitualmente texto!).</li>
  <li>La visualización de la imagen/html dependerá del Addon en la tienda.</li>
</ul>';
const TEXT_INSERT_NOTE = '
<strong>Notas importantes acerca de la imagen:</strong>
<ul>
  <li>¡Los directorios de subida deben tener permisos de escritura configurados!</li>
  <li>No rellene el campo "Guardar en directorio" si no está cargando una imagen en el servidor web (es decir, está utilizando una imagen local (del servidor)).</li>
  <li>El campo "Guardar en directorio" debe ser un directorio existente con barra final (por ejemplo, anuncios/ o carruseles/).</li>
</ul>';

const TEXT_IMAGE_NONEXISTENT = '¡FALTA la imagen!';

const TEXT_ADVERT_DATE_ADDED = 'Añadido el: %s';
const TEXT_ADVERT_STATUS_CHANGE = 'Cambio de Estado: %s';

const TEXT_INFO_DELETE_INTRO = '¿Está seguro que quiere eliminar este anuncio?';
const TEXT_INFO_DELETE_IMAGE = 'Eliminar Imagen';

const SUCCESS_IMAGE_INSERTED = '<strong>Éxito:</strong> Nuevo anuncio insertado.';
const SUCCESS_IMAGE_UPDATED = '<strong>Éxito:</strong> Este anuncio ha sido actualizado.';
const SUCCESS_IMAGE_REMOVED = '<strong>Éxito:</strong> Este anuncio ha sido eliminado.';
const SUCCESS_ADVERT_STATUS_UPDATED = '<strong>Éxito:</strong> El estado de este anuncio se ha actualizado.';

const ERROR_ADVERT_TITLE_REQUIRED = '<strong>Error:</strong> Se requiere un TÍTULO de anuncio.';
const ERROR_ADVERT_GROUP_REQUIRED = '<strong>Error:</strong> Se requiere un GRUPO de anuncios.';
const ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST = '<strong>Error:</strong> El directorio de destino no existe: %s';
const ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE = '<strong>Error:</strong> No se puede escribir en el directorio de destino: %s';
const ERROR_IMAGE_DOES_NOT_EXIST = '<strong>Error:</strong> La imagen no existe.';
const ERROR_IMAGE_IS_NOT_WRITEABLE = '<strong>Error:</strong> La imagen no se puede eliminar.';
const ERROR_ADVERT_IMAGE_OR_TEXT_REQUIRED = '<strong>Error:</strong> No ha insertado imagen o texto. Los anuncios necesitan Imagen/Texto/Ambos para mostrarse.';

const TEXT_DISPLAY_NUMBER_OF_ADVERTS = 'Mostrando <b>%s</b> a <b>%s</b> de <b>%s</b> Anuncios';
const IMAGE_NEW_ADVERT = 'Nuevo Anuncio';

const TEXT_ADVERT_EXTERNAL_URL = '<i class="fas fa-external-link-alt mr-1"></i> enlace externo:<br>%s';
const TEXT_ADVERT_INTERNAL_URL = '<i class="fas fa-link mr-1"></i> enlace interno:<br>%s';

const IMAGE_IMPORT_ADVERT = 'Intento de importación de banner';
const IMAGE_IMPORT_ADVERT_EXPLANATION = 'Esto importará datos de la tabla de la base de datos "banners". Es posible que deba eliminar algunos de los datos después de la importación, ya que los "banners" nunca fueron para uso en Carousel ...';
const SUCCESS_BANNERS_IMPORTED = '<strong>Éxito:</strong> ¡La tabla de banners ha sido importada!';
