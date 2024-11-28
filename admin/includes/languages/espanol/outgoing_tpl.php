<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2024 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Plantillas de Correo Electrónico Salientes';

const BUTTON_INSERT_NEW_SLUG = 'Insertar Nueva Plantilla de Correo Electrónico';
const HEADING_DELETE_SLUG = 'Eliminar Esta Plantilla de Correo Electrónico';
const HEADING_NEW_SLUG = 'Nueva Plantilla de Correo Electrónico';

const SLUG_SELECT = '--- Por Favor Seleccione ---';

const TABLE_HEADING_SLUG = 'Nombre de Plantilla';
const TABLE_HEADING_TITLE = 'Título';
const TABLE_HEADING_DATE_ADDED = 'Fecha de Creación';	
const TABLE_HEADING_ACTION = 'Acción';

const TEXT_OUTGOING_SLUG = 'Nombre de Plantilla';
const TEXT_OUTGOING_SLUG_TITLE = 'Título del Correo Electrónico';
const TEXT_OUTGOING_SLUG_TEXT = 'Texto del Correo Electrónico';

const MISSING_SLUGS = '<div class="alert alert-danger d-flex justify-content-between">\
<span>Atención: ¡Estos módulos de programación existen y DEBEN tener una plantilla creada para ellos!<br><b>%s</b></span>\
<span>%s</span>\
</div>';

const TEXT_HEADING_NEW_OUTGOING_EMAIL = 'Agregar Nueva Plantilla de Correo Electrónico';
const TEXT_HEADING_EDIT_OUTGOING_EMAIL = 'Editar Plantilla de Correo Electrónico';
const TEXT_HEADING_DELETE_OUTGOING_EMAIL = 'Eliminar Correo Electrónico de la Cola';

const TEXT_OUTGOING_DATE = 'Enviar El:';
const TEXT_OUTGOING_EMAIL = 'Dirección de Correo Electrónico:';

const TEXT_NEW_INTRO = 'Por favor, complete la siguiente información para el nuevo Correo Electrónico';
const TEXT_EDIT_INTRO = 'Por favor, realice los cambios necesarios';
const TEXT_DELETE_INTRO = '¿Está seguro de que desea eliminar este Correo Electrónico?';

const TEXT_DATE_ADDED = 'Fecha de Creación: %s';
const TEXT_LAST_MODIFIED = 'Última Modificación: %s';

const TEXT_DISPLAY_NUMBER_OF_OUTGOING = 'Mostrando <b>%s</b> a <b>%s</b> de <b>%s</b> Plantillas de Correo Electrónico';
const IMAGE_VIEW_EMAIL = 'Ver Este Correo Electrónico';

$available_merge_tags = ['{{FNAME}}' => 'Nombre',
                         '{{LNAME}}' => 'Apellido',
                         '{{EMAIL}}' => 'Dirección de Correo Electrónico'];

const GET_HELP_LINK = 'https://phoenixcart.org/phoenixcartwiki/index.php?title=Queued_Emails';
const GET_ADDONS_LINKS = [ADDONS_COMMERCIAL => 'https://phoenixcart.org/forum/app.php/addons/commercial/queued_emails-48',];
