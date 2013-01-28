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
          <label>URL Validation</label>
          <div class="mws-form-item large">
            <input type="text" name="urlField" class="mws-textinput required url" />
          </div>
        </div>
        <div class="mws-form-row">
          <label>Digit Validation</label>
          <div class="mws-form-item large">
            <input type="text" name="ageField" class="mws-textinput required digits" />
          </div>
        </div>
        <div class="mws-form-row">
          <label>Select Box Validation</label>
          <div class="mws-form-item large">
            <select class="required" name="selectBox">
              <option></option>
              <option>Option 1</option>
              <option>Option 3</option>
              <option>Option 4</option>
              <option>Option 5</option>
            </select>
          </div>
        </div>
      </div>
      <div class="mws-button-row">
        <input type="submit" class="mws-button red" />
      </div>
    </form>

  </div>
</div>