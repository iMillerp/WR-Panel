<?php
/**
 * WR-Panel
 *
 * @version 1.0.11
 * @author Miller P. Magalhães
 * @link http://www.millerdev.com.br
 *
 */
global $usuarios;
?>
<div class="mws-panel grid_8 mws-collapsible">
  <!-- Panel Header -->
  <div class="mws-panel-header">
    <span>
      Usuarios Clube - Todos
    </span>
    <div class="mws-collapse-button mws-inset"><span></span>
    </div>
  </div>
  <!-- Panel Body -->
  <div class="mws-panel-body">
    <table class="mws-table mws-datatable-fn" id="tabelapedidos">
      <thead>
        <tr>
          <th>#ID Usuario</th>
          <th>Nome</th>
          <th>Login</th>
          <th>Status</th>
          <th>Ultimo IP</th>
          <th>Cargo</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($usuarios as $row) {
          ?>
          <tr>
            <td><?= $row['id_usuario']; ?></td>
            <td><?= $row['nome']; ?></td>
            <td><?= $row['login']; ?></td>
            <td><?= $row['status']; ?></td>
            <td><?= $row['ip_usuario']; ?></td>
            <td><?= $row['cargo']; ?></td>
            <td><a href="javascript: void(0);" class="mws-button blue small" id="mws-jui-dialog-btn-teste" onclick="editarUsuarioDialog('<?=$row['login'];?>','editar')">Editar</a> <a href="javascript: void(0);" class="mws-button red small" id="mws-jui-dialog-btn-teste" onclick="editarUsuarioDialog('<?=$row['login'];?>','excluir')">Excluir</a></td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>