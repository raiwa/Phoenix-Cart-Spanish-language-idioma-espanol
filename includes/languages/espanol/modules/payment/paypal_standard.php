<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Paypal Standard Payments
  Basic Paypal Payment Module for Phoenix Cart
  More sophisticated Paypal integration available at https://phoenixcart.org/forum/addons/

  author: John Ferguson @BrockleyJohn phoenix@cartmart.uk

  Copyright (c) 2024 Phoenix Cart

  Released under the GNU General Public License
*/

const MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_TITLE = 'Pagos estándar de PayPal';
const MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_PUBLIC_TITLE = 'PayPal';
const MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_DESCRIPTION = '<div class="alert alert-warning text-break">Active la opción de Retorno Automático para Pagos en su configuración de PayPal y configure la URL de retorno en:<br>%s<br><br>Active PDT y copie el token de identidad en el módulo.<br><br>Active la Notificación Instantánea de Pago y establezca la URL de notificación en:<br>%s</div><i class="fas fa-external-link-alt me-2"></i><a href="https://www.paypal.com" target="_blank" rel="noopener">Sitio web de PayPal</a>';

const MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_RETURN_BUTTON = 'Volver a ' . STORE_NAME; // máx. 60 caracteres

const MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_ADMIN_CONFIGURATION_SELLER = 'Este módulo no se cargará hasta que se haya configurado el parámetro del correo electrónico del vendedor. Por favor, edite y configure la configuración de este módulo.';
const MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_ADMIN_CONFIGURATION_PDT = 'El módulo no se cargará sin el Token de Identidad PDT para mayor seguridad en los pagos.';

const MODULE_PAYMENT_PAYPAL_STANDARD_CONFIG_ERROR = 'PayPal no está configurado correctamente; por favor, pruebe con otro método de pago o contáctenos.';
const MODULE_PAYMENT_PAYPAL_STANDARD_UPDATE_COMMENT_ERROR = 'No se pudo registrar los comentarios del pedido. Por favor, inténtelo de nuevo y si el problema persiste, contáctenos.';
const MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_VALIDATE_FAIL = 'No se pudo verificar la transacción de PayPal. Por favor, inténtelo de nuevo. Si el problema persiste, pruebe con otro método de pago o contáctenos.';

const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_LINK_TEXT = 'Probar conexión con el servidor';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_TITLE = 'Prueba de conexión con el servidor API';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_GENERAL_TEXT = 'Probando la conexión con el servidor...';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_CLOSE = 'Cerrar';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_TIME = 'Tiempo de conexión:';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_SUCCESS = '¡Éxito!';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_FAILED = 'No se pudo conectar: revise su configuración e inténtelo de nuevo.';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_ERROR = 'Se ha producido un error. Por favor, actualice la página, revise su configuración e inténtelo de nuevo.';
