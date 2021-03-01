<?php
/*
  $Id: index.php 1739 2007-12-20 00:52:16Z hpdl $

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

define('TABLE_HEADING_NEW_PRODUCTS', 'Nuevos Productos en %s');

define('TEXT_NO_PRODUCTS', 'No hay productos en esta categoría.');
define('TEXT_NUMBER_OF_PRODUCTS', 'Número de Productos: ');
define('TEXT_SHOW', '<STRONG>Mostrar:</STRONG>');
define('TEXT_BUY', 'Compre 1 \'');
define('TEXT_NOW', '\' ahora');
define('TEXT_ALL_CATEGORIES', 'Todas las categorías');
define('TEXT_ALL_MANUFACTURERS', 'Todos los fabricantes');

// seo
if ( ($category_depth == 'top') && (!isset($_GET['manufacturers_id'])) ) {
  define('META_SEO_TITLE', 'Título de la página Index');
  define('META_SEO_DESCRIPTION', 'Esta es la descripción de su sitio para ser utilizado en el META Elemento Descripción');
}
