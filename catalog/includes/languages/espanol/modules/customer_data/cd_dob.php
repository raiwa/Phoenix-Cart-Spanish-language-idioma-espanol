<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const MODULE_CUSTOMER_DATA_DOB_TEXT_TITLE = 'Fecha de Nacimiento';
const MODULE_CUSTOMER_DATA_DOB_TEXT_DESCRIPTION = 'Mostrar un campo de fecha de nacimiento en el registro de cliente';

const ENTRY_DOB = 'Fecha de Nacimiento';
const ENTRY_DOB_ERROR = 'Su fecha de nacimiento debe estar en este formato: DD/MM/YYYY (eg 21/05/1970)';
const ENTRY_DOB_TEXT = 'eg 21/05/1970';

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_cd_dob_date_raw($date, $reverse = false) {
  return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
}
