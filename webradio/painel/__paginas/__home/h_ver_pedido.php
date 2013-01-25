<?php
global $db;
/**
 * Vizualizar Pedido
 */
if ($_REQUEST['atendido']) {
  $idpedido = $_REQUEST['idpedido'];
  if ($db->Query("UPDATE `pedidos` SET `status` = '0' WHERE `id_pedido` = {$idpedido}")) {
    ?>
    <div class="mws-form-message success">
      Pedido Atendido! Aguarde...
    </div>
    <?php
    exit;
  } else {
    echo "<p>Query Failed</p>";
  }
}
if ($_REQUEST['idpedido']) {
  $idpedido = $_REQUEST['idpedido'];
  if ($db->Query("SELECT * FROM `pedidos` WHERE id_pedido = {$idpedido}")) {
    $verPedido = $db->RecordsArray();
  } else {
    echo "<p>Query Failed</p>";
  }
}
?>
<b>
  Pedido de: <span style="color:#5F9FE0;"><?= $verPedido[0]['nome']; ?> </span><br/>
  Cidade/Estado: <span style="color:#5F9FE0;"><?= $verPedido[0]['cidadeestado']; ?></span>
  <br/><br/>
  Pedido: <div class="mws-inset" style="padding: 5px;color:#5F9FE0;"><?= $verPedido[0]['pedido']; ?>
  </div>
</b>

