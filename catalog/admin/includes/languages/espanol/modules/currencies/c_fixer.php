<?php
/*
  Copyright (c) 2018, G Burton
  All rights reserved.

  Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

  1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

  2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

  3. Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.

  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

define('MODULE_ADMIN_CURRENCIES_FIXER_TITLE', 'Fixer');
define('MODULE_ADMIN_CURRENCIES_FIXER_DESCRIPTION', 'Actualizar monedas a través de la API Fixer.<div class=\'secWarning\'>Requiere una clave API de https://fixer.io</div>');

// good
define('MODULE_ADMIN_CURRENCIES_FIXER_CURRENCIES_UPDATED', 'El tipo de cambio para %s se ha actualizado con éxito a través de Fixer.');

// error codes
define('FIXER_ERROR_404', 'El recurso solicitado no existe.');
define('FIXER_ERROR_101', 'No se ha especificado una clave de API o se ha especificado una clave de API no válida.');
define('FIXER_ERROR_103', 'El punto final de la API solicitada no existe.');
define('FIXER_ERROR_104', 'Se ha alcanzado la cantidad máxima permitida de solicitudes API mensuales, es posible que deba actualizar su plan.');
define('FIXER_ERROR_105', 'El plan de suscripción actual no es compatible con este punto final API, es posible que deba actualizar su plan.');
define('FIXER_ERROR_106', 'La solicitud actual no ha devuelto ningún resultado.');
define('FIXER_ERROR_102', 'La cuenta de la que proviene esta solicitud de API está inactiva.');
define('FIXER_ERROR_201', 'Se ha introducido una moneda base no válida.');
define('FIXER_ERROR_202', 'Se han especificado uno o más símbolos inválidos.');
define('FIXER_ERROR_301', 'No se ha especificado ninguna fecha. [historical]');
define('FIXER_ERROR_302', 'Se ha especificado una fecha inválida. [historical, convert]');
define('FIXER_ERROR_403', 'Se ha especificado ninguna cantidad o una cantidad no válida. [convert]');
define('FIXER_ERROR_501', 'Se ha especificado ningun período de tiempo o un período de tiempo no válido. [timeseries]');
define('FIXER_ERROR_502', 'Se ha especificado ninguna o una fecha de comienzo \'start_date\' no válida. [timeseries, fluctuation]');
define('FIXER_ERROR_503', 'Se ha especificado ninguna o una fecha final \'end_date\' no válida. [timeseries, fluctuation]');
define('FIXER_ERROR_504', 'Se ha especificado un período de tiempo no válido. [timeseries, fluctuation]');
define('FIXER_ERROR_505', 'El período de tiempo especificado es demasiado largo, superando los 365 días. [timeseries, fluctuation]');
