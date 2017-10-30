<!-- header -->
<?php $this->load->view('inicio/comum/header')?>

<body class="hold-transition login-page fadeIn">
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

        $teste['varteste'] = ['nome' => 'roger' , 'tel' => '986683063'];
        //var_dump($teste);
        var_dump($teste['varteste']);
        unset($teste['varteste']['nome']);
        var_dump($teste['varteste']);
        ?>

<!-- /.login-box -->
<!-- footer -->
<?php $this->load->view('inicio/comum/footer')?>

