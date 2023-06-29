<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="<?php echo base_url(); ?>/assets/images/paste.jpg" alt="" style="width: 200px; height: 200px;">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <h1 style="color:red;"><b>LISTADO DE PRODUCCION DE PASTEURIZACION</b></h1>
        </div>
    </div>
</div>
<div class="col-md-4">
    <a href="<?php echo site_url('pasteurizaciones/nuevo'); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-plus"></i>
        Agregar Produccion de Pasteurizacion
    </a>
</div>
<br>
<br>
<br>
<?php if ($pasteurizaciones) : ?>
    <table class="table table=striped table-bordered table-hover"
    id="tbl_pasteurizaciones">
        <thead>
            <tr>
                <th>ID DE PASTEURIZACION</th>
                <th>FECHA DE PASTEURIZACION</th>
                <th>PROCENTAJE DE PASTEURIZACION</th>
                <th>TEMPERATURA DE PASTEURIZACION</th>
                <th>OBSERVACIONES</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pasteurizaciones
                as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo
                        $filaTemporal->id_pat; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->fec_pat; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->pro_pat; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->tem_pat; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->obs_pat; ?>
                    </td>
                    <td class="text-center">
                        <a href="<?php echo site_url(); ?>/pasteurizaciones/editar/<?php echo $filaTemporal->id_pat; ?>" title="Editar Bovino">
                            <i class="mdi mdi-pensil">
                                Editar
                            </i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php if (
                            $this->session->userdata("conectado")->perfil_usu
                            == "ADMINISTRADOR"
                        ) : ?>
                            <a href="<?php echo site_url(); ?>/pasteurizaciones/eliminar/<?php echo $filaTemporal->id_pat; ?>" title="Eliminar pasteurizaciones" onclick="return confirm('¿Esta seguro?');" style="color:red;">
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
    <h1> Dont have pasteurizaciones<h1>
        <?php endif; ?>

<script type="text/javascript">
    $("#tbl_pasteurizaciones")
    .DataTable();
</script>