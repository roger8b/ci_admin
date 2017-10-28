<!-- header -->
<?php $this->load->view('inicio/comum/header')?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b><?php echo $pg_header?></b>
  </div>
  <!-- /.login-logo -->
<!-- Conteudo-->

        <?php
        if (isset($_view) && $_view) {
            $this->load->view($_view);
        }
        ?>

<!-- /.login-box -->
<!-- footer -->
<?php $this->load->view('inicio/comum/footer')?>

