<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="<?php echo base_url(); ?>/assets/images/cria.jpg" alt="" style="width: 200px; height: 200px;">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <h1 style="color:red;"><b>LISTADO DE CRIAS</b></h1>
        </div>
    </div>
</div>
<div class="col-md-4">
    <a href="<?php echo site_url('crias/nuevo'); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-plus"></i>
        Agregar Cria
    </a>
</div>
<br>
<br>
<br>
<?php if ($crias) : ?>
    <table class="table table=striped table-bordered table-hover"
    id="tbl_crias">
        <thead>
            <tr>
                <th>CODIGO DE LA CRIA</th>
                <th>NOMBRE</th>
                <th>SEXO</th>
                <th>FECHA DE NACIMIENTO O INGRESO</th>
                <th>PESO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($crias
                as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo
                        $filaTemporal->cod_cri; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->nom_cri; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->sexo_cri; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->fecha_cri; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->peso_cri; ?>
                    </td>
                    <td class="text-center">
                        <a href="<?php echo site_url(); ?>/crias/editar/<?php echo $filaTemporal->cod_cri; ?>" 
                        title="Editar Cria">
                            <i class="mdi mdi-pensil">
                                Editar
                            </i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php if (
                            $this->session->userdata("conectado")->perfil_usu
                            == "ADMINISTRADOR"
                        ) : ?>
                            <a href="<?php echo site_url(); ?>/crias/eliminar/<?php echo $filaTemporal->cod_cri; ?>" title="Eliminar crias" onclick="return confirm('¿Esta seguro?');" style="color:red;">
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
    <h1> Dont have Crias<h1>
        <?php endif; ?>

<script type="text/javascript">
    $("#tbl_crias")
    .DataTable();
</script>