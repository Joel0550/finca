<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="<?php echo base_url(); ?>/assets/images/ingreso.jpg" alt="" style="width: 200px; height: 200px;">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <h1 style="color:red;"><b>LISTADO DE BOVINOS</b></h1>
        </div>
    </div>
</div>
<div class="col-md-4">
    <a href="<?php echo site_url('bovinos/nuevo'); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-plus"></i>
        Agregar Bovino
    </a>
</div>
<br>
<br>
<br>
<?php if ($bovinos) : ?>
    <table class="table table=striped table-bordered table-hover" id="tbl_bovinos">
        <thead>
            <tr>
                <th>ARETE DEL BOVINO</th>
                <th>NOMBRE DEL BOVINO</th>
                <th>RAZA DEL BOVINO</th>
                <th>SEXO DEL BOVINO</th>
                <th>EDAD DEL BOVINO</th>
                <th>FECHA DE INGRESO</th>
                <th>OBSERVACIONES DE BOVINOS</th>
                <th>PRECIO DE BOVINO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bovinos
                as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo
                        $filaTemporal->cod_ing; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->nom_ing; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->raza_ing; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->sexo_ing; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->edad_ing; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->fec_ing; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->obs_ing; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->precio_ing; ?>
                    </td>
                    <td class="text-center">
                        <a href="<?php echo site_url(); ?>/bovinos/editar/<?php echo $filaTemporal->cod_ing; ?>" title="Editar Bovino">
                            <i class="mdi mdi-pensil">
                                Editar
                            </i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php if (
                            $this->session->userdata("conectado")->perfil_usu
                            == "ADMINISTRADOR"
                        ) : ?>
                            <a href="<?php echo site_url(); ?>/bovinos/eliminar/<?php echo $filaTemporal->cod_ing; ?>" title="Eliminar Bovino" onclick="return confirm('¿Esta seguro?');" style="color:red;">
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
            $("#tbl_bovinos")
                .DataTable();
        </script>