<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="<?php echo base_url(); ?>/assets/images/pasto.jpg" alt="" style="width: 200px; height: 200px;">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <h1 style="color:red;"><b>LISTADO DE PASTOS</b></h1>
        </div>
    </div>
</div>
<div class="col-md-4">
    <a href="<?php echo site_url('pastos/nuevo'); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-plus"></i>
        Agregar Pasto
    </a>
</div>
<br>
<br>
<br>
<?php if ($pastos) : ?>
    <table class="table table=striped table-bordered table-hover"
    id="tbl_pastos">
        <thead>
            <tr>
                <th>ID DEL PASTO</th>
                <th>NOMBRE DEL PASTO</th>
                <th>PREDIO DEL PASTO</th>
                <th>CANTIDAD DE PASTO</th>
                <th>FECHA DE INGRESO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pastos
                as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo
                        $filaTemporal->id_pas; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->nom_pas; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->predio_pas; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->cantidad_pas; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->fecha_pas; ?>
                    </td>

                    <td class="text-center">
                        <a href="<?php echo site_url(); ?>/pastos/editar/<?php echo $filaTemporal->id_pas; ?>" 
                        title="Editar Pasto">
                            <i class="mdi mdi-pensil">
                                Editar
                            </i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php if (
                            $this->session->userdata("conectado")->perfil_usu
                            == "ADMINISTRADOR"
                        ) : ?>
                            <a href="<?php echo site_url(); ?>/pastos/eliminar/<?php echo $filaTemporal->id_pas; ?>" title="Eliminar pastos" onclick="return confirm('¿Esta seguro?');" style="color:red;">
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
    <h1> Dont have Pastos<h1>
        <?php endif; ?>

<script type="text/javascript">
    $("#tbl_pastos")
    .DataTable();
</script>