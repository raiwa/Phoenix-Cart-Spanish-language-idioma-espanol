<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart

  Released under the GNU General Public License
*/

const NAVBAR_TITLE_1 = 'Búsqueda Avanzada';
const NAVBAR_TITLE_2 = 'Resultados de la Búsqueda';

const HEADING_TITLE_1 = 'Búsqueda Avanzada';
const HEADING_TITLE_2 = 'Productos que satisfacen los criterios de búsqueda';

const HEADING_SEARCH_CRITERIA = 'Criterios de Búsqueda';

const TEXT_SEARCH_IN_DESCRIPTION = 'Buscar también en la descripción';
const ENTRY_CATEGORIES = 'Categoría:';
const ENTRY_INCLUDE_SUBCATEGORIES = 'Incluir Subcategorías';
const ENTRY_MANUFACTURERS = 'Fabricante:';
const ENTRY_PRICE_FROM = 'Precio desde:';
const ENTRY_PRICE_TO = 'hasta:';
const ENTRY_DATE_FROM = 'De fecha de alta';
const ENTRY_DATE_TO = 'hasta:';

const ENTRY_PRICE_FROM_TEXT = 'Precio desde';
const ENTRY_PRICE_TO_TEXT = 'Precio hasta';

const ENTRY_DATE = 'Fecha';
const ENTRY_PRICE = 'Precio';

const TEXT_SEARCH_HELP_LINK = '<i class="fas fa-info-circle"></i> Ayuda';

const TEXT_ALL_CATEGORIES = 'Todas las Categorías';
const TEXT_ALL_MANUFACTURERS = 'Todos los Fabricantes';

const HEADING_SEARCH_HELP = 'Consejos para Búsqueda Avanzada';
const TEXT_SEARCH_HELP = <<<'EOT'
Las palabras clave pueden estar separadas por declaraciones AND u OR para un mayor control de los resultados de búsqueda.<br>
<br>
Por ejemplo, <u>Fiacre AND pera</u> generaría un conjunto de resultados que contiene ambas palabras. Sin embargo, para <u>naranja O limón</u>, el conjunto de resultados devuelto contendría ambas o cualquiera de las palabras.<br>
<br>
Se pueden buscar coincidencias exactas encerrando las palabras clave entre comillas dobles.<br>
<br>
Por ejemplo, <u>"manzana verde"</u> generaría un conjunto de resultados que coincidiría con la cadena exacta.<br>
<br>
Los corchetes se pueden utilizar para un mayor control del conjunto de resultados.<br>
<br>
Por ejemplo, <u>Pixabay y (lima o roja o "manzana verde")</u>.;
EOT;
const TEXT_CLOSE_WINDOW = '<u>Cerrar ventana</u> [x]';

const TEXT_NO_PRODUCTS = 'No hay productos que corresponden con los criterios de búsqueda.';

const ERROR_AT_LEAST_ONE_INPUT = 'Debe introducir al menos un criterio de búsqueda.';
const ERROR_PRICE_FROM_MUST_BE_NUM = 'El Precio Desde debe ser númerico';
const ERROR_PRICE_TO_MUST_BE_NUM = 'El Precio Hasta debe ser númerico';
const ERROR_PRICE_TO_LESS_THAN_PRICE_FROM = 'Precio Hasta debe ser mayor o igual que Precio Desde';
const ERROR_INVALID_KEYWORDS = 'Palabras clave incorrectas';
