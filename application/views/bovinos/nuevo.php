
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <br>
            <h1 style="color:red;"><b>NUEVO BOVINO</b></h1>
            <br>
            <br>
        </div>
    </div>
</div>

<div class="container">
    <form class="" id="frm_editar_bovino"
    action="<?php echo site_url(); ?>/bovinos/guardar" method="post">
        <div class="row">
            
            <div class="col-md-4 text-center">
                <label for="">CODIGO BOVINO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el numero del arete de la bovino" 
                class="form-control"
                required
                name="cod_ing" 
                value=""
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
                value=""
                id="nom_ing">
            </div>
            
            <div class="col-md-4 text-center">
                <label for="">RAZA DEL BOVINO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese de la raza del bovino" 
                class="form-control"
                required
                name="raza_ing" value=""
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
                name="sexo_ing" value=""
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
                name="edad_ing" value=""
                id="edad_ing">
            </div>

            <div class="col-md-4 text-center">
                <label for="">FECHA DEL BOVINO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese la fecha del bovino" 
                class="form-control"
                required
                name="fec_ing" value=""
                id="fec_ing">
            </div>

            <div class="col-md-4 text-center">
                <label for="">OBSERVACIONES DEL BOVINO:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese la observacion del bovino" 
                class="form-control" 
                required
                name="obs_ing" value=""
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
                name="precio_ing" value=""
                id="precio_ing">
            </div>

        </div>
        <br>
        <div class="col-md-12 text-center">
            <button type="submit" name="button" class="btn btn-primary">
                GUARDAR
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
            obs_ing: {
                required: true
            },
            precio_ing: {
                required: true
            },
            fec_ing: {
                required: true
            }
        },
        messages: {
            cod_ing: {
                required: "INGRESE EL CODIGO"
            },
            nom_ing: {
                required: "INGRESE EL NOMBRE"
            },
            raza_ing: {
                required: "INGRESE LA RAZA"
            },
            sexo_ing: {
                required: "INGRESE EL SEXO DEL BOVINO"
            },
            edad_ing: {
                required: "INGRESE LA EDAD DEL BOVINO"
            },
            obs_ing: {
                required: "INGRESE LA OBSERVACION DEL BOVINO"
            },
            precio_ing: {
                required: "INGRESE EL PRECIO DEL BOVINO"
            },
            fec_ing: {
                required: "INGRESE LA FECHA DEL BOVINO "
            }
        }
    });
</script>