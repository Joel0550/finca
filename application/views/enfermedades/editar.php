<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <br>
            <h1 style="color:red;"><b>EDITAR ENFERMEDAD</b></h1>
            <br>
            <br>
        </div>
    </div>
</div>

<div class="container">
    <form class="" id="frm_editar_enfermedad"
    action="<?php echo site_url('enfermedades/procesarActualizacion'); ?>" 
    method="post">
        <div class="row">
            <input type="text" name="id_enf" id="id_enf"
            value="<?php echo $enfermedadEditar->id_enf; ?>">

            <div class="col-md-4 text-center">
                <label for="">ID ENFERMEDAD:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" placeholder="Ingrese un id para la enfermedad" 
                class="form-control"
                required
                name="id_enf" 
                value="<?php echo $enfermedadEditar->id_enf; ?>"
                id="id_enf">
            </div>

            <div class="col-md-4 text-center">
                <label for="">FECHA DE LA ENFERMEDAD:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" placeholder="Ingrese la fecha de la enfermedad" 
                class="form-control"
                required 
                name="fecha_enf" 
                value="<?php echo $enfermedadEditar->fecha_enf; ?>"
                id="fecha_enf">
            </div>

            <div class="col-md-4 text-center">
                <label for="">DIAGNOSTICO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" placeholder="Ingrese el diagnostico de la enfermedad" 
                class="form-control"
                required
                name="diag_enf" 
                value="<?php echo $enfermedadEditar->diag_enf; ?>"
                id="diag_enf">
            </div>

            <div class="col-md-4 text-center">
                <label for="">TRATAMIENTO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" placeholder="Ingrese el tratamiento de la enfermedad" 
                class="form-control"
                required
                name="tra_enf" 
                value="<?php echo $enfermedadEditar->tra_enf; ?>"
                id="tra_enf">
            </div>

            <div class="col-md-4 text-center">
                <label for="">OBSERVACIONES:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" placeholder="Ingrese las observaciones" 
                class="form-control" 
                required
                name="obs_enf" 
                value="<?php echo $enfermedadEditar->obs_enf; ?>"
                id="obs_enf">
            </div>
        </div>
        <br>
        <div class="col-md-12 text-center">
            <button type="submit" name="button" class="btn btn-primary">
                EDITAR
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/enfermedades/index" class="btn btn-danger">CANCELAR</a>
        </div>
        <br>

    </form>
</div>
<br>
<br>

<script type="text/javascript">
    $("#frm_editar_enfermedad").validate({
        rules: {
            id_enf: {
                required: true
            },
            fecha_enf: {
                required: true
            },
            diag_enf: {
                required: true
            },
            tra_enf: {
                required: true
            },
            obs_enf: {
                required: true
            }
        },
        messages: {
            id_enf: {
                required: "POR FAVOR INGRESE EL CODIGO"
            },
            fecha_enf: {
                required: "POR FAVOR INGRESE LA FECHA"
            },
            diag_enf: {
                required: "POR FAVOR INGRESE EL DIAGNOSTICO"
            },
            tra_enf: {
                required: "POR FAVOR INGRESE EL TRATAMIENTO"
            },
            obs_enf: {
                required: "POR FAVOR INGRESE LA OBSERVACION"
            }

        }
    });
</script>