<?php
/**
 * WR-Panel
 *
 * @version 1.0.11
 * @author Miller P. Magalhães
 * @link http://www.millerdev.com.br
 *
 */
global $logsPainel;
?>
<table class="mws-table">
  <thead>
    <tr>
      <th>Login</th>
      <th>Log</th>
      <th>Dia</th>
      <th>Hora</th>
      <th>IP</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($logsPainel as $logs) { ?>
      <tr>
        <td><?= $logs['login_usuario'] ?></td>
        <td><?= $logs['log_registrado'] ?></td>
        <td><?= formata_data_reverso($logs['data']) ?></td>
        <td><?= $logs['hora'] ?></td>
        <td><?= $logs['ip_registrado'] ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>