<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Comprobación de Seguridad');
define('HEADING_TITLE', 'Comprobación de Seguridad');

define('TEXT_INFORMATION', 'Hemos detectado que su navegador ha generado un Identificativo de Sesión Seguro diferente al que ha estado usando a lo largo de su visita.<br><br>Por razones de seguridad, deberá entrar de nuevo en su cuenta para verificar su identidad.<br><br>Algunos navegadores como Konqueror 3.1 no tienen la capacidad de generar automáticamente un ID de sesión SSL seguro, lo cual requerimos. Si utiliza un navegador de este tipo, le recomendamos que cambie a otro navegador, como <a class = "btn btn-light btn-sm" role="button" href="http://www.microsoft.com/ie/" target="_blank" rel="noreferrer">Microsoft Internet Explorer</a> o <a class = "btn btn-light btn-sm" role="button" href="http://channels.netscape.com/ns/browsers/download_other.jsp" target="_blank" rel="noreferrer">Netscape</a> o <a class = "btn btn-light btn-sm" role = "button" href = "http://www.mozilla.org/releases/" target="_blank" rel="noreferrer">Mozilla</a> para continuar con su experiencia de compra en línea.<br><br>Hemos tomado esta medida de seguridad para su beneficio y le pedimos disculpas por adelantado si se producen inconvenientes.<br><br><a class="btn btn-success btn-sm" role="button" href="' . tep_href_link('contact_us.php') . '">póngase en contacto el propietario de la tienda</a> si tiene alguna pregunta relacionada con este requisito o si desea continuar comprando productos sin conexión.');

define('BOX_INFORMATION_HEADING', 'Seguridad y Privacidad');
define('BOX_INFORMATION', 'Validamos el Identificativo de Sesión Seguro generado automáticamente por su navegador en cada petición que realiza a este servidor.<br><br>Esta validación asegura que es usted quien navega con su cuenta y no otra persona.');
