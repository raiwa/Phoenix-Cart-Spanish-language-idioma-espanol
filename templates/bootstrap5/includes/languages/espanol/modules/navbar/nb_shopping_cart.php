<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

  const MODULE_NAVBAR_SHOPPING_CART_TITLE = 'Carrito de compra';
  const MODULE_NAVBAR_SHOPPING_CART_DESCRIPTION = 'Mostrar el Carrito de Compra en el menú de navegación';

  // unused in BS5 template
  // see new language const NAVBAR_ICON_CART_CONTENTS in /includes/languages/espanol.php
const MODULE_NAVBAR_SHOPPING_CART_CONTENTS = <<<'SC'
<span class="position-relative">
  <i title="Carrito de la compra: %1$s producto(s) en su carrito" class="fas fa-shopping-cart fa-fw fa-xl"></i>
  <span class="d-none d-sm-inline position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info border">
    <span class="cart-count">%1$s</span>
  </span>
</span>
<span class="d-inline d-sm-none"><span class="cart-count">%1$s</span> producto(s) en su Carrito</span>
SC;
  // eof unused

  const MODULE_NAVBAR_SHOPPING_CART_NO_CONTENTS = '<i class="fa fa-shopping-cart"></i> 0 productos';
  const MODULE_NAVBAR_SHOPPING_CART_HAS_CONTENTS = '<span class="cart-count">%s</span> producto(s), <span class="cart-value">%s</span>';
  const MODULE_NAVBAR_SHOPPING_CART_VIEW_CART = '<i class="fas fa-eye fa-fw"></i> Ver Carrito';
  const MODULE_NAVBAR_SHOPPING_CART_CHECKOUT = '<i class="fa fa-angle-right"></i> Realizar Pedido';

  const MODULE_NAVBAR_SHOPPING_CART_PRODUCT = '%s x %s';
