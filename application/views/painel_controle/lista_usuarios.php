<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <table class="table table-bordered  table-hover table-responsive text-center">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>CPF</th>
                                <th>CRM</th>
                                <th>Data Nasc.</th>
                                <th>Conta</th>
                                <th>Grupos</th>
                                <th>Editar</th>
                                <th>Desativar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tb_user as $tb) {
    ?>
                            <tr>
                                <td>
                                    <?php echo $tb['id'] ?>
                                </td>
                                <td>
                                    <?php echo $tb['nome'] ?>
                                </td>
                                <td>
                                    <?php echo $tb['email'] ?>
                                </td>
                                <td>
                                    <?php echo $tb['cpf'] ?>
                                </td>
                                <td>
                                    <?php echo $tb['crm'] ?>
                                </td>
                                <td>
                                    <?php echo date_format(new DateTime($tb['dt_nasc']), 'd/m/Y') ?>
                                </td>
                                <td>
                                    <?php echo $tb['tipo'] ?>
                                </td>
                                <td>
                                    <?php echo $tb['grupo'] ?>
                                </td>
                                <td><a href="<?php echo base_url('painel_controle/usuario/') .$tb['id']?>"><i class="fa fa-edit"></i></a></td>
                                <td><a href=""><i class="fa  fa-ban"></i></a></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</section>