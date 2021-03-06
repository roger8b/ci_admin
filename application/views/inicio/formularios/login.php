<!-- login-box-body -->
  <div class="login-box-body">
    <p class="login-box-msg">Faça Login para Iniciar uma nova sessão</p>

    <?php if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
} ?>

<?php echo form_open('login') ?>

<div class="form-group has-feedback <?php if (form_error('txt_email')) {echo " has-error ";};?>">
    <input type="email" class="form-control" placeholder="Email" name="txt_email" value=<?php echo set_value( 'txt_email') ?>>
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    <?php echo form_error('txt_email'); ?>
</div>
<div class="form-group has-feedback <?php if (form_error('txt_senha')) {echo " has-error ";};?>">
    <input type="password" class="form-control" placeholder="Password" name="txt_senha">
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    <?php echo form_error('txt_senha'); ?>
</div>
<div class="row">
    <div class="col-xs-12">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
    </div>
    <!-- /.col -->
</div>
<?php echo form_close() ?>
<br>
<p>Não tem conta? <a href="<?php echo base_url('cadastro') ?>">Crie agora!</a></p>
</div>
<!-- /.login-box-body -->
</div>