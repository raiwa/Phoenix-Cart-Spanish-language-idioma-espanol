<?php
/*
  $Id: espanol.php

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales..
// Array examples which should work on all servers:
//España: 'es_ES.UTF-8', 'es_ES.UTF8', 'esp_es'
//México 'es_MX.UTF-8', 'es_MX.UTF8', 'esm_es'

@setlocale(LC_ALL, ['en_US.UTF-8', 'en_US.UTF8', 'enu_usa']);

const DATE_FORMAT_SHORT = '%d/%m/%Y';  // this is used for strftime()
const DATE_FORMAT_LONG = '%A %d de %B de %Y'; // this is used for strftime()
const DATE_FORMAT = 'd/m/Y';  // this is used for date()
const PHP_DATE_TIME_FORMAT = 'd/m/Y H:i:s'; // this is used for date()
const DATE_TIME_FORMAT = DATE_FORMAT_SHORT . ' %H:%M:%S';

// Global entries for the <html> tag
const HTML_PARAMS = ' dir="ltr" lang="es"';

// charset for web pages and emails
const CHARSET = 'utf-8';

// page title
const TITLE = 'CE Phoenix Cart Herramienta de Administración';

// header text in includes/hooks/admin/siteWide/hMenu.php
const HEADER_TITLE_ONLINE_CATALOG = '<i class="fas fa-shopping-cart mr-1 text-primary"></i><span class="border-bottom border-primary">Su Tienda</span>';
const HEADER_TITLE_PHOENIX_CLUB = '<i class="fas fa-question-circle mr-1 text-primary" aria-hidden="true"></i><span class="border-bottom border-primary">Foro</span>';
const HEADER_TITLE_PHOENIX_WIKI = '<i class="fas fa-school mr-1 text-primary"></i><span class="border-bottom border-primary">Guía del Usuario</span>';
const HEADER_TITLE_CERTIFIED_DEVELOPERS = '<i class="fas fa-laptop-code mr-1 text-primary" aria-hidden="true"></i><span class="border-bottom border-primary">Socios certificados</span>';
const HEADER_TITLE_CERTIFIED_ADDONS = '<i class="fas fa-folder-plus mr-1 text-primary" aria-hidden="true"></i><span class="border-bottom border-primary">Addons y Servicios certificados</span>';                                                                                                                                                                           
const HEADER_TITLE_LOGOFF = '<i class="fas fa-lock mr-1"></i> <span class="border-bottom border-danger"> %s, salir de modo seguro</span>';

// images
const IMAGE_BACK = 'Volver';
const IMAGE_BACKUP = 'Copiar';
const IMAGE_CANCEL = 'Cancelar';
const IMAGE_COPY = 'Copiar';
const IMAGE_COPY_TO = 'Copiar A';
const IMAGE_DETAILS = 'Detalle';
const IMAGE_DELETE = 'Eliminar';
const IMAGE_EDIT = 'Editar';
const IMAGE_EMAIL = 'Correo Electrónico';
const IMAGE_EXPORT = 'Exportar';
const IMAGE_INSERT = 'Insertar';
const IMAGE_LOCK = 'Bloquear';
const IMAGE_MODULE_INSTALL = 'Instalar Módulo';
const IMAGE_MODULE_REMOVE = 'Quitar Módulo';
const IMAGE_MOVE = 'Mover';
const IMAGE_NEW_CATEGORY = 'Nueva Categoría';
const IMAGE_NEW_COUNTRY = 'Nuevo País';
const IMAGE_NEW_CURRENCY = 'Nueva Moneda';
const IMAGE_NEW_CUSTOMER_DATA_GROUP = 'Nuevo grupo de datos de clientes';
const IMAGE_NEW_LANGUAGE = 'Nuevo Idioma';
const IMAGE_NEW_NEWSLETTER = 'Nuevo Boletín';
const IMAGE_NEW_PRODUCT = 'Nuevo Producto';
const IMAGE_NEW_TAX_CLASS = 'Nuevo Tipo de Impuesto';
const IMAGE_NEW_TAX_RATE = 'Nueva Tasa de Impuesto';
const IMAGE_NEW_ZONE = 'Nueva Zona';
const IMAGE_ORDERS = 'Pedidos';
const IMAGE_ORDERS_INVOICE = 'Factura';
const IMAGE_ORDERS_PACKINGSLIP = 'Albarán';
const IMAGE_PREVIEW = 'Previsualizar';
const IMAGE_RESTORE = 'Restablecer';
const IMAGE_RESET = 'Reiniciar';
const IMAGE_SAVE = 'Guardar';
const IMAGE_SELECT = 'Seleccionar';
const IMAGE_SEND = 'Enviar';
const IMAGE_SEND_EMAIL = 'Enviar Correo Electrónico';
const IMAGE_UNLOCK = 'Desbloqueado';
const IMAGE_UPDATE = 'Actualizar';
const IMAGE_UPDATE_CURRENCIES = 'Actualizar Tipo de Cambio';
const IMAGE_UPLOAD = 'Subir';

const ICON_FILE = 'Archivo';
const ICON_FILE_DOWNLOAD = 'Descargar';

// constants for use in pagination
const TEXT_RESULT_PAGE = 'Página %s de %d';
const TEXT_DISPLAY_NUMBER_OF_COUNTRIES = 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> países)';
const TEXT_DISPLAY_NUMBER_OF_CUSTOMER_DATA_GROUPS = 'Mostrando <strong>%d</strong> a <strong>%d</strong> (de <strong>%d</strong> grupos de datos de clientes)';
const TEXT_DISPLAY_NUMBER_OF_CUSTOMERS = 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> clientes)';
const TEXT_DISPLAY_NUMBER_OF_CURRENCIES = 'Viendo de la <b>%d</b> a la <b>%d</b> (de <b>%d</b> monedas)';
const TEXT_DISPLAY_NUMBER_OF_ENTRIES = 'Viendo de la <b>%d</b> a la <b>%d</b> (de <b>%d</b> entradas)';
const TEXT_DISPLAY_NUMBER_OF_LANGUAGES = 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> idiomas)';
const TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS = 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> fabricantes)';
const TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS = 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> boletines)';
const TEXT_DISPLAY_NUMBER_OF_ORDERS = 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> pedidos)';
const TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS = 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> estado de pedidos)';
const TEXT_DISPLAY_NUMBER_OF_PRODUCTS = 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos)';
const TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED = 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos esperados)';
const TEXT_DISPLAY_NUMBER_OF_REVIEWS = 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> comentarios)';
const TEXT_DISPLAY_NUMBER_OF_SPECIALS = 'Viendo de la <b>%d</b> a la <b>%d</b> (de <b>%d</b> ofertas)';
const TEXT_DISPLAY_NUMBER_OF_TAX_ZONES = 'Viendo de la <b>%d</b> a la <b>%d</b> (de <b>%d</b> zonas de impuestos)';
const TEXT_DISPLAY_NUMBER_OF_TAX_RATES = 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> porcentajes de impuestos)';
const TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES = 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> tipos de impuesto)';
const TEXT_DISPLAY_NUMBER_OF_ZONES = 'Viendo de la <b>%d</b> a la <b>%d</b> (de <b>%d</b> zonas)';

const SPLIT_PAGES = 'Seleccionar Página';

const TEXT_DEFAULT = 'predeterminado/a';
const TEXT_SET_DEFAULT = 'Establecer como predeterminado/a';

const TEXT_NONE = '--ninguno--';
const TEXT_TOP = 'Principio';
const TEXT_ALL = 'Todo';

const ERROR_DESTINATION_DOES_NOT_EXIST = '<strong>Error:</strong> Destino no existe.';
const ERROR_DESTINATION_NOT_WRITEABLE = '<strong>Error:</strong> No se puede escribir en el destino.';
const ERROR_FILE_NOT_SAVED = '<strong>Error:</strong> El archivo subido no se ha guardado.';
const ERROR_FILETYPE_NOT_ALLOWED = '<strong>Error:</strong> Extensión de archivo no permitida.';
const SUCCESS_FILE_SAVED_SUCCESSFULLY = '<strong>Éxito:</strong> Archivo guardado con éxito.';
const WARNING_NO_FILE_UPLOADED = '<strong>Advertencia:</strong> No se ha subido ningun archivo.';

// bootstrap helper
const MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION = <<<'EOT'
<p>El ancho del contenido puede ser de 12 o menos por columna y fila.</p>
<p>12/12 = 100% ancho, 6/12 = 50% ancho, 4/12 = 33% ancho.</p>
<p>El total de todas las columnas en cualquier fila debe ser igual a 12 (ej:  3 cajas de 4 columnas cada una, 1 caja de 12 columnas etc).</p>
EOT;

// seo helper
const PLACEHOLDER_COMMA_SEPARATION = 'Debe, Estar, Separado, Por, Comas';

// message for required inputs
const FORM_REQUIRED_INPUT = '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>';

const TEXT_IMAGE_NON_EXISTENT = 'NO EXISTE IMAGEN';

const STAR_RATING = 'Valorado con %s Estrellas';
const GET_HELP = '<img src="images/icon_phoenix.png" class="mr-2">Ayuda';
const GET_ADDONS = '<img src="images/icon_phoenix.png" class="mr-2">Addons';
const ADDONS_FREE = 'Gratis';
const ADDONS_COMMERCIAL = 'De Pago';
const ADDONS_PRO = 'PRO';
