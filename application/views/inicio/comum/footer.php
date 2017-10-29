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
<!--Custon-->
<script src="<?php echo base_url('assets/js/custon.js') ?>"></script>
</body>
</html>

<script>
    // Vem do custon.js
    confirma(<?= isset($status) ?>);
    // Mascara
    $(document).ready(function () {
        $("#cpf").inputmask("999.999.999-99");
    });
</script>