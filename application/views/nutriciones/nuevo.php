
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <br>
            <h1 style="color:red;"><b>NUEVA NUTRICION DEL BOVINO</b></h1>
            <br>
            <br>
        </div>
    </div>
</div>

<div class="container">
    <form class="" id="frm_editar_nutricion"
    action="<?php echo site_url(); ?>/nutriciones/guardar" method="post">
        <div class="row">
            
            <div class="col-md-4 text-center">
                <label for="">ID DE LA NUTRICION:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el id de la nutricion" 
                class="form-control"
                required
                name="id_nut" 
                value=""
                id="id_nut">
            </div>

            <div class="col-md-4 text-center">
                <label for="">NOMBRE DE LA NUTRICION:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el nombre de la nutricion" 
                class="form-control"
                required
                name="nom_nut" 
                value=""
                id="nom_nut">
            </div>
            
            <div class="col-md-4 text-center">
                <label for="">PORCENTAJE DE LA NUTRICION:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el porcentaje de la nutricion" 
                class="form-control"
                required
                name="porcentaje_nut" 
                value=""
                id="porcentaje_nut">
            </div>

            <div class="col-md-4 text-center">
                <label for="">TIPO DE NUTRICION:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el tipo de nutricion" 
                class="form-control"
                required
                name="tipo_nut" 
                value=""
                id="tipo_nut">
            </div>

            <div class="col-md-4 text-center">
                <label for="">DETALLES DE LA NUTRICION:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese los detalles de la nutricion" 
                class="form-control"
                required
                name="det_nut" 
                value=""
                id="det_nut">
            </div>

        </div>
        <br>
        <div class="col-md-12 text-center">
            <button type="submit" name="button" class="btn btn-primary">
                GUARDAR
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/nutriciones/index" class="btn btn-danger">CANCELAR</a>
        </div>
        <br>

    </form>
</div>
<br>
<br>
<script type="text/javascript">
    $("#frm_editar_nutricion").validate({
        rules: {
            id_nut: {
                required: true
            },
            nom_nut: {
                required: true
            },
            porcentaje_nut: {
                required: true
            },
            tipo_nut: {
                required: true
            },
            det_nut: {
                required: true
            }
        },
        messages: {
            id_nut: {
                required: "POR FAVOR INGRESE EL ID"
            },
            nom_nut: {
                required: "POR FAVOR INGRESE EL NOMBRE"
            },
            porcentaje_nut: {
                required: "POR FAVOR INGRESE EL PORCENTAJE"
            },
            tipo_nut: {
                required: "POR FAVOR INGRESE EL TIPO DE NUTRICION"
            },
            det_nut: {
                required: "POR FAVOR INGRESE LOS DETALLES"
            }
        }
    });
</script>