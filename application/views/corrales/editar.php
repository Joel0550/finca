<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <br>
            <h1 style="color:red;"><b>EDITAR INGRESO AL CORRAL</b></h1>
            <br>
            <br>
        </div>
    </div>
</div>

<div class="container">
    <form class="" id="frm_editar_corral"
    action="<?php echo site_url('corrales/procesarActualizacion'); ?>" 
    method="post">
        <div class="row">
            <input type="text" name="id_cor" id="id_cor"
            value="<?php echo $corralEditar->id_cor; ?>">

            <div class="col-md-4 text-center">
                <label for="">ID DEL CORRAL:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el numero del corral a ingresar" 
                class="form-control"
                required
                name="id_cor" 
                value="<?php echo $corralEditar->id_cor; ?>"
                id="id_cor">
            </div>

            <div class="col-md-4 text-center">
                <label for="">NUMERO DE ANIMALES:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el numero de animales a ingresar" 
                class="form-control"
                required
                name="num_cor" 
                value="<?php echo $corralEditar->num_cor; ?>"
                id="num_cor">
            </div>
            
            <div class="col-md-4 text-center">
                <label for="">FECHA DE INGRESO AL CORRAL:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese la fecha de ingreso al corral" 
                class="form-control"
                required
                name="fec_cor" 
                value="<?php echo $corralEditar->fec_cor; ?>"
                id="fec_cor">
            </div>

            <div class="col-md-4 text-center">
                <label for="">PRODUCTOS:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el producto a ingresar" 
                class="form-control"
                required
                name="pro_cor" 
                value="<?php echo $corralEditar->pro_cor; ?>"
                id="pro_cor">
            </div>

            <div class="col-md-4 text-center">
                <label for="">OBSERVACIONES:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese la observacion" 
                class="form-control"
                required
                name="obs_cor" 
                value="<?php echo $corralEditar->obs_cor; ?>"
                id="obs_cor">
            </div>

        </div>
        <br>
        <div class="col-md-12 text-center">
            <button type="submit" name="button" class="btn btn-primary">
                EDITAR
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/corrales/index" class="btn btn-danger">CANCELAR</a>
        </div>
        <br>

    </form>
</div>
<br>
<br>
<script type="text/javascript">
    $("#frm_editar_corral").validate({
        rules: {
            id_cor: {
                required: true
            },
            num_cor: {
                required: true
            },
            fec_cor: {
                required: true
            },
            pro_cor: {
                required: true
            },
            obs_pro: {
                required: true
            }
        },
        messages: {
            id_cor: {
                required: "POR FAVOR INGRESE EL CODIGO"
            },
            num_cor: {
                required: "POR FAVOR INGRESE EL NOMBRE"
            },
            fec_cor: {
                required: "POR FAVOR INGRESE LA RAZA"
            },
            pro_cor: {
                required: "POR FAVOR INGRESE EL SEXO"
            },
            obs_pro: {
                required: "POR FAVOR INGRESE LA EDAD"
            }
        }
    });
</script>