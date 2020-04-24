<?php
/*
  $Id: espanol.php

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2016 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Array examples which should work on all servers:
//España: 'es_ES.UTF-8 = 'es_ES.UTF8 = 'esp_es'
//México 'es_MX.UTF-8 = 'es_MX.UTF8 = 'esm_es'
@setlocale(LC_ALL, ['en_US.UTF-8', 'en_US.UTF8', 'enu_usa']);

const DATE_FORMAT_SHORT = '%d/%m/%Y';  // this is used for strftime()
const DATE_FORMAT_LONG = '%A %d de %B de %Y'; // this is used for strftime()
const DATE_FORMAT = 'd/m/Y'; // this is used for date()
const DATE_TIME_FORMAT = DATE_FORMAT_SHORT . ' %H:%M:%S';
const JQUERY_DATEPICKER_FORMAT = 'dd/mm/yyyy'; // see http://bootstrap-datepicker.readthedocs.org/en/release/options.html#format
const JQUERY_DATEPICKER_I18N_CODE = 'es'; // leave empty for en_US; see http://bootstrap-datepicker.readthedocs.org/en/release/options.html#language

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
const LANGUAGE_CURRENCY = 'EUR';

// Global entries for the <html> tag
const HTML_PARAMS = '';

// charset for web pages and emails
const CHARSET = 'utf-8';

// page title
const TITLE = STORE_NAME;

// text in includes/modules/downloads.php
const HEADER_TITLE_MY_ACCOUNT = 'Mi Cuenta';

// text in includes/application_top.php
const HEADER_TITLE_TOP = '<i class="fas fa-home"></i><span class="sr-only"> Inicio</span>';
const HEADER_TITLE_CATALOG = 'Catálogo';

// checkout procedure text
const CHECKOUT_BAR_DELIVERY = 'Información de Entrega';
const CHECKOUT_BAR_PAYMENT = 'Información de Pago';
const CHECKOUT_BAR_CONFIRMATION = 'Confirmación';

// pull down default text
const PULL_DOWN_DEFAULT = 'Seleccione, por favor';

// javascript messages
const JS_ERROR = '¡Hay errores en su formulario!\n\nPor favor, haga las siguientes correciones:\n\n';

const JS_ERROR_NO_PAYMENT_MODULE_SELECTED = '* Por favor, seleccione un método de pago para su pedido.\n';

const ERROR_NO_PAYMENT_MODULE_SELECTED = 'Por favor, seleccione un método de pago para su pedido.';

// constants for use in tep_prev_next_display function
const TEXT_RESULT_PAGE = 'Páginas de Resultados:';
const TEXT_DISPLAY_NUMBER_OF_PRODUCTS = 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos)';

const PREVNEXT_TITLE_FIRST_PAGE = 'Principio';
const PREVNEXT_TITLE_PREVIOUS_PAGE = 'Anterior';
const PREVNEXT_TITLE_NEXT_PAGE = 'Siguiente';
const PREVNEXT_TITLE_LAST_PAGE = 'Final';
const PREVNEXT_TITLE_PAGE_NO = 'Página %d';
const PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE = 'Anteriores %d Páginas';
const PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE = 'Siguientes %d Páginas';
const PREVNEXT_BUTTON_FIRST = '&lt;&lt;PRINCIPIO';
const PREVNEXT_BUTTON_PREV = '[&lt;&lt; Anterior]';
const PREVNEXT_BUTTON_NEXT = '[Siguiente &gt;&gt;]';
const PREVNEXT_BUTTON_LAST = 'FINAL&gt;&gt;';

const IMAGE_BUTTON_ADD_ADDRESS = 'Añadir Dirección';
const IMAGE_BUTTON_BACK = 'Volver';
const IMAGE_BUTTON_BUY_NOW = 'Comprar Ahora';
const IMAGE_BUTTON_CHANGE_ADDRESS = 'Cambiar Dirección';
const IMAGE_BUTTON_CHECKOUT = 'Realizar Pedido';
const IMAGE_BUTTON_CONFIRM_ORDER = 'Confirmar Pedido';
const IMAGE_BUTTON_CONTINUE = 'Continuar';
const IMAGE_BUTTON_DELETE = 'Eliminar';
const IMAGE_BUTTON_LOGIN = 'Entrar';
const IMAGE_BUTTON_IN_CART = 'Añadir al Carrito';
const IMAGE_BUTTON_SEARCH = 'Buscar';
const IMAGE_BUTTON_UPDATE = 'Actualizar';
const IMAGE_BUTTON_UPDATE_PREFERENCES = 'Actualizar preferencias';

const SMALL_IMAGE_BUTTON_DELETE = 'Eliminar';
const SMALL_IMAGE_BUTTON_EDIT = 'Modificar';
const SMALL_IMAGE_BUTTON_VIEW = 'Ver';
const SMALL_IMAGE_BUTTON_BUY = 'Comprar';

const ICON_ARROW_RIGHT = 'más';

const TEXT_SORT_PRODUCTS = 'Ordenar';
const TEXT_DESCENDINGLY = 'Descendentemente';
const TEXT_ASCENDINGLY = 'Ascendentemente';
const TEXT_BY = ' por ';

const TEXT_UNKNOWN_TAX_RATE = 'Impuesto desconocido';

const TEXT_CCVAL_ERROR_INVALID_DATE = 'La fecha de caducidad de la tarjeta de crédito es incorrecta. Compruebe la fecha e inténtelo de nuevo.';
const TEXT_CCVAL_ERROR_INVALID_NUMBER = 'El número de la tarjeta de crédito es incorrecto. Compruebe el número e inténtelo de nuevo.';
const TEXT_CCVAL_ERROR_UNKNOWN_CARD = 'Los primeros cuatro dígitos de su tarjeta son: %s. Si este número es correcto, no aceptamos este tipo de tarjetas. Si es incorrecto, inténtelo de nuevo.';

// category views
const TEXT_VIEW = 'Vista: ';
const TEXT_VIEW_LIST = ' Listado';
const TEXT_VIEW_GRID = 'Cuadrícula';

// search placeholder
const TEXT_SEARCH_PLACEHOLDER = 'Buscar';

// message for required inputs
const FORM_REQUIRED_INFORMATION = '<i class="fas fa-asterisk text-danger"></i> Información requerida';
const FORM_REQUIRED_INPUT = '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>';

// grid/list
const TEXT_SORT_BY = 'Ordenar por ';

// moved from index
const TABLE_HEADING_IMAGE = '';
const TABLE_HEADING_MODEL = 'Modelo';
const TABLE_HEADING_PRODUCTS = 'Nombre Producto';
const TABLE_HEADING_MANUFACTURER = 'Fabricante';
const TABLE_HEADING_QUANTITY = 'Existencia';
const TABLE_HEADING_PRICE = 'Precio';
const TABLE_HEADING_WEIGHT = 'Peso';
const TABLE_HEADING_BUY_NOW = 'Comprar Ahora';
const TABLE_HEADING_LATEST_ADDED = 'Novedades';
const TABLE_HEADING_ORDERED = 'Más Popular';

// product notifications
const PRODUCT_SUBSCRIBED = '%s se ha agregado a su lista de notificaciones';
const PRODUCT_UNSUBSCRIBED = '%s ha sido eliminado de su lista de notificaciones';
const PRODUCT_ADDED = '%s se ha añadido a su carrito';
const PRODUCT_REMOVED = '%s ha sido eliminado de su carrito';

// bootstrap helper
const MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION = '';

// noscript helper
const TEXT_NOSCRIPT = <<<'EOT'
<p><strong>Parece que JavaScript está deshabilitado en su navegador.</strong></p>
<p>Debe tener activado Javascript en su navegador para aprovechar la funcionalidad de este sitio web.<br>
<a class="alert-link" href="https://www.enable-javascript.com/" target="_blank" rel="nofollow">Haga clic aquí para obtener instrucciones sobre cómo activar JavaScript en su navegador.</a>.</p>
EOT;

// sitewide is-product 
const IS_PRODUCT_SHOW_PRICE = '%s';
const IS_PRODUCT_SHOW_PRICE_SPECIAL = '<del>%s</del> <span class="text-danger">ahora %s</span>';
const IS_PRODUCT_BUTTON_BUY = '<i class="fas fa-shopping-cart"></i>';
const IS_PRODUCT_BUTTON_VIEW = '<i class="fas fa-eye"></i> Ver';

// sitewide product listing
const LISTING_SORT_DOWN = '<i class="fas fa-level-down-alt text-primary"></i>';
const LISTING_SORT_UP = '<i class="fas fa-level-up-alt text-primary"></i>';
const LISTING_SORT_UNSELECTED = '<i class="fas fa-level-up-alt text-black-50"></i>';
// for new style internal pages
const LINK_TEXT_EDIT = '<small><a class="%s" href="%s">Editar</a></small>';
const SHIPPING_FA_ICON = '<i class="fas fa-shipping-fast fa-fw fa-3x float-right text-black-50"></i>';
const PAYMENT_FA_ICON = '<i class="fas fa-file-invoice-dollar fa-fw fa-3x float-right text-black-50"></i>';

const ENTRY_COMMENTS = '¿Algo que deberíamos saber?';
const ENTRY_COMMENTS_PLACEHOLDER = 'Comentario aquí...';
const TABLE_HEADING_OR = '-o-';
