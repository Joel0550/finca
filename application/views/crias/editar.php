<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <br>
            <h1 style="color:red;"><b>EDITAR CRIA</b></h1>
            <br>
            <br>
        </div>
    </div>
</div>

<div class="container">
    <form class="" id="frm_editar_cria"
    action="<?php echo site_url('crias/procesarActualizacion'); ?>" 
    method="post">
        <div class="row">
            <input type="text" name="cod_cri" id="cod_cri"
            value="<?php echo $criaEditar->cod_cri; ?>">

            <div class="col-md-4 text-center">
                <label for="">CODIGO CRIA:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el numero del arete de la cria" 
                class="form-control"
                required
                name="cod_cri" 
                value="<?php echo $criaEditar->cod_cri; ?>"
                id="cod_cri">
            </div>

            <div class="col-md-4 text-center">
                <label for="">NOMBRE DE LA CRIA:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el nombre de la cria" 
                class="form-control"
                required
                name="nom_cri" 
                value="<?php echo $criaEditar->nom_cri; ?>"
                id="nom_cri">
            </div>

            <div class="col-md-4 text-center">
                <label for="">SEXO DE LA CRIA:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el sexo de la cria" 
                class="form-control"
                required
                name="sexo_cri" 
                value="<?php echo $criaEditar->sexo_cri; ?>"
                id="sexo_cri">
            </div>

            <div class="col-md-4 text-center">
                <label for="">FECHA DE LA CRIA:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese la fecha que nacio o ingreso a la finca" 
                class="form-control"
                required
                name="fecha_cri" 
                value="<?php echo $criaEditar->fecha_cri; ?>"
                id="fecha_cri">
            </div>

            <div class="col-md-4 text-center">
                <label for="">PESO DE LA CRIA:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el peso de la cria" 
                class="form-control"
                required
                name="peso_cri" 
                value="<?php echo $criaEditar->peso_cri; ?>"
                id="peso_cri">
            </div>

        </div>
        <br>
        <div class="col-md-12 text-center">
            <button type="submit" name="button" class="btn btn-primary">
                EDITAR
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/crias/index" class="btn btn-danger">CANCELAR</a>
        </div>
        <br>

    </form>
</div>
<br>
<br>
<script type="text/javascript">
    $("#frm_editar_cria").validate({
        rules: {
            cod_cri: {
                required: true
            },
            nom_cri: {
                required: true
            },
            sexo_cri: {
                required: true
            },
            titulo_ins: {
                required: true
            },
            fecha_cri: {
                required: true
            },
            peso_cri: {
                required: true,
                digits: true
            }
        },
        messages: {
            cod_cri: {
                required: "POR FAVOR INGRESE EL CODIGO"
            },
            nom_cri: {
                required: "POR FAVOR INGRESE EL NOMBRE"
            },
            sexo_cri: {
                required: "POR FAVOR INGRESE EL SEXO"
            },
            fecha_cri: {
                required: "POR FAVOR INGRESE LA FECHA"
            },
            peso_cri: {
                required: "POR FAVOR INGRESE LA DIRRECCION",
                digits: "POR FAVOR SOLO NUMEROS"
            }

        }
    });
</script>