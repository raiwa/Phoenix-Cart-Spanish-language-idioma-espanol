<?php
/*
* $Id: stripe_sca.php
* $Loc: /includes/languages/english/modules/payment/
*
* Name: StripeSCA
* Version: 1.70
* Release Date: 2025-03-02
* Author: Rainer Schmied
* 	 phoenixcartaddonsaddons.com / raiwa@phoenixcartaddons.com
*
* License: Released under the GNU General Public License
*
* Comments: Author: [Rainer Schmied @raiwa]
* Author URI: [www.phoenixcartaddons.com]
* 
* CE Phoenix, E-Commerce made Easy
* https://phoenixcart.org
* 
* Copyright (c) 2021 Phoenix Cart
* 
* 
*/
  const MODULE_PAYMENT_STRIPE_SCA_TEXT_TITLE = 'Stripe SCA';
  const MODULE_PAYMENT_STRIPE_SCA_TEXT_PUBLIC_TITLE = 'Tarjeta de crédito (Stripe SCA)';
  const MODULE_PAYMENT_STRIPE_SCA_TEXT_DESCRIPTION = '<i class="fas fa-external-link-alt me-2"></i><a href="https://www.stripe.com" target="_blank" rel="noopener">Visitar sitio web de Stripe</a>';

  const MODULE_PAYMENT_STRIPE_SCA_ERROR_ADMIN_CURL = 'Este módulo requiere que cURL esté habilitado en PHP y no se cargará hasta que esté habilitado en este servidor web.';
  const MODULE_PAYMENT_STRIPE_SCA_ERROR_ADMIN_CONFIGURATION = 'Este módulo no se cargará hasta que se configuren los parámetros de Clave Pública y Clave Secreta. Por favor, edite y configure los ajustes de este módulo.';

  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_STATUS_TITLE = 'Habilitar módulo Stripe SCA';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_STATUS_DESC = '¿Desea aceptar pagos Stripe v3?';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SERVER_TITLE = 'Servidor de transacciones';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SERVER_DESC = 'Realizar transacciones en el servidor de producción o en el servidor de pruebas.';

  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_PUB_TITLE = 'Clave API pública en vivo';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_PUB_DESC = 'La clave API pública de la cuenta de Stripe para usar en transacciones en producción.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_SECRET_TITLE = 'Clave API secreta en vivo';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_SECRET_DESC = 'La clave API secreta de la cuenta de Stripe para usar con la clave pública en vivo.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_WEBHOOK_TITLE = 'Secreto de firma del webhook en vivo';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_WEBHOOK_DESC = 'El secreto de firma del webhook de la cuenta de Stripe que creó para escuchar eventos de `payment_intent.succeeded`.';

  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_PUB_TITLE = 'Clave API pública de prueba';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_PUB_DESC = 'La clave API pública de la cuenta de Stripe para usar en pruebas.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_SECRET_TITLE = 'Clave API secreta de prueba';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_SECRET_DESC = 'La clave API secreta de la cuenta de Stripe para usar con la clave pública de prueba.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_WEBHOOK_TITLE = 'Secreto de firma del webhook de prueba';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_WEBHOOK_DESC = 'El secreto de firma del webhook de la cuenta de Stripe que creó para escuchar eventos de `payment_intent.succeeded`.';

  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TOKENS_TITLE = 'Crear tokens';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TOKENS_DESC = '¿Crear y almacenar tokens para que los clientes puedan reutilizar sus tarjetas en futuras compras?';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_CARD_DATA_TITLE = 'Usar entrada de datos de tarjeta en una sola línea';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_CARD_DATA_DESC = 'Usar un único campo de entrada para los datos de la tarjeta si está en "Verdadero" o 3 campos separados si está en "Falso".';

  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LOG_TITLE = 'Registrar eventos';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LOG_DESC = '¿Registrar llamadas a funciones de Stripe?';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_METHOD_TITLE = 'Método de transacción';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_METHOD_DESC = 'El método de procesamiento a utilizar para cada transacción.';

  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_NEW_ORDER_TITLE = 'Establecer estado de nuevo pedido';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_NEW_ORDER_DESC = 'Definir el estado de los pedidos creados con este módulo de pago.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_PROCESSED_TITLE = 'Establecer estado de pedido procesado';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_PROCESSED_DESC = 'Definir el estado de los pedidos procesados correctamente con este módulo de pago.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TRANSACTION_TITLE = 'Estado de orden de transacción';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TRANSACTION_DESC = 'Incluir información de la transacción en este nivel de estado del pedido.';

  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_ZONE_TITLE = 'Zona de pago';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_ZONE_DESC = 'Si se selecciona una zona, solo habilitar este método de pago para esa zona.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SSL_TITLE = 'Verificar certificado SSL';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SSL_DESC = '¿Verificar el certificado SSL del servidor de la pasarela en la conexión?';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_PROXY_TITLE = 'Servidor proxy';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_PROXY_DESC = 'Enviar solicitudes API a través de este servidor proxy. (host:puerto, ej: 123.45.67.89:8080 o proxy.ejemplo.com:8080)';

  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_EMAIL_TITLE = 'Dirección de correo electrónico de depuración';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_EMAIL_DESC = 'Todos los parámetros de una transacción inválida serán enviados a esta dirección de correo electrónico.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_DAYS_DELETE_TITLE = 'Días de espera para eliminar pedidos de Stripe en preparación';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_DAYS_DELETE_DESC = '¿Después de cuántos días deben eliminarse automáticamente los pedidos no finalizados de Stripe? Dejar vacío para deshabilitar.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SORT_TITLE = 'Orden de visualización';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SOR_DESC = 'Orden de visualización. El menor número no cero se muestra primero.';

  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_NEW = 'Introducir una nueva tarjeta';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_OWNER = 'Nombre del titular de la tarjeta';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_TYPE = 'Número de tarjeta > luego Fecha de caducidad > luego 3 números traseros (CVC)';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_NUMBER = 'Número de tarjeta';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_EXPIRY = 'Fecha de caducidad (MM/AA)';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_CVC = '3 números traseros (CVC)';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_SAVE = '¿Guardar tarjeta para la próxima compra?';

  const MODULE_PAYMENT_STRIPE_SCA_MISSING_INTENT = 'Falta el ID de intención';
  const MODULE_PAYMENT_STRIPE_SCA_MISSING_CUSTOMER_TOKEN = 'Falta el token de cliente';
  const MODULE_PAYMENT_STRIPE_SCA_MISSING_CARD_FOR_TOKEN = 'No se encontraron detalles de la tarjeta para el token ';

  const MODULE_PAYMENT_STRIPE_SCA_WEBHOOK_PARAMETER = 'Valor de parámetro inesperado recibido';
  const MODULE_PAYMENT_STRIPE_SCA_SECRET_ERROR = 'Secreto de firma del webhook no válido';
  const MODULE_PAYMENT_STRIPE_SCA_WEBHOOK_SERVER = 'Error del servidor - revise los registros';

  const MODULE_PAYMENT_STRIPE_SCA_ERROR_TITLE = 'Se ha producido un error al procesar su tarjeta de crédito';
  const MODULE_PAYMENT_STRIPE_SCA_ERROR_GENERAL = 'Por favor, inténtelo de nuevo y si los problemas persisten, pruebe otro método de pago.';
  const MODULE_PAYMENT_STRIPE_SCA_ERROR_CARDSTORED = 'No se pudo encontrar la tarjeta almacenada. Por favor, inténtelo de nuevo y si los problemas persisten, pruebe otro método de pago.';

  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_LINK_TITLE = 'Probar conexión con el servidor API';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_TITLE = 'Prueba de conexión con el servidor API';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_GENERAL_TEXT = 'Probando conexión con el servidor...';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_BUTTON_CLOSE = 'Cerrar';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_TIME = 'Tiempo de conexión:';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_SUCCESS = '¡Éxito!';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_FAILED = '¡Error! Revise la configuración de verificación del certificado SSL e inténtelo de nuevo.';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_ERROR = 'Se ha producido un error. Por favor, actualice la página, revise su configuración e inténtelo de nuevo.';

  const MODULE_PAYMENT_STRIPE_SCA_PROCESSING_TEXT = 'Gracias. Estamos procesando su pedido...';
  const MODULE_PAYMENT_STRIPE_SCA_FINALIZE_TEXT = 'Finalizar y realizar pago';
