<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Categorías / Productos';
const HEADING_TITLE_SEARCH = 'Buscar:';
const HEADING_TITLE_GOTO = 'Ir a:';

const SECTION_HEADING_GENERAL = '<i class="fas fa-language fa-fw mr-1"></i>Específico para idioma';
const SECTION_HEADING_DATA = '<i class="fas fa-language fa-fw mr-1"></i>Específico para producto';
const SECTION_HEADING_IMAGES = '<i class="fas fa-language fa-fw mr-1"></i>Imágenes de producto';

const TABLE_HEADING_ID = 'ID';
const TABLE_HEADING_CATEGORIES_PRODUCTS = 'Categorías / Productos';
const TABLE_HEADING_ACTION = 'Acción';
const TABLE_HEADING_STATUS = 'Estado';

const TEXT_NEW_PRODUCT = 'Añadiendo Producto <small>en %s</small>';
const TEXT_EXISTING_PRODUCT = 'Editando producto <small>en %s</small>';

const TEXT_CATEGORIES = 'Categorías:';
const TEXT_PRODUCTS = 'Productos:';
const TEXT_PRODUCTS_PRICE_INFO = 'Precio:';
const TEXT_PRODUCTS_TAX_CLASS = 'Tipo de Impuesto:';
const TEXT_PRODUCTS_AVERAGE_RATING = 'Valoración Media:';
const TEXT_PRODUCTS_QUANTITY_INFO = 'Cantidad:';
const TEXT_DATE_ADDED = 'Añadido el:';
const TEXT_DATE_AVAILABLE = 'Fecha de Disponibilidad:';

const TEXT_LAST_MODIFIED = 'Modificado el:';
const TEXT_IMAGE_NONEXISTENT = 'NO EXISTE IMAGEN';
const TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS = 'Inserte una nueva categoría o producto en este nivel';
const TEXT_PRODUCT_DATE_ADDED = 'Fecha añadido.';
const TEXT_PRODUCT_DATE_AVAILABLE = 'Fecha disponible.';

const TEXT_EDIT_INTRO = 'Por favor realice los cambios necesarios';
const TEXT_EDIT_CATEGORIES_NAME = 'Nombre Categoría:';
const TEXT_EDIT_CATEGORIES_IMAGE = 'Imagen Categoría:';
const TEXT_EDIT_SORT_ORDER = 'Orden:';

const TEXT_INFO_COPY_TO_INTRO = 'Elija la categoría hacia donde quiera copiar este producto';
const TEXT_INFO_CURRENT_CATEGORIES = 'Categorías:';

const TEXT_INFO_HEADING_NEW_CATEGORY = 'Nueva Categoría';
const TEXT_INFO_HEADING_EDIT_CATEGORY = 'Editar Categoría';
const TEXT_INFO_HEADING_DELETE_CATEGORY = 'Eliminar Categoría';
const TEXT_INFO_HEADING_MOVE_CATEGORY = 'Mover Categoría';
const TEXT_INFO_HEADING_DELETE_PRODUCT = 'Eliminar Producto';
const TEXT_INFO_HEADING_MOVE_PRODUCT = 'Mover Producto';
const TEXT_INFO_HEADING_COPY_TO = 'Copiar a';

const TEXT_DELETE_CATEGORY_INTRO = '¿Seguro que desea eliminar esta categoría?';
const TEXT_DELETE_PRODUCT_INTRO = '¿Está usted seguro que desea eliminar permanentemente este producto?';

const TEXT_DELETE_WARNING = '<strong>ADVERTENCIA:</strong> ¡Hay subcategorías y/o productos que pertenecen a esta categoría!';

const TEXT_MOVE_PRODUCTS_INTRO = 'Elija la categoría hacia donde quiera mover <strong>%s</strong>';
const TEXT_MOVE_CATEGORIES_INTRO = 'Elija la categoría hacia donde quiera mover <strong>%s</strong>';
const TEXT_MOVE = 'Mover <strong>%s</strong> a:';

const TEXT_NEW_CATEGORY_INTRO = 'Rellene la siguiente información para la nueva categoría';
const TEXT_CATEGORIES_NAME = 'Nombre categoría:';
const TEXT_CATEGORIES_IMAGE = 'Imagen categoría:';
const TEXT_SORT_ORDER = 'Orden:';

