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
<div class="mws-panel grid_4 mws-collapsible">
  <!-- Panel Header -->
  <div class="mws-panel-header">
    <span>
      Usuarios Clube - Cadastrar
    </span>
    <div class="mws-collapse-button mws-inset"><span></span>
    </div>
  </div>
  <!-- Panel Body -->
  <div class="mws-panel-body">

    <form id="mws-validate" class="mws-form" method="post" action="http://www.malijuwebshop.com/themes/mws-admin/form_elements.html">
      <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
      <div class="mws-form-inline">
        <div class="mws-form-row">
          <label>Login:</label>
          <div class="mws-form-item large">
            <input type="text" name="login" class="mws-textinput required" />
          </div>
        </div>
        <div class="mws-form-row">
          <label>Senha:</label>
          <div class="mws-form-item large">
            <input type="password" name="password" class="mws-textinput required password" />
          </div>
        </div>
        <div class="mws-form-row">
          <label>Nome:</label>
          <div class="mws-form-item large">
            <input type="text" name="nome" class="mws-textinput required" />
          </div>
        </div>
        <div class="mws-form-row">
          <label>Apelido:</label>
          <div class="mws-form-item large">
            <input type="text" name="apelido" class="mws-textinput required" />
          </div>
        </div>
        <div class="mws-form-row">
          <label>Email:</label>
          <div class="mws-form-item large">
            <input type="text" name="email" class="mws-textinput required email" />
          </div>
        </div>
      </div>
      <div class="mws-form-row">
        <label>Foto:</label>
        <div class="mws-form-item large">
          <input type="file" name="foto" class="mws-textinput" />
        </div>
      </div>
      <div class="mws-form-row">
        <label>Cargo:</label>
        <div class="mws-form-item small">
          <select name="cargo" class="required">
            <option value="0">Usuario Normal</option>
            <option value="1">Locutor</option>
            <option value="2">DJ</option>
            <option value="3">Administrador</option>
          </select>
        </div>
      </div>
      <div class="mws-form-row">
        <label>Data de Nascimento:</label>
        <div class="mws-form-item large">
          <input type="text" name="datanascimento" placeholder="Formato(00/00/0000)" class="mws-textinput required date" />
        </div>
      </div>
      <div class="mws-form-row">
        <label>Telefone:</label>
        <div class="mws-form-item small">
          <input type="text" name="telefone" placeholder="Somente numeros" class="mws-textinput digits" />
        </div>
      </div>
      <div class="mws-form-row">
        <label>Twitter:</label>
        <div class="mws-form-item large">
          <input type="text" name="twitter" placeholder="Ex:http://twitter.com/meunome" class="mws-textinput url" />
        </div>
      </div>
      <div class="mws-form-row">
        <label>Skype:</label>
        <div class="mws-form-item small">
          <input type="text" name="skype" class="mws-textinput" />
        </div>
      </div>
      <div class="mws-form-row">
        <label>Facebook:</label>
        <div class="mws-form-item large">
          <input type="text" name="facebook" placeholder="Ex:http://facebook.com/meunome" class="mws-textinput url" />
        </div>
      </div>        

      <div class="mws-button-row">
        <input type="submit" value="Cadastrar" name="submit" class="mws-button red" />
      </div>
    </form>
  </div> 
</div>