<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Comprobar Versión';

const TABLE_HEADING_VERSION = 'Versión';
const TABLE_HEADING_RELEASED = 'Fecha de la versión';
const TABLE_HEADING_ACTION = 'Acción';

const TITLE_INSTALLED_VERSION = 'Versión Instalada: <strong>CE Phoenix v%s</strong>';

const VERSION_SERVER_FAILURE = 'No se han podido cargar las versiones disponibles del servidor. Compruebe su Internet o vuelva a intentarlo más tarde.';
const VERSION_RUNNING_LATEST = 'Se está ejecutando la última versión de CE Phoenix.';
const VERSION_UPGRADES_AVAILABLE = <<<'EOT'
<strong>
¡CE Phoenix %s</strong> es la última versión disponible para Usted!<hr>
<a class="alert-link" target="_blank" href="https://phoenixcart.org/forum/viewtopic.php?f=26&t=309">Desarrolladores Certificados</a>
 e instrucciones detalladas "<a class="alert-link" target="_blank" href="https://phoenixcart.org/forum/app.php/tag/phoenix-update">Hágalo usted mismo</a>"
 están disponibles en el Club Phoenix.
EOT;
