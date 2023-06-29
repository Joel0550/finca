
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <br>
            <h1 style="color:red;"><b>NUEVO PASTO</b></h1>
            <br>
            <br>
        </div>
    </div>
</div>

<div class="container">
    <form class="" id="frm_editar_pasto"
    action="<?php echo site_url(); ?>/pastos/guardar" method="post">
        <div class="row">
            
            <div class="col-md-4 text-center">
                <label for="">ID DEL PASTO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el id del pasto" 
                class="form-control"
                required
                name="id_pas" 
                value=""
                id="id_pas">
            </div>

            <div class="col-md-4 text-center">
                <label for="">NOMBRE DEL PASTO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el nombre del pasto" 
                class="form-control"
                required
                name="nom_pas" 
                value=""
                id="nom_pas">
            </div>
            
            <div class="col-md-4 text-center">
                <label for="">NUMERO DE PREDIO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el numero de predio" 
                class="form-control"
                required
                name="predio_pas" value=""
                id="predio_pas">
            </div>

            <div class="col-md-4 text-center">
                <label for="">CANTIDAD DEL PASTO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese la cantidad del pasto" 
                class="form-control"
                required
                name="cantidad_pas" value=""
                id="cantidad_pas">
            </div>

            <div class="col-md-4 text-center">
                <label for="">FECHA DE INGRESO AL PASTO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese la fecha de ingreso al pasto" 
                class="form-control"
                required
                name="fecha_pas" value=""
                id="fecha_pas">
            </div>

        </div>
        <br>
        <div class="col-md-12 text-center">
            <button type="submit" name="button" class="btn btn-primary">
                GUARDAR
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/pastos/index" class="btn btn-danger">CANCELAR</a>
        </div>
        <br>

    </form>
</div>
<br>
<br>
<script type="text/javascript">
    $("#frm_editar_pasto").validate({
        rules: {
            id_pas: {
                required: true
            },
            nom_pas: {
                required: true
            },
            predio_pas: {
                required: true
            },
            cantidad_pas: {
                required: true
            },
            fecha_pas: {
                required: true
            }

        },
        messages: {
            id_pas: {
                required: "INGRESE EL ID"
            },
            nom_pas: {
                required: "INGRESE EL NOMBRE DEL PASTO"
            },
            predio_pas: {
                required: "INGRESE EL NUMERO DE PREDIO"
            },
            cantidad_pas: {
                required: "INGRESE LA CANTIDAD DE PASTO"
            },
            fecha_pas: {
                required: "INGRESE LA FECHA DEL PASTO"
            }
        }
    });
</script>