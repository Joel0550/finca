<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="<?php echo base_url(); ?>/assets/images/produ.jpg" alt="" style="width: 200px; height: 200px;">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <h1 style="color:red;"><b>LISTADO DE PRODUCCION</b></h1>
        </div>
    </div>
</div>
<div class="col-md-4">
    <a href="<?php echo site_url('producciones/nuevo'); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-plus"></i>
        Agregar Produccion
    </a>
</div>
<br>
<br>
<br>
<?php if ($producciones) : ?>
    <table class="table table=striped table-bordered table-hover"
    id="tbl_producciones">
        <thead>
            <tr>
                <th>CODIGO DE PRODUCCION</th>
                <th>TIPO DE PRODUCCION</th>
                <th>ESTADO DE PRODUCCION</th>
                <th>FECHA DE PRODUCCION</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($producciones
                as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo
                        $filaTemporal->cod_pro; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->tipo_pro; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->estado_pro; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->fecha_pro; ?>
                    </td>
                    <td class="text-center">
                    <a href="<?php echo site_url(); ?>/producciones/editar/<?php echo $filaTemporal->cod_pro; ?>" 
                        title="Editar Producciones">
                            <i class="mdi mdi-pensil">
                                Editar
                            </i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php if (
                            $this->session->userdata("conectado")->perfil_usu
                            == "ADMINISTRADOR"
                        ) : ?>
                            <a href="<?php echo site_url(); ?>/producciones/eliminar/<?php echo $filaTemporal->cod_pro; ?>" title="Eliminar producciones" onclick="return confirm('¿Esta seguro?');" style="color:red;">
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
    <h1> Dont have Produccion<h1>
        <?php endif; ?>

<script type="text/javascript">
    $("#tbl_producciones")
    .DataTable();
</script>