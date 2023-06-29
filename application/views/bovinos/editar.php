<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <br>
            <h1 style="color:red;"><b>EDITAR INGRESO DE BOVINOS</b></h1>
            <br>
            <br>
        </div>
    </div>
</div>

<div class="container">
    <form class="" id="frm_editar_bovino"
    action="<?php echo site_url('bovinos/procesarActualizacion'); ?>" 
    method="post">
        <div class="row">
            <input type="text" name="cod_ing" id="cod_ing"
            value="<?php echo $bovinoEditar->cod_ing; ?>">

            <div class="col-md-4 text-center">
                <label for="">ARETE DEL BOVINO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el numero del arete del bovino" 
                class="form-control"
                required
                name="cod_ing" 
                value="<?php echo $bovinoEditar->cod_ing; ?>"
                id="cod_ing">
            </div>

            <div class="col-md-4 text-center">
                <label for="">NOMBRE DEL BOVINO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el nombre del bovino" 
                class="form-control"
                required
                name="nom_ing" 
                value="<?php echo $bovinoEditar->nom_ing; ?>"
                id="nom_ing">
            </div>
            
            <div class="col-md-4 text-center">
                <label for="">RAZA DEL BOVINO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese la raza del bovino" 
                class="form-control"
                required
                name="raza_ing" 
                value="<?php echo $bovinoEditar->raza_ing; ?>"
                id="raza_ing">
            </div>

            <div class="col-md-4 text-center">
                <label for="">SEXO DEL BOVINO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el sexo del bovino" 
                class="form-control"
                required
                name="sexo_ing" 
                value="<?php echo $bovinoEditar->sexo_ing; ?>"
                id="sexo_ing">
            </div>

            <div class="col-md-4 text-center">
                <label for="">EDAD DEL BOVINO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese la edad del bovino" 
                class="form-control"
                required
                name="edad_ing" 
                value="<?php echo $bovinoEditar->edad_ing; ?>"
                id="edad_ing">
            </div>

            <div class="col-md-4 text-center">
                <label for="">FECHA DEL BOVINO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese la fecha que nacio o ingreso a la finca" 
                class="form-control"
                required
                name="fec_ing" 
                value="<?php echo $bovinoEditar->fec_ing; ?>"
                id="fec_ing">
            </div>
                
            <div class="col-md-4 text-center">
                <label for="">OBSERVACIONES DEL BOVINO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese las observaciones del bovino" 
                class="form-control"
                required
                name="obs_ing" 
                value="<?php echo $bovinoEditar->obs_ing; ?>"
                id="obs_ing">
            </div>

            <div class="col-md-4 text-center">
                <label for="">PRECIO DEL BOVINO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el precio del bovino" 
                class="form-control"
                required
                name="precio_ing" 
                value="<?php echo $bovinoEditar->precio_ing; ?>"
                id="precio_ing">
            </div>

        </div>
        <br>
        <div class="col-md-12 text-center">
            <button type="submit" name="button" class="btn btn-primary">
                EDITAR
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/bovinos/index" class="btn btn-danger">CANCELAR</a>
        </div>
        <br>

    </form>
</div>
<br>
<br>
<script type="text/javascript">
    $("#frm_editar_bovino").validate({
        rules: {
            cod_ing: {
                required: true
            },
            nom_ing: {
                required: true
            },
            raza_ing: {
                required: true
            },
            sexo_ing: {
                required: true
            },
            edad_ing: {
                required: true
            },
            fec_ing: {
                required: true
            },
            obs_ing: {
                required: true
            },
            precio_ing: {
                required: true,
                digits: true
            }
        },
        messages: {
            cod_ing: {
                required: "POR FAVOR INGRESE EL CODIGO"
            },
            nom_ing: {
                required: "POR FAVOR INGRESE EL NOMBRE"
            },
            raza_ing: {
                required: "POR FAVOR INGRESE LA RAZA"
            },
            sexo_ing: {
                required: "POR FAVOR INGRESE EL SEXO"
            },
            edad_ing: {
                required: "POR FAVOR INGRESE LA EDAD"
            },
            fec_ing: {
                required: "POR FAVOR INGRESE LA FECHA"
            },
            obs_ing: {
                required: "POR FAVOR INGRESE LA OBSERVACION"
            },
            precio_ing: {
                required: "POR FAVOR INGRESE EL PRECIO",
                digits: "POR FAVOR SOLO NUMEROS"
            }

        }
    });
</script>