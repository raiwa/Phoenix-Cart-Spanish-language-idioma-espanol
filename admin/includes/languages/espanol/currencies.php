<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Monedas';

const TABLE_HEADING_CURRENCY_NAME = 'Moneda';
const TABLE_HEADING_CURRENCY_CODES = 'Código';
const TABLE_HEADING_CURRENCY_VALUE = 'Valor';
const TABLE_HEADING_ACTION = 'Acción';

const TEXT_INFO_EDIT_INTRO = 'Por favor realice los cambios necesarios';
const TEXT_INFO_COMMON_CURRENCIES = '-- Monedas Comunes --';
const TEXT_INFO_CURRENCY_TITLE = 'Título: %s';
const TEXT_INFO_CURRENCY_CODE = 'Código: %s';
const TEXT_INFO_CURRENCY_SYMBOL_LEFT = 'Símbolo a la izquierda: %s';
const TEXT_INFO_CURRENCY_SYMBOL_RIGHT = 'Símbolo a la derecha: %s';
const TEXT_INFO_CURRENCY_DECIMAL_POINT = 'Punto decimal: %s';
const TEXT_INFO_CURRENCY_THOUSANDS_POINT = 'Separador de miles: %s';
const TEXT_INFO_CURRENCY_DECIMAL_PLACES = 'Número de decimales: %s';
const TEXT_INFO_CURRENCY_LAST_UPDATED = 'Actualizado el: %s';
const TEXT_INFO_CURRENCY_VALUE = 'Valor: %s';
const TEXT_INFO_CURRENCY_EXAMPLE = 'Ejemplo: %s =  %s';

const TEXT_INFO_INSERT_INTRO = 'Introduzca los datos de la nueva moneda';
const TEXT_INFO_DELETE_INTRO = '¿Seguro que quiere eliminar esta moneda?';
const TEXT_INFO_HEADING_NEW_CURRENCY = 'Nueva Moneda';
const TEXT_INFO_HEADING_EDIT_CURRENCY = 'Editar Moneda';
const TEXT_INFO_HEADING_DELETE_CURRENCY = 'Eliminar Moneda';
const TEXT_INFO_SET_AS_DEFAULT = TEXT_SET_DEFAULT . ' (requiere una actualización manual de los cambios de moneda';
const TEXT_INFO_CURRENCY_UPDATED = 'El tipo de cambio para %s (%s) se ha actualizado correctamente vía %s.';

const ERROR_REMOVE_DEFAULT_CURRENCY = '<strong>Error:</strong> La moneda predeterminada no se puede eliminar. Establezca otra moneda como predeterminada y pruebe de nuevo.';
const ERROR_CURRENCY_INVALID = '<strong>Error:</strong> El tipo de cambio para %s (%s) no fue actualizado vía %s. ¿Se trata de un código de moneda válido?';
const WARNING_PRIMARY_SERVER_FAILED = '<strong>Advertencia:</strong> El tipo de cambio primario (%s) ha fallado por %s (%s) - probando el servidor de tipo de cambio secundario.';

const ERROR_INSTALL_CURRENCY_CONVERTER = 'No tiene ningún módulo de Conversión de divisas instalado.  <a class="alert-link font-weight-bold" href="%s"> Instalar ahora</a>';

const GET_HELP_LINK = 'https://phoenixcart.org/phoenixcartwiki/index.php?title=Currencies';
