<?php
/**
 * WR-Panel
 *
 * @version 1.0.11
 * @author Miller P. Magalhães
 * @link http://www.millerdev.com.br
 *
 */
?>
<div id="mws-header" class="clearfix">
  <!-- Logo Wrapper -->
  <div id="mws-logo-container">
    <div id="mws-logo-wrap">
      <img src="images/temp/logo.png" alt="mws admin" />
    </div>
  </div>

  <!-- User Area Wrapper -->
  <div id="mws-user-tools" class="clearfix">
    <!-- User Messages -->
    <div id="mws-user-message" class="mws-dropdown-menu">
      <a href="#" class="mws-i-24 i-message mws-dropdown-trigger">Mensagens</a>
      <span class="mws-dropdown-notif">0</span>
      <div class="mws-dropdown-box">
        <div class="mws-dropdown-content">
          <ul class="mws-messages">
            <!-- Here goes all the messages -->
          </ul>
          <div class="mws-dropdown-viewall">
            <a href="#">Ver Todas as Mensagens</a>
          </div>
        </div>
      </div>
    </div>

    <!-- User Functions -->
    <div id="mws-user-info" class="mws-inset">
      <div id="mws-user-photo">
        <img src="example/profile.jpg" alt="User Photo" />
      </div>
      <div id="mws-user-functions">
        <div id="mws-username">
          Olá, <?=$_SESSION['NomeUsuario']?>, Seja Bem Vindo ao WR-Panel v1.0
        </div>
        <ul>
          <li><a href="#">Perfil</a></li>
          <li><a href="#">Trocar Senha</a></li>
          <li><a href="?logout=1">Sair</a></li>
        </ul>
      </div>
    </div>
    <!-- End User Funtions -->
  </div>
</div>