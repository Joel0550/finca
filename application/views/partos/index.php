<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="<?php echo base_url(); ?>/assets/images/parto.jpg" alt="" style="width: 200px; height: 200px;">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <h1 style="color:red;"><b>LISTADO DE PARTOS</b></h1>
        </div>
    </div>
</div>
<div class="col-md-4">
    <a href="<?php echo site_url('partos/nuevo'); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-plus"></i>
        Agregar Partos
    </a>
</div>
<br>
<br>
<br>
<?php if ($partos) : ?>
    <table class="table table=striped table-bordered table-hover"
    id="tbl_partos">
        <thead>
            <tr>
                <th>CODIGO DEL PARTO</th>
                <th>NUMERO DE PARTOS</th>
                <th>FECHA DE PARTOS</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($partos
                as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo
                        $filaTemporal->cod_par; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->num_par; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->fecha_par; ?>
                    </td>
                    <td class="text-center">
                    <a href="<?php echo site_url(); ?>/partos/editar/<?php echo $filaTemporal->cod_par; ?>" 
                        title="Editar Parto">
                            <i class="mdi mdi-pensil">
                                Editar
                            </i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php if (
                            $this->session->userdata("conectado")->perfil_usu
                            == "ADMINISTRADOR"
                        ) : ?>
                            <a href="<?php echo site_url(); ?>/partos/eliminar/<?php echo $filaTemporal->cod_par; ?>" title="Eliminar partos" onclick="return confirm('¿Esta seguro?');" style="color:red;">
                                <i class="mdi mdi-close"></i>
                                Eliminar
                            </a>
                        <?php endif; ?>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
<?php else : ?>
    <h1> Dont have Partos<h1>
        <?php endif; ?>

<script type="text/javascript">
    $("#tbl_partos")
    .DataTable();
</script>