<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const NAVBAR_TITLE = 'Comprobación de Seguridad';
const HEADING_TITLE = 'Comprobación de Seguridad';

const TEXT_INFORMATION = <<<'EOT'
Hemos detectado que su navegador ha generado un ID de sesión SSL diferente que se utiliza en nuestras páginas seguras.<br><br>
Por motivos de seguridad, necesitará iniciar sesión en su perfil nuevamente para continuar comprando.<br><br>
Algunos navegadores no tienen la capacidad de generar automáticamente un ID de sesión SSL seguro. Si utiliza un navegador así, le recomendamos cambiar a un navegador más moderno como <a href="https://www.microsoft.com/en-us/edge/download?form=MA13FJ" target="_blank" rel="noreferrer">Microsoft Edge</a>, <a href="https://support.google.com/chrome/answer/95346" target="_blank" rel="noreferrer">Google Chrome</a> o <a href="https://www.mozilla.org/en-GB/firefox/" target="_blank" rel="noreferrer">Mozilla Firefox</a> para seguir utilizando nuestro sitio.<br><br>
Hemos tomado esta medida de seguridad para su beneficio y nos disculpamos por cualquier inconveniente causado.<br><br>
Por favor, <a class="btn btn-success" role="button" href="%s">contáctenos</a> si tiene alguna pregunta sobre este requisito.
EOT;

const BOX_INFORMATION_HEADING = 'Seguridad y Privacidad';
const BOX_INFORMATION = <<<'EOT'
Validamos el Identificativo de Sesión Seguro generado automáticamente por su navegador en cada petición que realiza a este servidor.<br><br>
Esta validación asegura que es usted quien navega con su cuenta y no otra persona.
EOT;