const TEXT_PRODUCTS_STATUS = 'Estado de los Productos:';
const TEXT_PRODUCTS_DATE_AVAILABLE = 'Fecha de Disponibilidad:';
const TEXT_PRODUCTS_DATE_AVAILABLE_HELP = 'YYYY-MM-DD';
const TEXT_PRODUCT_AVAILABLE = 'Disponible';
const TEXT_PRODUCT_NOT_AVAILABLE = 'Agotado';
const TEXT_PRODUCTS_MANUFACTURER = 'Fabricante del producto:';
const TEXT_PRODUCTS_NAME = 'Nombre del Producto:';
const TEXT_PRODUCTS_DESCRIPTION = 'Descripción del producto:';
const TEXT_PRODUCTS_QUANTITY = 'Cantidad:';
const TEXT_PRODUCTS_MODEL = 'Modelo:';
const TEXT_PRODUCTS_IMAGE = 'Imagen:';
const TEXT_PRODUCTS_MAIN_IMAGE = 'Imagen Principal';
const TEXT_PRODUCTS_LARGE_IMAGE = 'Imagen Grande';
const TEXT_PRODUCTS_LARGE_IMAGE_HTML_CONTENT = 'Contenido HTML (para la ventana emergente)';
const TEXT_PRODUCTS_ADD_LARGE_IMAGE = '<i class="fas fa-plus mr-2"></i>Añadir Nueva Imagen Grande';
const TEXT_PRODUCTS_URL = 'URL de los Productos:';
const TEXT_PRODUCTS_URL_WITHOUT_HTTP = 'Asegúrese de incluir http:// o https://';
const TEXT_PRODUCTS_PRICE_NET = 'Precio del Producto (Neto):';
const TEXT_PRODUCTS_PRICE_GROSS = 'Precio del Producto (Bruto):';
const TEXT_PRODUCTS_WEIGHT = 'Peso del producto:';

const EMPTY_CATEGORY = 'Categoría vacía';

const TEXT_HOW_TO_COPY = 'Método de copia:';
const TEXT_COPY_AS_LINK = 'Enlazar producto';
const TEXT_COPY_AS_DUPLICATE = 'Duplicar producto';

const ERROR_CANNOT_LINK_TO_SAME_CATEGORY = '<strong>Error:</strong> No se pueden enlazar productos en la misma categoría.';
const ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE = '<strong>Error:</strong> No se puede escribir en el directorio de imágenes del catálogo: ' . DIR_FS_CATALOG_IMAGES;
const ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST = '<strong>Error:</strong> El directorio de imágenes del catálogo: ' . DIR_FS_CATALOG_IMAGES . 'no existe';
const ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT = '<strong>Error:</strong> La categoría NO puede ser movida a la categoría hijo.';

const TEXT_CATEGORIES_DESCRIPTION = 'Descripción de la categoría:<br><small>se muestra en la página de la categoría</small>';
const TEXT_EDIT_CATEGORIES_DESCRIPTION = 'Editar la Descripción de la Categoría:';

const TEXT_CATEGORIES_SEO_DESCRIPTION = 'Descripción de la Categoría para SEO:<br><small>Añadir un elemento Meta &lt;description&gt;.</small>';
const TEXT_EDIT_CATEGORIES_SEO_DESCRIPTION = 'Editar la Descripción de la Categoría para SEO:<br><small>Cambia el elemento Meta &lt;description&gt;.</small>';
const TEXT_CATEGORIES_SEO_KEYWORDS = 'Palabras clave Meta de la categoría para SEO:<br><small>Añadir un elemento Meta &lt;keyword&gt;.<br>Deben estar separados por comas.</small>';
const TEXT_EDIT_CATEGORIES_SEO_KEYWORDS = 'Editar las Palabras clave para SEO:<br><small>Cambia el elemento Meta &lt;keyword&gt;.<br>Deben estar separados por comas.</small>';

const TEXT_PRODUCTS_GTIN = 'GTIN del Producto';
const TEXT_PRODUCTS_GTIN_HELP = 'GTIN debe ser almacenado como 14 Dígitos. Cualquier GTIN inferior a esto se rellenará con ceros a la izquierda para cumplir con las especificaciones GTIN.';

const TEXT_PRODUCTS_SEO_DESCRIPTION = 'Descripción Meta para SEO';
const TEXT_PRODUCTS_SEO_DESCRIPTION_HELP = 'Añadir un elemento Meta &lt;description&gt;. HTML no está permitido.';
const TEXT_PRODUCTS_SEO_KEYWORDS = 'Palabras clave Meta de producto para SEO';
const TEXT_PRODUCTS_SEO_KEYWORDS_HELP = 'Añadir un elemento Meta &lt;keyword&gt;. Deben estar separados por comas. HTML no está permitido.';
const TEXT_PRODUCTS_SEO_TITLE = 'Titulo del producto para SEO';
const TEXT_PRODUCTS_SEO_TITLE_HELP = 'Reemplaza el título del producto<br>en la etiqueta Meta Element &lt;title&gt; y opcionalmente en la ruta de navegación.<br>Dejar en blanco para usar por defecto el nombre del producto.';
const TEXT_CATEGORIES_SEO_TITLE = 'Título de la Categoría para SEO:<br><small>Reemplaza el título de la categoría en la etiqueta Meta Element &lt;title&gt;.<br>Dejar en blanco para usar por defecto el nombre de la categoría.';
const TEXT_EDIT_CATEGORIES_SEO_TITLE = 'Editar el título de la categoría para SEO:<br><small>Reemplaza el título de la categoría en la etiqueta Meta Element &lt;title&gt;<br>y opcionalmente en la ruta de navegación.<br>Dejar en blanco para usar por defecto el nombre de la categoría.</small>';

const TEXT_PRODUCTS_OTHER_IMAGES = 'Imagenes de Galería';
