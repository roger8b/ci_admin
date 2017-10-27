<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $titulo ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css') ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/blue.css') ?>">
    <!-- jquery-confirm-master -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jquery-confirm-master/dist/jquery-confirm.min.css') ?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


</head>

<!-- header -->
<?php $this->load->view('login/comum/header')?>

<body class="hold-transition login-page">

<div class="login-box">
    <div class="login-logo">
        <b><?php echo $pg_header?></b>
    </div>
    <!-- /.login-logo -->
    <!-- Conteudo-->
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
                        <input type="date" class="form-control" placeholder="Data de Nascimento" name="txt_dt_nasc" value=<?php echo set_value( 'txt_dt_nasc') ?>>
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



<!-- /.login-box -->
    <!-- footer -->
    <?php $this->load->view('login/comum/footer')?>

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<!-- jquery-confirm-master -->
<script src="<?php echo base_url('assets/plugins/jquery-confirm-master/dist/jquery-confirm.min.js') ?>"></script>
</body>
</html>

<script>
    window.confirma = function(status) {
        if (status == 1) {
            //alert("Usuário registrado com sucesso!!!");
            $.alert({
                title: 'Bem-vindo',
                content: 'Seu cadastro foi realizado com sucesso!!! <br> Click em ok para voltar para pagina de Login ',
                buttons:{
                    OK: function () {
                        window.location = "/ci_admin"
                    }
                },
                animationBounce: 1.5,
            });

            return true;
        }
    }
    confirma(<?= isset($status) ?>);
</script>

