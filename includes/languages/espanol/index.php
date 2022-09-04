<?php
/*
  $Id: index.php 1739 2007-12-20 00:52:16Z hpdl $

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart

  Released under the GNU General Public License
*/

const TABLE_HEADING_NEW_PRODUCTS = 'Nuevos Productos en %s';

const TEXT_NO_PRODUCTS = 'No hay productos en esta categoría.';
const TEXT_NUMBER_OF_PRODUCTS = 'Número de Productos: ';
const TEXT_SHOW = '<STRONG>Mostrar:</STRONG>';
const TEXT_BUY = 'Compre 1 \'';
const TEXT_NOW = '\' ahora';
const TEXT_ALL_CATEGORIES = 'Todas las categorías';
const TEXT_ALL_MANUFACTURERS = 'Todos los fabricantes';

// seo
if ( ($category_depth == 'top') && (!isset($_GET['manufacturers_id'])) ) {
  define('META_SEO_TITLE', 'Título de la página Index');
  define('META_SEO_DESCRIPTION', 'Esta es la descripción de su sitio para ser utilizado en el META Elemento Descripción');
}
