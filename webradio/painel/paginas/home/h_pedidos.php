<?php
/**
 * WR-Panel
 *
 * @version 1.0.11
 * @author Miller P. Magalhães
 * @link http://www.millerdev.com.br
 *
 */
global $db;
global $pedidos;

/**
 * Atualiza status do painel de Pedidos
 */
if ($_REQUEST['ativarpainel']) {
  if ($db->Query("UPDATE `painel_pedidos` SET `status` = '1' WHERE `painel_pedidos`.`id` =1;")) {
    $db->Query("INSERT INTO `registro_de_logs` SET
                `id_usuario` = ".$_SESSION['IdUsuario'].",
                `log_registrado` = 'O painel foi ativado.',
                 data = '".date('Y-m-d')."',
                 hora = '".date('H:i:s')."',
                `ip_registrado` = '".$_SERVER["REMOTE_ADDR"]."',
                `login_usuario` = '".$_SESSION['LoginUsuario']."'
             ");
    $ativado = 1;
  } else {
    echo "<p>Query Failed</p>";
  }
}

if ($_REQUEST['desativarpainel']) {
  if ($db->Query("UPDATE `painel_pedidos` SET `status` = '0' WHERE `painel_pedidos`.`id` =1")) {
    $db->Query("INSERT INTO `registro_de_logs` SET
                `id_usuario` = ".$_SESSION['IdUsuario'].",
                `log_registrado` = 'O painel foi desativado.',
                 data = '".date('Y-m-d')."',
                 hora = '".date('H:i:s')."',
                `ip_registrado` = '".$_SERVER["REMOTE_ADDR"]."',
                `login_usuario` = '".$_SESSION['LoginUsuario']."'
             ");
    $desativado = 1;
  } else {
    echo "<p>Query Failed</p>";
  }
}

if ($_REQUEST['limparpainel']) {
  if ($db->Query("UPDATE `pedidos` SET `visivel` = '0' WHERE `visivel` =1 AND status = 0")) {
    $db->Query("INSERT INTO `registro_de_logs` SET
                `id_usuario` = ".$_SESSION['IdUsuario'].",
                `log_registrado` = 'O painel foi limpo.',
                 data = '".date('Y-m-d')."',
                 hora = '".date('H:i:s')."',
                `ip_registrado` = '".$_SERVER["REMOTE_ADDR"]."',
                `login_usuario` = '".$_SESSION['LoginUsuario']."'
             ");
    $limparpainel = 1;
  } else {
    echo "<p>Query Failed</p>";
  }
}
?>
<div class="mws-panel-toolbar top clearfix">
  <ul>
    <li><a href="javascript: void(0);" onclick="load_wr('?paginas=h_pedidos&local=paginas/home&ativarpainel=1', 'pedidos', 'GET');reloadPedidos();" class="mws-ic-16 ic-accept">Ativar</a></li>
    <li><a href="javascript: void(0);" onclick="load_wr('?paginas=h_pedidos&local=paginas/home&desativarpainel=1', 'pedidos', 'GET');reloadPedidos();" class="mws-ic-16 ic-cross">Desativar</a></li>
    <li><a href="javascript: void(0);" onclick="load_wr('?paginas=h_pedidos&local=paginas/home&limparpainel=1', 'pedidos', 'GET');reloadPedidos();" class="mws-ic-16 ic-trash">Limpar Painel</a></li>
    <li><a href="javascript: void(0);" onclick="load_wr('?paginas=h_pedidos&local=paginas/home', 'pedidos', 'GET');" class="mws-ic-16 ic-arrow-refresh">Atualizar</a></li>
  </ul>
</div>
<?php if ($ativado) { ?>
  <div class="mws-form-message success">
    Painel Ativado!
  </div>
  <?php
  exit;
}

if ($desativado) {
  ?>
  <div class="mws-form-message warning">
    Painel Desativado!
  </div>
  <?php
  exit;
}

if ($limparpainel) {
  ?>
  <div class="mws-form-message info">
    Painel de Pedidos Limpo!
  </div>
  <?php
  exit;
}
if (status_painel == 0) {
  ?>
  <div class ="mws-form-message warning">
    Painel Desativado!
  </div>
  <?php
  exit;
} else {
  if (empty($pedidos)) {
    ?>
    <div class="mws-form-message warning">
      Sem Pedidos
    </div>
    <?php
    exit;
  }
}
?>
<?php
if (!empty($pedidos)) {
  ?>
  <table class="mws-table mws-datatable-fn" id="tabelapedidos">
    <thead>
      <tr>
        <th class="sorting_desc">Nº Pedido</th>
        <th>Nome</th>
        <th>Cidade/Estado</th>
        <th>IP</th>
        <th>Status</th>
        <th>Opções</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($pedidos as $row) {
        if ($row['status'] == 1) {
          $status = "Não Atendido";
          $class = "error";
        } else {
          $status = "Atendido";
          $class = "success";
        }
        ?>
        <tr>
          <td><?= $row['id_pedido']; ?></td>
          <td><?= $row['nome']; ?></td>
          <td><?= $row['cidadeestado']; ?></td>
          <td><?= $row['ip']; ?></td>
          <td class="mws-form-message <?= $class; ?>" style="background-image: none; color: black;"><?= $status; ?></td>
          <td><a href="javascript: void(0);" class="mws-button red small" id="mws-jui-dialog-btn-teste" onclick="verPedido(<?= $row['id_pedido']; ?>);">Ver</a></td>
        </tr>
      <?php }
      ?>
    </tbody>
  </table>
  <div id="vizualizarpedido">
    <div id="verpedidotext">

    </div>
  </div>
  <?php
}
?>