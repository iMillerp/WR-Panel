<?php
/**
 * WR-Panel
 *
 * @version 1.0.15
 * @author Miller P. Magalhães
 * @link http://www.millerdev.com.br
 *
 */
?>
<!-- Necessary markup, do not remove -->
<div id="mws-sidebar-stitch"></div>
<div id="mws-sidebar-bg"></div>
<div id="mws-sidebar-stitch"></div>
<div id="mws-sidebar-bg"></div>
<!-- Sidebar Wrapper -->
<div id="mws-sidebar">
  <!-- Search Box -->
  <div id="mws-searchbox" class="mws-inset">
  </div>
  <!-- Main Navigation -->
  <div id="mws-navigation">
    <ul>
      <li>
        <a class="mws-i-24 i-home" href="javascript: void(0);" onclick="load_wr('?paginas=home&local=paginas', 'container', 'GET'); load_wr('?paginas=h_esta&local=paginas/home', 'esta', 'GET'); load_wr('?paginas=h_pedidos&local=paginas/home', 'pedidos', 'GET'); load_wr('?paginas=h_u_logs&local=paginas/home', 'ultimoslogs', 'GET'); load_wr('?paginas=h_users_on_panel&local=paginas/home', 'onlinepanel', 'GET');">Dashboard</a></li>
      <li>
        <a class="mws-i-24 i-cog" href="#">Configurações</a>
        <ul class="closed">
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=config_panel&local=paginas/configs', 'container', 'GET');">Config. Painel</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=config_license&local=paginas/configs', 'container', 'GET');">Config. Licença</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=config_database&local=paginas/configs', 'container', 'GET');">Config. Database</a></li>
        </ul>
      </li>
      <li>
        <a class="mws-i-24 i-radio" href="#">Streaming</a>
        <ul class="closed">
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=stream_config_conexao&local=paginas/streaming', 'container', 'GET');">Config. Conexão</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=stream_dados_transmisao&local=paginas/streaming', 'container', 'GET');">Dados Transmisão</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=stream_kikar_autodj&local=paginas/streaming', 'container', 'GET');">Kikar AutoDj</a></li>
        </ul>
      </li>
      <li>
        <a class="mws-i-24 i-users" href="#">Locutores/DJ's</a>
        <ul class="closed">
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=lds_cadastrar&local=paginas/locutores_djs', 'container', 'GET');">Cadastrar</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=lds_config_permissoes&local=paginas/locutores_djs', 'container', 'GET');">Config. Permissões</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=lds_grupos&local=paginas/locutores_djs', 'container', 'GET');">Grupos</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=lds_todos&local=paginas/locutores_djs', 'container', 'GET');">Gerenciar Todos</a></li>
        </ul>
      </li>
      <li>
        <a class="mws-i-24 i-users-2" href="#">Usuarios Clube</a>
        <ul class="closed">
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=users_cadastrar&local=paginas/usuarios', 'container', 'GET'); cadastroUsers();">Cadastrar</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=users_editar_excluir&local=paginas/usuarios', 'container', 'GET');">Editar/Excluir</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=users_todos&local=paginas/usuarios', 'container', 'GET');">Gerenciar Todos</a></li>
        </ul>
      </li>
      <li><a class="mws-i-24 i-favorite mws-tooltip-s" href="#" original-title="Em Desenvolvimento">Páginas</a>
        <ul class="closed">
          <li><a href="#">Config. Categorias</a></li>
          <li><a href="#">Exluir/Editar</a></li>
          <li><a href="#">Ver Todas</a></li>
        </ul>
      </li>
      <li><a class="mws-i-24 i-book" href="#">Noticias</a>
        <ul class="closed">
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=nt_cadastrar&local=paginas/noticias', 'container', 'GET');">Cadastrar</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=nt_config_categorias&local=paginas/noticias', 'container', 'GET');">Config. Categorias</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=nt_excluir_editar&local=paginas/noticias', 'container', 'GET');">Exluir/Editar</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=nt_todas&local=paginas/noticias', 'container', 'GET');">Ver Todas</a></li>
        </ul>
      </li>
      <li><a class="mws-i-24 i-megaphone" href="#">Destaques</a>
        <ul class="closed">
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=dts_registrar&local=paginas/destaques', 'container', 'GET');">Cadastrar</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=dts_excluir_editar&local=paginas/destaques', 'container', 'GET');">Exluir/Editar</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=dts_todos&local=paginas/destaques', 'container', 'GET');">Ver Todos</a></li>
        </ul>
      </li>
      <li><a class="mws-i-24 i-download-to-computer" href="#">Downloads</a>
        <ul class="closed">
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=dow_cadastrar&local=paginas/downloads', 'container', 'GET');">Cadastrar</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=dow_excluir_editar&local=paginas/downloads', 'container', 'GET');">Exluir/Editar</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=dow_todos&local=paginas/downloads', 'container', 'GET');">Ver Todos</a></li>
        </ul>
      </li>
      <li><a class="mws-i-24 i-favorite mws-tooltip-s" href="#" original-title="Em Desenvolvimento">Agenda</a>
        <ul class="closed">
          <li><a href="#">Cadastrar</a></li>
          <li><a href="#">Exluir/Editar</a></li>
          <li><a href="#">Ver Todos</a></li>
        </ul>
      </li>
      <li><a class="mws-i-24 i-plus" href="#">Mais Pedidas</a>
        <ul class="closed">
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=mp_cadastrar&local=paginas/mais_pedidas', 'container', 'GET');">Cadastrar</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=mp_excluir_editar&local=paginas/mais_pedidas', 'container', 'GET');">Exluir/Editar</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=mp_todas&local=paginas/mais_pedidas', 'container', 'GET');">Ver Todos</a></li>
        </ul>
      </li>
      <li><a class="mws-i-24 i-youtube" href="#">Video Clipes</a>
        <ul class="closed">
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=vc_cadastrar&local=paginas/video_clipes', 'container', 'GET');">Cadastrar</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=vc_excluir_editar&local=paginas/video_clipes', 'container', 'GET');">Exluir/Editar</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=vc_todos&local=paginas/video_clipes', 'container', 'GET');">Ver Todos</a></li>
        </ul>
      </li>
      <li><a class="mws-i-24 i-favorite mws-tooltip-s" href="#" original-title="Em Desenvolvimento">Lançamentos</a>
        <ul class="closed">
          <li><a href="#">Cadastrar</a></li>
          <li><a href="#">Exluir/Editar</a></li>
          <li><a href="#">Ver Todos</a></li>
        </ul>
      </li>
      <li><a class="mws-i-24 i-chart-8" href="#">Enquetes</a>
        <ul class="closed">
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=eq_cadastrar&local=paginas/enquetes', 'container', 'GET');">Cadastrar</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=eq_excluir_editar&local=paginas/enquetes', 'container', 'GET');">Exluir/Editar</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=eq_todas&local=paginas/enquetes', 'container', 'GET');">Ver Todas</a></li>
        </ul>
      </li>
      <li><a class="mws-i-24 i-link" href="#">Publicidade</a>
        <ul class="closed">
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=pb_cadastrar&local=paginas/publicidade', 'container', 'GET');">Cadastrar</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=pb_config_categorias&local=paginas/publicidade', 'container', 'GET');">Config. Categorias</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=pb_excluir_editar&local=paginas/publicidade', 'container', 'GET');">Exluir/Editar</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=pb_todas&local=paginas/publicidade', 'container', 'GET');">Ver Todas</a></li>
        </ul>
      </li>
      <li><a class="mws-i-24 i-tools" href="#">Logs</a>
        <ul class="closed">
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=lg_view&local=paginas/logs', 'container', 'GET');">Ver Logs</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=lg_backup&local=paginas/logs', 'container', 'GET');">Backup de logs</a></li>
          <li><a href="javascript: void(0);" onclick="load_wr('?paginas=lg_clear&local=paginas/logs', 'container', 'GET');">Limpar Logs</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <!-- End Navigation -->
  <div id="mws-searchbox" class="mws-inset" style="margin-top: 10px;">
  </div>
</div>