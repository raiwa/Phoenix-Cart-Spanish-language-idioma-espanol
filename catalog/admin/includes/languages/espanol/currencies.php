<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Monedas');

define('TABLE_HEADING_CURRENCY_NAME', 'Moneda');
define('TABLE_HEADING_CURRENCY_CODES', 'Código');
define('TABLE_HEADING_CURRENCY_VALUE', 'Valor');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_INFO_EDIT_INTRO', 'Por favor realice los cambios necesarios');
define('TEXT_INFO_COMMON_CURRENCIES', '-- Monedas Comunes --');
define('TEXT_INFO_CURRENCY_TITLE', 'Título: %s');
define('TEXT_INFO_CURRENCY_CODE', 'Código: %s');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Símbolo a la izquierda: %s');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Símbolo a la derecha: %s');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Punto decimal: %s');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Separador de miles: %s');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Número de decimales: %s');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', 'Actualizado el: %s');
define('TEXT_INFO_CURRENCY_VALUE', 'Valor: %s');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Ejemplo: %s =  %s');

define('TEXT_INFO_INSERT_INTRO', 'Introduzca los datos de la nueva moneda');
define('TEXT_INFO_DELETE_INTRO', '¿Seguro que quiere eliminar esta moneda?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Nueva Moneda');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Editar Moneda');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Eliminar Moneda');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (requiere una actualización manual de los cambios de moneda)');
define('TEXT_INFO_CURRENCY_UPDATED', 'El tipo de cambio para %s (%s) se ha actualizado correctamente vía %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Error: La moneda predeterminada no se puede eliminar. Establezca otra moneda como predeterminada y pruebe de nuevo.');
define('ERROR_CURRENCY_INVALID', 'Error: El tipo de cambio para %s (%s) no fue actualizado vía %s. ¿Se trata de un código de moneda válido?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Advertencia: El tipo de cambio primario (%s) ha fallado por %s (%s) - probando el servidor de tipo de cambio secundario.');

define('ERROR_INSTALL_CURRENCY_CONVERTER', 'No tiene ningún módulo de Conversión de divisas instalado.  <a class="alert-link font-weight-bold" href="' . tep_href_link('modules.php', 'set=currencies') . '">Instalar ahora</a>');
