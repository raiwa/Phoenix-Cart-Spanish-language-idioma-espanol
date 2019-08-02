<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Cheque/Giro Postal');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Hacer pagadero a:&nbsp;' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . '<br /><br />Enviar a:<br />' . STORE_NAME . '<br />' . nl2br(STORE_ADDRESS) . '<br /><br />' . 'Su pedido no será enviado hasta que recibamos el pago.');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Hacer pagadero a: " . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . "\n\nEnviar a:\n" . STORE_NAME . "\n" . STORE_ADDRESS . "\n\n" . 'Su pedido no será enviado hasta que recibamos el pago..');

  define('MODULE_PAYMENT_MONEYORDER_WARNING_SETUP', 'Por favor, asegúrese de configurar el parámetro \'Hacer pagadero a\'.');
