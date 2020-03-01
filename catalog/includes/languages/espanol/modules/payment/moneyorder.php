<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

const MODULE_PAYMENT_MONEYORDER_TEXT_TITLE = 'Cheque/Giro Postal';
const MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION = 'Requiere un pago fuera de línea antes de enviar el pedido.';
const MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER = <<<'EOT'
Hacer pagadero a: %1$s

Enviar a:
%2$s
%3$s

Su pedido no será enviado hasta que recibamos el pago.
EOT;

const MODULE_PAYMENT_MONEYORDER_WARNING_SETUP = 'Por favor, asegúrese de configurar el parámetro \'Hacer pagadero a\'.';
