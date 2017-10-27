<!-- login-box-body -->
<div class="login-box-body">
    <p class="login-box-msg"></p>

    <?php if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
    } ?>

    <?php
    // Mostra mensagem de alerta
    if (isset($msg_banco)) {
        foreach ($msg_banco as $msg) {
            echo $msg;
        }
    }?>

    <?php echo form_open('cadastro/criar') ?>
    <!-- Linha 1 -->
    <div class="row">
        <!-- Coluna 1 -->
        <div class="col-md-12">
            <!-- Nome -->
            <div class="form-group has-feedback <?php if (form_error('txt_nome')) {echo " has-error ";};?>">
                <label class="control-label">Nome</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-user" aria-hidden="true"></i>
                  </span>
                    <input type="text" class="form-control" placeholder="Nome Completo" name="txt_nome" value=<?php echo set_value( 'txt_nome') ?>>
                </div>
                <?php echo form_error('txt_nome'); ?>
            </div>
            <!-- ./Coluna 1 -->
        </div>
        <!-- ./Linha 1 -->
    </div>
    <!-- Linha 2 -->
    <div class="row">
        <!-- Coluna 1 -->
        <div class="col-md-12">
            <!-- Email -->
            <div class="form-group has-feedback <?php if (form_error('txt_email')) {echo " has-error ";};?>">
                <label class="control-label">Email</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                  </span>
                    <input type="email" class="form-control" placeholder="Email" name="txt_email" value=<?php echo set_value( 'txt_email') ?>>
                </div>
                <?php echo form_error('txt_email'); ?>
            </div>
            <!-- ./Coluna 1 -->
        </div>
        <!-- ./Linha 2 -->
    </div>
    <!-- Linha 3 -->
    <div class="row">
        <!-- Coluna 1 -->
        <div class="col-md-12">
            <!-- CPF -->
            <div class="form-group has-feedback <?php if (form_error('txt_cpf')) {echo " has-error ";};?>">
                <label class="control-label">CPF</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-id-card" aria-hidden="true"></i>
                  </span>
                    <input id="cpf" type="text" class="form-control" placeholder="CPF" name="txt_cpf" value=<?php echo set_value( 'txt_cpf') ?>>
                </div>
                <?php echo form_error('txt_cpf'); ?>
            </div>
            <!-- ./Coluna 1 -->
        </div>
        <!-- ./Linha 3 -->
    </div>
    <!-- Linha 4 -->
    <div class="row">
        <!-- Coluna 1 -->
        <div class="col-md-12">
            <!-- CRM -->
            <div class="form-group has-feedback <?php if (form_error('txt_crm')) {echo " has-error ";};?>">
                <label class="control-label">CRM</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-user-md" aria-hidden="true"></i>
                  </span>
                    <input type="text" class="form-control" placeholder="CRM" name="txt_crm" value=<?php echo set_value( 'txt_crm') ?>>
                </div>
                <?php echo form_error('txt_crm'); ?>
            </div>
            <!-- ./Coluna 1 -->
        </div>
        <!-- ./Linha 4 -->
    </div>
    <!-- Linha 5 -->
    <div class="row">
        <!-- Coluna 1 -->
        <div class="col-md-12">
            <!-- Dt_nasc -->
            <div class="form-group has-feedback <?php if (form_error('txt_dt_nasc')) {echo " has-error ";};?>">
                <label class="control-label">Data de Nascimento</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                    <input type="text" id="datepicker" class="form-control" placeholder="Data de Nascimento" name="txt_dt_nasc" value=<?php echo set_value( 'txt_dt_nasc') ?>>
                </div>
                <?php echo form_error('txt_dt_nasc'); ?>
            </div>
            <!-- ./Coluna 1 -->
        </div>
        <!-- ./Linha 5 -->
    </div>
    <!-- Linha 6 -->
    <div class="row">
        <!-- Coluna 1 -->
        <div class="col-md-12">
            <!-- Senha -->
            <div class="form-group has-feedback <?php if (form_error('txt_senha')) {echo " has-error ";};?>">
                <label class="control-label">Senha</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-key" aria-hidden="true"></i>
                  </span>
                    <input type="password" class="form-control" placeholder="Digite sua senha" name="txt_senha">
                </div>
                <?php echo form_error('txt_senha'); ?>
            </div>
            <!-- ./Coluna 1 -->
        </div>
        <!-- ./Linha 6 -->
    </div>
    <!-- Linha 7 -->
    <div class="row">
        <!-- Coluna 1 -->
        <div class="col-md-12">
            <!-- Rep. Senha -->
            <div class="form-group has-feedback <?php if (form_error('txt_senha_c')) {echo " has-error ";};?>">
                <label class="control-label">Confirmar Senha</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-key" aria-hidden="true"></i>
                  </span>
                    <input type="password" class="form-control" placeholder="Repetir a senha" name="txt_senha_c">
                </div>
                <?php echo form_error('txt_senha_c'); ?>
            </div>
            <!-- ./Coluna 1 -->
        </div>
        <!-- ./Linha 7 -->
    </div>

    <div class="row">
        <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
        </div>
        <!-- /.col -->
    </div>
    <?php echo form_close() ?>
</div>
<!-- /.login-box-body -->
</div>

