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
          <?php echo form_open('painel_controle/alterar/grupo/' .$tb_grupo['id']) ?>
          <!-- Linha 1 -->
          <div class="row">
            <!-- Coluna 1 -->
            <div class="col-md-12">
              <!-- Senha -->
              <div class="form-group has-feedback <?php if (form_error('txt_nome')) {echo " has-error ";};?>">
                <label class="control-label">Senha</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-group"></i>
                  </span>
                  <input type="text" class="form-control" name="txt_nome" 
                  value= "<?php echo $tb_grupo['nome'] ?>">
                </div>
                <?php echo form_error('txt_nome'); ?>
              </div>
              <!-- ./Coluna 1 -->
            </div>
            <!-- ./Linha 1 -->
          </div>

          <div class="row">
            <!-- Coluna 1 -->
            <div class="col-md-12">
              <!-- Senha -->
              <div class="form-group has-feedback <?php if (form_error('txt_nome')) {echo " has-error ";};?>">
                <label class="control-label">Repetir Senha</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-group"></i>
                  </span>
                  <input type="text" class="form-control" name="txt_nome" 
                  value= "<?php echo $tb_grupo['nome'] ?>">
                </div>
                <?php echo form_error('txt_nome'); ?>
              </div>
              <!-- ./Coluna 1 -->
            </div>
            <!-- ./Linha 1 -->
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Enviar</button>
            </div>
            <!-- /.col -->
          </div>
          <?php echo form_close() ?>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

