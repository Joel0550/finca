<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="<?php echo base_url(); ?>/assets/images/corral.jpg" alt="" style="width: 200px; height: 200px;">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <h1 style="color:red;"><b>LISTADO INGRESO AL CORRAL</b></h1>
        </div>
    </div>
</div>
<div class="col-md-4">
    <a href="<?php echo site_url('corrales/nuevo'); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-plus"></i>
        Agregar Ingreso Al Corral
    </a>
</div>
<br>
<br>
<br>
<?php if ($corrales) : ?>
    <table class="table table=striped table-bordered table-hover"
    id="tbl_corrales">
        <thead>
            <tr>
                <th>ID CORRAL</th>
                <th>NUMERO DE INGRESO DE ANIMALES</th>
                <th>FECHA DE INGRESO</th>
                <th>PRODUCTOS EN EL CORRAL</th>
                <th>OBSERVACIONES</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($corrales
                as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo
                        $filaTemporal->id_cor; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->num_cor; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->fec_cor; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->pro_cor; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->obs_cor; ?>
                    </td>
                    
                    <td class="text-center">
                        <a href="<?php echo site_url(); ?>/corrales/editar/<?php echo $filaTemporal->id_cor; ?>" title="Editar Corral">
                            <i class="mdi mdi-pensil">
                                Editar
                            </i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php if (
                            $this->session->userdata("conectado")->perfil_usu
                            == "ADMINISTRADOR"
                        ) : ?>
                            <a href="<?php echo site_url(); ?>/corrales/eliminar/<?php echo $filaTemporal->id_cor; ?>" title="Eliminar corrales" onclick="return confirm('¿Esta seguro?');" style="color:red;">
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
    <h1> Dont have Corrales<h1>
        <?php endif; ?>

<script type="text/javascript">
    $("#tbl_corrales")
    .DataTable();
</script>