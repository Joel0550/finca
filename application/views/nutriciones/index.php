<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="<?php echo base_url(); ?>/assets/images/nutri.png" alt="" style="width: 200px; height: 200px;">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <h1 style="color:red;"><b>LISTADO DE LA NUTRICION DEL BOVINO</b></h1>
        </div>
    </div>
</div>
<div class="col-md-4">
    <a href="<?php echo site_url('nutriciones/nuevo'); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-plus"></i>
        Agregar Nueva Nutricion
    </a>
</div>
<br>
<br>
<br>
<?php if ($nutriciones) : ?>
    <table class="table table=striped table-bordered table-hover" id="tbl_nutriciones">
        <thead>
            <tr>
                <th>ID NUTRICION</th>
                <th>NOMBRE DE LA NUTRICION</th>
                <th>PORCENTAJE DE NUTRICION</th>
                <th>TIPO DE NUTRICION</th>
                <th>DETALLES</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nutriciones
                as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo
                        $filaTemporal->id_nut; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->nom_nut; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->porcentaje_nut; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->tipo_nut; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->det_nut; ?>
                    </td>
                    <td class="text-center">
                        <a href="<?php echo site_url(); ?>/nutriciones/editar/<?php echo $filaTemporal->id_nut; ?>" title="Editar nutriciones">
                            <i class="mdi mdi-pensil">
                                Editar
                            </i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php if (
                            $this->session->userdata("conectado")->perfil_usu
                            == "ADMINISTRADOR"
                        ) : ?>
                            <a href="<?php echo site_url(); ?>/nutriciones/eliminar/<?php echo $filaTemporal->id_nut; ?>" title="Eliminar nutriciones" onclick="return confirm('¿Esta seguro?');" style="color:red;">
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
    <h1> Dont have nutriciones<h1>
        <?php endif; ?>

        <script type="text/javascript">
            $("#tbl_nutriciones")
                .DataTable();
        </script>