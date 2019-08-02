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

define('MODULE_ADMIN_CURRENCIES_CURRENCYLAYER_TITLE', 'Currency Layer');
define('MODULE_ADMIN_CURRENCIES_CURRENCYLAYER_DESCRIPTION', 'Actualizar monedas a través de la API CurrencyLayer.<div class="secWarning">Requiere una clave API de https://currencylayer.com</div>');

// good
define('MODULE_ADMIN_CURRENCIES_CURRENCYLAYER_CURRENCIES_UPDATED', 'El tipo de cambio para %s se ha actualizado con éxito a través de Currency Layer.');

// error codes
define('CURRENCYLAYER_ERROR_404', 'Se ha solicitado un recurso que no existe.');
define('CURRENCYLAYER_ERROR_101', 'No ha proporcionado una clave de acceso o la clave de acceso noes válida.');
define('CURRENCYLAYER_ERROR_103', 'Se ha solicitado una función API inexistente.');
define('CURRENCYLAYER_ERROR_104', 'El Plan de suscripción ha sido alcanzado o superado.');
define('CURRENCYLAYER_ERROR_105', 'El plan de suscripción no admite la función API solicitada.');
define('CURRENCYLAYER_ERROR_106', 'La consulta no ha devuelto ningún resultado.');
define('CURRENCYLAYER_ERROR_102', 'La cuenta no está activa. Por favor, póngase en contacto con el servicio de atención al cliente de CurrencyLayer.');
define('CURRENCYLAYER_ERROR_201', 'Se ha especificado una moneda de origen no válida.');
define('CURRENCYLAYER_ERROR_202', 'Se ha especificado uno o más códigos de moneda inválidos.');
define('CURRENCYLAYER_ERROR_301', 'No se ha especificado ninguna fecha.[historical]');
define('CURRENCYLAYER_ERROR_302', 'Se ha especificado una fecha inválida. [historical, convert]');
define('CURRENCYLAYER_ERROR_401', 'Se ha especificado una propiedad \'de\' inválida. [convert]');
define('CURRENCYLAYER_ERROR_402', 'Se ha especificado una propiedad \'a\' inválida. [convert]');
define('CURRENCYLAYER_ERROR_403', 'Se ha especificado ninguna o una propiedad \'cantidad\' no válida. [convert]');
define('CURRENCYLAYER_ERROR_501', 'No se ha especificado un período de tiempo [timeframe, change].');
define('CURRENCYLAYER_ERROR_502', 'Se ha una propiedad \'start_date\' inválida. [timeframe, change]');
define('CURRENCYLAYER_ERROR_503', 'Se ha una propiedad \'end_date\' inválida. [timeframe, change]');
define('CURRENCYLAYER_ERROR_504', 'Se ha especificado un período de tiempo inválido. [timeframe, change]');
define('CURRENCYLAYER_ERROR_505', 'El período de tiempo especificado por el usuario es demasiado largo, superando los 365 días');
