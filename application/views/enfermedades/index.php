<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="<?php echo base_url(); ?>/assets/images/enfe.jpg" alt="" style="width: 200px; height: 200px;">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <h1 style="color:red;"><b>LISTADO DE ENFERMEDADES</b></h1>
        </div>
    </div>
</div>
<div class="col-md-4">
    <a href="<?php echo site_url('enfermedades/nuevo'); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-plus"></i>
        Agregar Enfermedad
    </a>
</div>
<br>
<br>
<br>
<?php if ($enfermedades) : ?>
    <table class="table table=striped table-bordered table-hover"
    id="tbl_enfermedades">
        <thead>
            <tr>
                <th>CODIGO ENFERMEDAD</th>
                <th>FECHA</th>
                <th>DIAGNOSTICO</th>
                <th>TRATAMIENTO</th>
                <th>OBSERVACIONES</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enfermedades
                as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo
                        $filaTemporal->id_enf; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->fecha_enf; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->diag_enf; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->tra_enf; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->obs_enf; ?>
                    </td>
                    <td class="text-center">
                    <a href="<?php echo site_url(); ?>/enfermedades/editar/<?php echo $filaTemporal->id_enf; ?>" 
                        title="Editar Enfermedad">
                            <i class="mdi mdi-pensil">
                                Editar
                            </i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php if (
                            $this->session->userdata("conectado")->perfil_usu
                            == "ADMINISTRADOR"
                        ) : ?>
                            <a href="<?php echo site_url(); ?>/enfermedades/eliminar/<?php echo $filaTemporal->id_enf; ?>" title="Eliminar enfermedades" onclick="return confirm('¿Esta seguro?');" style="color:red;">
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
    <h1> Dont have Enfermedades<h1>
        <?php endif; ?>

<script type="text/javascript">
    $("#tbl_enfermedades")
    .DataTable();
</script>