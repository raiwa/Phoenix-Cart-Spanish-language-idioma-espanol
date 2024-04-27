<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const MODULE_PAYMENT_MONEYORDER_TEXT_TITLE = 'Cheque/Giro Postal';
const MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION = 'Requiere un pago fuera de línea antes de enviar el pedido.';
const MODULE_PAYMENT_MONEYORDER_TEXT_CONFIRMATION = 'Pagadero a: %1$s<br><br>Enviar a:<br>%2$s<br>%3$s<br><br>Su pedido no se enviará hasta que recibamos el pago.';
const MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER = <<<'EOT'
Hacer pagadero a: %1$s

Enviar a:
%2$s
%3$s

Su pedido no será enviado hasta que recibamos el pago.
EOT;

const MODULE_PAYMENT_MONEYORDER_WARNING_SETUP = 'Por favor, asegúrese de configurar el parámetro \'Hacer pagadero a\'.';
