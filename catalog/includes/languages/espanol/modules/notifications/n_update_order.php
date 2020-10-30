<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_TITLE = 'Actualizar el estado del pedido';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_DESCRIPTION = 'Enviar una notificación cuando se actualiza el estado del pedido.';

const MODULE_NOTIFICATIONS_UPDATE_ORDER_SEPARATOR = '------------------------------------------------------';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_SUBJECT = 'Actualización de pedido';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_ORDER_NUMBER = 'Número de pedido:  %d';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_INVOICE_URL = 'Factura detallada:  %s';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_DATE_ORDERED = 'Fecha de pedido:  %s';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_STATUS_UPDATE = <<<'EOT'
Su pedido ha s sido actualizado al siguiente estado.

Nuevo estado: %s

Por favor, responda a este correo electrónico si tiene cualquier pregunta.


EOT;
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_COMMENTS_UPDATE = 'Los comentarios sobre su pedido son' . "\n\n%s\n\n";
