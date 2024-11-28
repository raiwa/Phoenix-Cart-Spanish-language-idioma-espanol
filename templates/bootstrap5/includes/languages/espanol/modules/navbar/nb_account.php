<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart

  Released under the GNU General Public License
*/

  const MODULE_NAVBAR_ACCOUNT_TITLE = 'Cuenta';
  const MODULE_NAVBAR_ACCOUNT_DESCRIPTION = 'Mostrar la cuenta del cliente en el menú de navegación.';

  const MODULE_NAVBAR_ACCOUNT_LOGGED_OUT = <<<'LI'
  <i title="Mi Cuenta" class="far fa-user fa-fw fa-xl"></i><span class="d-inline d-sm-none"> Mi Cuenta</span>
LI;

  const MODULE_NAVBAR_ACCOUNT_LOGGED_IN = <<<'LI'
  <span class="position-relative">
    <i title="Mi Cuenta" class="fas fa-user fa-fw fa-xl"></i>
    <span class="d-none d-sm-inline position-absolute top-0 start-100 translate-middle badge">
      <i class="fas fa-check fa-2xl text-info"></i>
    </span>
  </span>
  <span class="d-inline d-sm-none">%s, you are logged in</span>
LI;

  const MODULE_NAVBAR_ACCOUNT_LOGIN = '<i class="fas fa-sign-in-alt fa-fw fa-xl"></i> Entrar';
  const MODULE_NAVBAR_ACCOUNT_LOGOFF = '<i class="fas fa-sign-out-alt fa-fw fa-xl"></i> Salir';
  const MODULE_NAVBAR_ACCOUNT = 'Mi Perfil';
  const MODULE_NAVBAR_ACCOUNT_HISTORY = 'Mis Pedidos';
  const MODULE_NAVBAR_ACCOUNT_EDIT = 'Mis Detalles';
  const MODULE_NAVBAR_ACCOUNT_ADDRESS_BOOK = 'Mis Direcciones';
  const MODULE_NAVBAR_ACCOUNT_PASSWORD = 'Mi Contraseña';
  const MODULE_NAVBAR_ACCOUNT_REGISTER = '<i class="fas fa-pencil-alt fa-fw fa-xl"></i> Registrarse';
