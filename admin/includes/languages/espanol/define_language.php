<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Definir Idiomas';

const TABLE_HEADING_FILES = 'Archivos';
const TABLE_HEADING_WRITABLE = 'Modificable';
const TABLE_HEADING_LAST_MODIFIED = 'Ultima Modificación';

const TEXT_EDIT_NOTE = <<<'EORT'
<p class = "lead">Edición de definiciones</p>

<p>Cada definición de idioma se establece como una constante PHP de la siguiente manera:</p>

<p><pre>const TEXT_MAIN = '<span style="background-color: #FFFF99;">Este texto puede ser editado. ¡Esto es realmente fácil de hacer!</span>');</pre></p>

<p>El texto remarcado puede ser editado. Esta definición está utilizando comillas simples para contener el texto, cualquier comilla simple en la definición del texto debe ser escapado con el caracter barra invertida (por ejemplo, It\'s).</p>
<p>Multiple line entries can be done like</p>

<p><pre>const TEXT_MAIN = <<<'EOT'
<span style="background-color: #FFFF99;">Este texto puede ser editado.
 ¡Esto es realmente fácil de hacer!</span>
EOT;</pre></p>

<p>Además, ya no es necesario escapar con una barra invertida en entradas de varias líneas como esta.</p>
EORT;

const TEXT_FILE_DOES_NOT_EXIST = 'El archivo no existe.';
const TEXT_INFO_DOWNLOAD_ONLY = 'Solo descargar (no guardar en el servidor)';

const ERROR_FILE_NOT_WRITEABLE = '<strong>Error:</strong> No puedo escribir en este archivo. Asigne correctamente los permisos a: %s';
