
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <br>
            <h1 style="color:red;"><b>NUEVA PASTEURIZACION</b></h1>
            <br>
            <br>
        </div>
    </div>
</div>

<div class="container">
    <form class="" id="frm_editar_pasteurizacion"
    action="<?php echo site_url(); ?>/pasteurizaciones/guardar" method="post">
        <div class="row">
            
            <div class="col-md-4 text-center">
                <label for="">ID DE PASTEURIZACION:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el id de la pasteurizacion" 
                class="form-control"
                required
                name="id_pat" 
                value=""
                id="id_pat">
            </div>

            <div class="col-md-4 text-center">
            <label for="">FECHA DE PASTEURIZACION:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese la fecha de produccion de pasteurizacion" 
                class="form-control"
                required
                name="fec_pat" 
                value=""
                id="fec_pat">
            </div>
            
            <div class="col-md-4 text-center">
            <label for="">PROCENTAJE DE PASTEURIZACION:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese el porcentaje de pasteurizacion" 
                class="form-control"
                required
                name="pro_pat" 
                value=""
                id="pro_pat">
            </div>

            <div class="col-md-4 text-center">
            <label for="">TEMPERATURA DE PASTEURIZACION:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese la temperatura de pasteurizacion" 
                class="form-control"
                required
                name="tem_pat" 
                value=""
                id="tem_pat">
            </div>

            <div class="col-md-4 text-center">
            <label for="">OBSERVACIONES:
                    <span class="obligatorio">(Obligatorio)</span>
                </label>
                <br>
                <input type="text" 
                placeholder="Ingrese la observacion de pasteurizacion" 
                class="form-control"
                required
                name="obs_pat" 
                value=""
                id="obs_pat">
            </div>

        </div>
        <br>
        <div class="col-md-12 text-center">
            <button type="submit" name="button" class="btn btn-primary">
                GUARDAR
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/pasteurizaciones/index" class="btn btn-danger">CANCELAR</a>
        </div>
        <br>

    </form>
</div>
<br>
<br>
<script type="text/javascript">
    $("#frm_editar_pasteurizacion").validate({
        rules: {
            id_pat: {
                required: true
            },
            fec_pat: {
                required: true
            },
            pro_pat: {
                required: true
            },
            tem_pat: {
                required: true
            },
            obs_pat: {
                required: true
            }
        },
        messages: {
            id_pat: {
                required: "POR FAVOR INGRESE EL ID"
            },
            fec_pat: {
                required: "POR FAVOR INGRESE LA FECHA"
            },
            pro_pat: {
                required: "POR FAVOR INGRESE EL PROCENTAJE"
            },
            tem_pat: {
                required: "POR FAVOR INGRESE LA TEMPERATURA"
            },
            obs_pat: {
                required: "POR FAVOR INGRESE LAS OBSERVACIONES"
            }
        }
    });
</script>