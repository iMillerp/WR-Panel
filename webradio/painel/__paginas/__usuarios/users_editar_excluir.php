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
if (isset($_POST['atualizarcadastro'])) {
  $data = formata_data($_POST['datanascimento']);
  $query = "UPDATE `usuarios` SET
            `nome` = '" . $_POST['nome'] . "',
            `apelido` = '" . $_POST['apelido'] . "',
            `cargo` = '" . $_POST['cargo'] . "',
            `datanascimento` = '" . $data . "',
            `telefone` = '" . $_POST['telefone'] . "',
            `twitter` = '" . $_POST['twitter'] . "',
            `skype` = '" . $_POST['skype'] . "',
            `facebook` = '" . $_POST['facebook'] . "',
            `foto` = '" . $_POST['foto'] . "'
            WHERE `login` = '" . $_POST['login'] . "'";
  if ($db->Query($query)) {

  } else {
    echo "<p>Query Failed</p>";
    exit;
  }
  echo '<div class="mws-form-message success">Cadastro Atualizado com Sucesso.<br/>Login: ' . $_POST['login'] . '</div>';
  exit;
}

if (isset($_REQUEST['AtualizarDados'])) {
  if ($db->Query("SELECT * FROM `usuarios` WHERE `login` = '" . $_REQUEST['login'] . "' LIMIT 0 , 1")) {
    if ($db->RowCount() < 1) {
      echo '<div class="mws-form-message error">Falha! <br/> O Usuario: ' . $_POST['login'] . ' não foi encontrado.</div>';
      exit;
    } else {
      $usuarioDados = $db->RecordsArray();
    }
  } else {
    echo "<p>Query Failed</p>";
    exit;
  }
}

