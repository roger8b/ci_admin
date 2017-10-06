<section class="content">
  <div class="row">
    <div class="col-md-6 col-offset-md-6">
      <div class="box">
        <div class="box-body">
          <?php
// Mostra mensagem de alerta
if (isset($msg_banco)) {
  echo '<div class="' . $msg_banco['tipo'] . '" role="alert">' . $msg_banco['msg'] . '</div>';
}?>
            <?php echo form_open('alterar/usuario/'.$tb_user['id'])  ?>
            <!-- Linha 1 -->
            <div class="row">
              <!-- Coluna 1 -->
              <div class="col-md-12">
                <!-- Nome -->
                <div class="form-group has-feedback <?php if (form_error('txt_nome')) {echo " has-error ";};?>">
                  <label class="control-label">Nome</label>
                  <input type="text" class="form-control" placeholder="Nome Completo" name="txt_nome" value=<?php echo $tb_user['nome'] ?>>
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  <?php echo form_error('txt_nome'); ?>
                </div>
                <!-- ./Coluna 1 -->
              </div>
              <!-- ./Linha 1 -->
            </div>
            <!-- Linha 2 -->
            <div class="row">
              <!-- Coluna 1  -->
              <div class="col-md-12">
                <!-- Email -->
                <div class="form-group has-feedback <?php if (form_error('txt_email')) {echo " has-error ";};?>">
                  <label class="control-label">Email</label>
                  <input type="email" class="form-control" placeholder="Email" name="txt_email" value="<?php echo $tb_user['email'] ?>">
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  <?php echo form_error('txt_email'); ?>
                </div>
                <!-- ./Coluna 1 -->
              </div>
              <!-- ./Linha 2 -->
            </div>
            <!-- Linha 3 -->
            <div class="row">
              <!-- Coluna 1 -->
              <!-- CPF -->
              <div class="col-md-6">
                <div class="form-group has-feedback <?php if (form_error('txt_cpf')) {echo " has-error ";};?>">
                  <label class="control-label">CPF</label>
                  <input id="cpf" type="text" class="form-control" placeholder="CPF" name="txt_cpf" value="<?php echo $tb_user['cpf'] ?>">
                  <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                  <?php echo form_error('txt_cpf'); ?>
                </div>
                <!-- ./Coluna 1 -->
              </div>
              <!-- Coluna 2 -->
              <div class="col-md-6">
                <!-- Numero do CRM -->
                <div class="form-group has-feedback <?php if (form_error('txt_crm')) {echo " has-error ";};?>">
                  <label class="control-label">CRM</label>
                  <input type="text" class="form-control" placeholder="CRM" name="txt_crm" value="<?php echo $tb_user['crm'] ?>">
                  <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                  <?php echo form_error('txt_crm'); ?>
                </div>
                <!-- ./Coluna 2 -->
              </div>
              <!-- ./Linha 3 -->
            </div>
            <!-- Linha 4 -->
            <div class="row">
              <!-- Coluna 1 -->
              <div class="col-md-6">
                <!-- Data de Nascimento -->
                <div class="form-group has-feedback <?php if (form_error('txt_dt_nasc')) {echo " has-error ";};?>">
                  <label class="control-label">Data de Nascimento</label>
                  <input type="date" class="form-control" placeholder="Data de Nascimento" name="txt_dt_nasc" value="<?php echo $tb_user['dt_nasc'] ?>">
                  <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                  <?php echo form_error('txt_dt_nasc'); ?>
                </div>
                <!-- ./Coluna 1 -->
              </div>
              <!-- ./Linha 4 -->
            </div>
            <!-- Linha 5 -->
            
            <!-- Linha 6 -->
            <div class="row">
              <!-- Coluna 1 -->
              <div class="col-md-6">
                <!-- Tipo de Conta -->
                <div class="form-group has-feedback <?php if (form_error('txt_conta')) {echo " has-error ";};?>">
                  <label class="control-label">Tipo de Conta</label>
                  <select class="form-control" placeholder="Grupo" name="txt_conta">
                    <option value="" disabled selected>Tipo de Conta</option>
                    <option value="0" <?php if ($tb_user['tipo']=="0" ) {echo "selected";}?>
                      >Administrador</option>
                    <option value="1" <?php if ($tb_user['tipo']=="1" ) {echo "selected";}?>
                      >Usuário</option>
                  </select>
                  <?php echo form_error('txt_conta'); ?>
                </div>
                <!-- ./Coluna 1 -->
              </div>
              <!-- Coluna 2 -->
              <div class="col-md-6">
                <!-- Grupo de Usuarios -->
                <div class="form-group has-feedback <?php if (form_error('txt_grupo')) {echo " has-error ";};?>">
                  <label  class="control-label">Grupos</label>
                  <select id="select" multiple class="form-control" placeholder="Grupo" name="txt_grupo[]">
                    
                    <?php
                    // Carrega dados da tabela grupos / carrega dados selecionados pelo usuario 
                    $grupo = explode(";", $tb_user['grupo']);
                     foreach ($tb_grupo as $k) {
                      foreach ($grupo as $j) {
                        if($k['id'] == $j){
                          echo "<option selected value= {$k['id']} > {$k['nome']} </option>";
                        } 
                      }
                       echo "<option value= {$k['id']} > {$k['nome']} </option>";
                    }
                     ?>
                     </select>
                  
                  <?php echo form_error('txt_grupo'); ?>
                </div>
                <!-- ./Coluna 2 -->
              </div>
              <!-- ./Linha 6 -->
            </div>
            <div class="row">
              <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat" name="btn_alt" value="Alterar">Enviar</button>
              </div>
              <!-- /.col -->
            </div>
            <?php echo form_close() ?>
        </div>
      </div>
    </div>
  </div>
</section>