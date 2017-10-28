<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<!-- jquery-confirm-master -->
<script src="<?php echo base_url('assets/plugins/jquery-confirm-master/dist/jquery-confirm.min.js') ?>"></script>
<!-- Input Mask -->
<script src="<?php echo base_url('assets/js/jquery.inputmask.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.inputmask.date.extensions.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.inputmask.extensions.js') ?>"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js') ?>"></script>

</body>
</html>

<script>
window.teste = function () {
    $.alert({
        title: 'Aviso!',
        content: 'Usuário registrado com sucesso!!!',
    });

}
</script>

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

    // Mascara
    $(document).ready(function(){
        $("#cpf").inputmask("999.999.999-99");
    });

    //Date picker
    $('#datepicker').datepicker({
        format: 'dd/mm/yyyy',
        language: 'pt-BR',
        weekStart: 0,
        todayHighlight: true
    })

</script>