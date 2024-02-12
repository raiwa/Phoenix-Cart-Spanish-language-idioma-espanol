<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart

  Released under the GNU General Public License
*/

const MODULE_CONTENT_SC_STOCK_NOTICE_TITLE = 'Mensaje cantidad no disponible';
const MODULE_CONTENT_SC_STOCK_NOTICE_DESCRIPTION = 'Mostrar el Mensaje cantidad no disponible en la página de Carrito de Compra.';

const MODULE_CONTENT_SC_STOCK_NOTICE_CANT_CHECKOUT = '<p class="lead">Los productos marcados con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . <<<'EOT'
 no están disponibles en la cantidad que requiere.</p>
<p>Por favor, modifique la cantidad de productos marcados con  
EOT
. STOCK_MARK_PRODUCT_OUT_OF_STOCK . ', gracias.</p>';
const MODULE_CONTENT_SC_STOCK_NOTICE_CAN_CHECKOUT = '<p class="lead">Los productos marcados con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . <<<'EOT'
 no están disponibles en la cantidad que requiere.</p>
<p>De todas formas, puede comprar los que hay disponibles y el resto se lo enviamos más tarde o esperar a que la cantidad requerida esté disponible.</p>
EOT;