if (empty($_REQUEST['login'])) {
  ?>
  <div class="mws-panel grid_4 mws-collapsible" id="cadastroUsuariosClube">
    <!-- Panel Header -->
    <div class="mws-panel-header">
      <span>
        Usuarios Clube - Editar/Excluir
      </span>
      <div class="mws-collapse-button mws-inset"><span></span>
      </div>
    </div>
    <!-- Panel Body -->
    <div class="mws-panel-body">
      <form id="mws-validate" class="mws-form" method="post" action="?paginas=users_editar_excluir&local=__paginas/__usuarios">
        <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
        <div class="mws-form-inline">
          <div class="mws-form-row">
            <label>Informe o Login:</label>
            <div class="mws-form-item small">
              <input type="text" name="login" class="mws-textinput required" />
            </div>
          </div>
          <div class="mws-button-row">
            <input type="submit" value="Excluir" id="excluirUsuario" name="excluirUsuario" class="mws-button red" /> <input type="submit" value="Carregar Dados" id="CadastrarUsers" name="AtualizarDados" class="mws-button blue" />
          </div>
          <div class="mws-form-message info" style="display: none;" id="processando">
            Processando...
          </div>
          <div class="mws-form-message info" style="display: none;" id="processando2">
            Processando...
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php
}
if (isset($_REQUEST['AtualizarDados'])) {
  ?>
  <form id="FormAtualizarCadastro" class="mws-form" method="post" action="?paginas=users_editar_excluir&local=__paginas/__usuarios">
    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
    <div class="mws-form-inline">
      <div class="mws-form-row">
        <label>Login:</label>
        <div class="mws-form-item large">
          <input type="text" name="login" readOnly="readonly" value="<?= $usuarioDados[0]['login'] ?>" class="mws-textinput disabled required" />
        </div>
      </div>
      <div class="mws-form-row">
        <label>Nome:</label>
        <div class="mws-form-item large">
          <input type="text" name="nome" value="<?= $usuarioDados[0]['nome'] ?>" class="mws-textinput required" />
        </div>
      </div>
      <div class="mws-form-row">
        <label>Apelido:</label>
        <div class="mws-form-item large">
          <input type="text" name="apelido" value="<?= $usuarioDados[0]['apelido'] ?>" class="mws-textinput required" />
        </div>
      </div>
      <div class="mws-form-row">
        <label>Email:</label>
        <div class="mws-form-item large">
          <input type="text" name="email" readOnly="readonly" value="<?= $usuarioDados[0]['email'] ?>" class="mws-textinput disabled required email" />
        </div>
      </div>
      <div class="mws-form-row">
        <label>Foto:</label>
        <div class="mws-form-item large">
          <input type="text" name="foto" placeholder="Link da Imagem" value="<?= $usuarioDados[0]['foto'] ?>" class="mws-textinput required url" />
        </div>
      </div>
      <div class="mws-form-row">
        <label>Cargo:</label>
        <div class="mws-form-item small">
          <select name="cargo" class="required">
            <option <?php if ($usuarioDados[0]['cargo'] == 0) echo 'selected="selected"'; ?> value="0">Usuario Normal</option>
            <option <?php if ($usuarioDados[0]['cargo'] == 1) echo 'selected="selected"'; ?> value="1">Locutor</option>
            <option <?php if ($usuarioDados[0]['cargo'] == 2) echo 'selected="selected"'; ?> value="2">DJ</option>
            <option <?php if ($usuarioDados[0]['cargo'] == 3) echo 'selected="selected"'; ?> value="3">Administrador</option>
          </select>
        </div>
      </div>
      <div class="mws-form-row">
        <label>Data de Nascimento:</label>
        <div class="mws-form-item large">
          <input type="text" name="datanascimento" placeholder="Formato(00/00/0000)" value="<?= formata_data_reverso($usuarioDados[0]['datanascimento']); ?>" class="mws-textinput required date" />
        </div>
      </div>
      <div class="mws-form-row">
        <label>Telefone:</label>
        <div class="mws-form-item small">
          <input type="text" name="telefone" placeholder="Somente numeros" value="<?= $usuarioDados[0]['telefone'] ?>" class="mws-textinput digits" />
        </div>
      </div>
      <div class="mws-form-row">
        <label>Twitter:</label>
        <div class="mws-form-item large">
          <input type="text" name="twitter" placeholder="Ex:http://twitter.com/meunome" value="<?= $usuarioDados[0]['twitter'] ?>" class="mws-textinput url" />
        </div>
      </div>
      <div class="mws-form-row">
        <label>Skype:</label>
        <div class="mws-form-item small">
          <input type="text" name="skype" class="mws-textinput" value="<?= $usuarioDados[0]['skype'] ?>" />
        </div>
      </div>
      <div class="mws-form-row">
        <label>Facebook:</label>
        <div class="mws-form-item large">
          <input type="text" name="facebook" placeholder="Ex:http://facebook.com/meunome" value="<?= $usuarioDados[0]['facebook'] ?>" class="mws-textinput url" />
        </div>
      </div>

      <div class="mws-button-row">
        <input type="submit" value="Atualizar Cadastro" id="AtualizarUser" name="atualizarcadastro" class="mws-button blue" />
      </div>
      <div class="mws-form-message info" style="display: none;" id="processandoAtualizarUser">
        Aguarde enquanto o cadastro é realizado.
      </div>
    </div>
  </form>
  <?php
}
if (isset($_POST['excluirUsuarioSim'])) {
  $query = "DELETE FROM `usuarios` WHERE `login` ='" . $_POST['login'] . "'";
  echo $query;
  if ($db->Query($query)) {
    echo '<div class="mws-form-message success">Usuario Excluido com Sucesso.<br/>Login: ' . $_POST['login'] . '</div>';
    exit;
  } else {
    echo "<p>Query Failed</p>";
    exit;
  }
}
if (isset($_REQUEST['excluirUsuario'])) {
  if ($db->Query("SELECT * FROM `usuarios` WHERE `login` = '" . $_REQUEST['login'] . "' LIMIT 0 , 1")) {
    if ($db->RowCount() < 1) {
      echo '<div class="mws-form-message error">Falha! <br/> O Usuario: ' . $_POST['login'] . ' não foi encontrado.</div>';
      exit;
    }
  }
  ?>
  <div class="mws-form-message info" id="ExluirUsuario">
    Deseja realmente excluir este usuario?<br/>
    <form id="FormExcluirUsuario" class="mws-form" method="post" action="?paginas=users_editar_excluir&local=__paginas/__usuarios">
      <input type="hidden" name="login" value="<?= $_REQUEST['login'] ?>">
      <input type="submit" value="Sim" id="excluirUsuarioBtn" name="excluirUsuarioSim" class="mws-button red" />
      <div style="display: none;" id="processandoExcluirUser">
        Processando
      </div>
    </form>
  </div>
<?php } ?>

<div class="mws-panel grid_4 mws-collapsible" id="resutado" style="display:none;">
  <!-- Panel Header -->
  <div class="mws-panel-header">
    <span>
      Usuarios Clube - Editar/Excluir
    </span>
    <div class="mws-collapse-button mws-inset"><span></span>
    </div>
  </div>
  <!-- Panel Body -->
  <div class="mws-panel-body" id="teste">


  </div>
</div>