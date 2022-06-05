<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Administradores';

const TABLE_HEADING_ADMINISTRATORS = 'Administradores';
const TABLE_HEADING_HTPASSWD = 'Asegurado por htpasswd';
const TABLE_HEADING_ACTION = 'Acción';

const TEXT_INFO_INSERT_INTRO = 'Por favor introduzca el nuevo administrador y los datos relacionados';
const TEXT_INFO_EDIT_INTRO = 'Por favor realice los cambios necesarios';
const TEXT_INFO_DELETE_INTRO = '¿Está seguro que desea eliminar este administrador?';
const TEXT_INFO_HEADING_NEW_ADMINISTRATOR = 'Nuevo Administrador';
const TEXT_INFO_USERNAME = 'Nombre Usuario:';
const TEXT_INFO_NEW_PASSWORD = 'Nueva Contraseña:';
const TEXT_INFO_PASSWORD = 'Contraseña:';
const TEXT_INFO_PROTECT_WITH_HTPASSWD = 'Protegido con htaccess/htpasswd';

const ERROR_ADMINISTRATOR_EXISTS = '<strong>Error:</strong> Administrador YA existe.';

const HTPASSWD_INFO = <<<'EOT'
<strong>Protección adicional con htaccess/htpasswd</strong>
<p>Esta Instalación de la Herramienta de Administración CE Phoenix no está protegido a través de htaccess/htpasswd.</p>
<p>Si habilita la capa de seguridad htaccess/htpasswd, el nombre de usuario del administrador y su contraseña se guardarán automáticamente en el archivo htpasswd cuando actualice los datos de un administrador.</p>
<p><strong>Tenga en cuenta</strong>, que si esta capa adicional de seguridad está habilitada y usted no puede acceder a la herramienta de administración, realice los cambios siguientes y consulte a su proveedor de hosting para habilitar la protección de htaccess/htpasswd:</p>
<p><u><strong>1. Edite este archivo:</strong></u><br /><br />%s</p>
<p>Quite las siguientes líneas si existen:</p>
<p><i>%s</i></p>
<p><u><strong>2. Elimine este archivo:</strong></u><br /><br />%s</p>
EOT;
const HTPASSWD_SECURED = <<<'EOT'
<strong>Protección adicional con htaccess/htpasswd</strong>
<p>Esta Instalación de la Herramienta de Administración CE Phoenix está adicionalmente protegida a través de htaccess/htpasswd.</p>
EOT;
const HTPASSWD_PERMISSIONS = <<<'EOT'
<strong>Protección adicional con htaccess/htpasswd</strong>
<p>Esta Instalación de la Herramienta de Administración CE Phoenix no está adicionalmente protegida a través de htaccess/htpasswd.</p>
<p>Los siguientes archivos necesitan tener permisos de escritura en el servidor web para poder activar la capa de seguridad htaccess/htpasswd:</p>
<ul>
<li>%s</li>
<li>%s</li>
</ul>
<p>Actualice esta página para confirmar si los permisos de los archivos han sido configurados correctamente.</p>
EOT;

const IMAGE_INSERT_NEW_ADMIN = 'Nuevo Administrador';
