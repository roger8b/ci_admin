<!-- header -->
<?php $this->load->view('inicio/comum/header')?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Login</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Faça Login para Iniciar uma nova sessão</p>

    <?php echo form_open('inicio/login') ?>

      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="txt_email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="txt_password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close() ?>
    <a href="<?php echo base_url('/'); ?>">Esqueceu a senha?</a><br>
    <a href="<?php echo base_url('painel_controle'); ?>" class="text-center">Teste > Painel de Controle</a>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- footer -->
<?php $this->load->view('inicio/comum/footer')?>

