<?php
/*
  $Id: espanol.php

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Array examples which should work on all servers:
//España: 'es_ES.UTF-8', 'es_ES.UTF8', 'esp_es'
//México 'es_MX.UTF-8', 'es_MX.UTF8', 'esm_es'
@setlocale(LC_ALL, ['en_US.UTF-8', 'en_US.UTF8', 'enu_usa']);

$long_date_formatter = new IntlDateFormatter('es', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
$short_date_formatter = new IntlDateFormatter('es', IntlDateFormatter::SHORT, IntlDateFormatter::NONE);
$date_time_formatter = new IntlDateFormatter('es', IntlDateFormatter::SHORT, IntlDateFormatter::LONG);

const DATE_FORMAT = 'd/m/Y'; // this is used for date()

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
const LANGUAGE_CURRENCY = 'EUR';

// Global entries for the <html> tag
const HTML_PARAMS = '';

// charset for web pages and e-mails
const CHARSET = 'utf-8';

// page title
const TITLE = STORE_NAME;

// text in includes/modules/downloads.php
const HEADER_TITLE_MY_ACCOUNT = 'Mi Cuenta';

// checkout procedure text
const CHECKOUT_BAR_DELIVERY = 'Información de Entrega';
const CHECKOUT_BAR_PAYMENT = 'Información de Pago';
const CHECKOUT_BAR_CONFIRMATION = 'Confirmación';

// pull down default text
const PULL_DOWN_DEFAULT = 'Seleccione, por favor';

const ERROR_NO_PAYMENT_MODULE_SELECTED = 'Por favor, seleccione un método de pago para su pedido.';

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

const TEXT_CCVAL_ERROR_INVALID_DATE = 'La fecha de caducidad de la tarjeta de crédito es incorrecta. Compruebe la fecha e inténtelo de nuevo.';
const TEXT_CCVAL_ERROR_INVALID_NUMBER = 'El número de la tarjeta de crédito es incorrecto. Compruebe el número e inténtelo de nuevo.';
const TEXT_CCVAL_ERROR_UNKNOWN_CARD = 'Los primeros cuatro dígitos de su tarjeta son: %s. Si este número es correcto, no aceptamos este tipo de tarjetas. Si es incorrecto, inténtelo de nuevo.';

const TEXT_SEARCH_PLACEHOLDER = 'Buscar';

// message for required inputs
const FORM_REQUIRED_INFORMATION = '<i class="fas fa-asterisk text-danger"></i> Información requerida';
const FORM_REQUIRED_INPUT = '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>';

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
<a class="alert-link" href="https://www.enable-javascript.com/" target="_blank" rel="noreferrer">Haga clic aquí para obtener instrucciones sobre cómo activar JavaScript en su navegador.</a>.</p>
EOT;

// for new style internal pages
const LINK_TEXT_EDIT = '<small><a class="%s" href="%s">Editar</a></small>';
const SHIPPING_FA_ICON = '<i class="fas fa-shipping-fast fa-fw fa-3x float-right text-secondary"></i>';
const PAYMENT_FA_ICON = '<i class="fas fa-file-invoice-dollar fa-fw fa-3x float-right text-secondary"></i>';

const ENTRY_COMMENTS = '¿Algo que deberíamos saber?';
const ENTRY_COMMENTS_PLACEHOLDER = 'Comentario aquí...';

const STAR_RATING = 'Valorado con %s Estrellas';
