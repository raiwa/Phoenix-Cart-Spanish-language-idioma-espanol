<?php
/*
  $Id: password_forgotten.php 1739 2007-12-20 00:52:16Z hpdl $

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart

  Released under the GNU General Public License
*/

const NAVBAR_TITLE_1 = 'Entrar';
const NAVBAR_TITLE_2 = 'Contraseña olvidada';

const HEADING_TITLE = '¡He olvidado mi contraseña!';

const TEXT_MAIN = 'Si ha olvidado su contraseña, introduzca su dirección de correo electrónico y le enviaremos instrucciones sobre cómo cambiar su contraseña de forma segura.';

const TEXT_PASSWORD_RESET_INITIATED = 'Por favor, compruebe su correo electrónico para obtener instrucciones sobre cómo cambiar su contraseña. Las instrucciones contienen un enlace que sólo es válido durante 24 horas o hasta que su contraseña haya sido actualizada.';

const TEXT_NO_EMAIL_ADDRESS_FOUND = 'Error: Este correo electrónico no figura en nuestros datos, inténtelo de nuevo.';

const EMAIL_PASSWORD_RESET_SUBJECT = STORE_NAME . ' - Nueva contraseña';
const EMAIL_PASSWORD_RESET_BODY = 'Una nueva contraseña ha sido solicitada para su cuenta en ' . STORE_NAME . '.' . "\n\n" . 'Por favor, siga este enlace personal para cambiar la contraseña de forma segura:' . "\n\n" . '%s' . "\n\n" . 'Este enlace será descartado de forma automática después de 24 horas o después de que su contraseña haya sido cambiada.' . "\n\n" . 'Para obtener ayuda con cualquiera de nuestros servicios, por favor escríbanos a: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");

const ERROR_ACTION_RECORDER = 'Error: Ya ha sido enviado un enlace de restablecimiento de contraseña. Vuelve a intentarlo en %s minutos.';

const IMAGE_BUTTON_RESET_PASSWORD = 'Restablecer mi Contraseña';
