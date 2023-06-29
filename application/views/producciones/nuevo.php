<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <br>
      <br>
      <h1 style="color:red;"><b>NUEVA PRODUCCION</b></h1>
      <br>
      <br>
    </div>
  </div>
</div>

<div class="container">
  <form class="" id="frm_editar_produccion" 
  action="<?php echo site_url(); ?>/producciones/guardar" method="post">
    <div class="row">

      <div class="col-md-4 text-center">
        <label for="">CODIGO PRODUCCION:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text" placeholder="Ingrese un codigo para produccion" 
        class="form-control" required name="cod_pro" value="" id="cod_pro">
      </div>

      <div class="col-md-4 text-center">
        <label for="">TIPO DE PRODUCCION:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text" placeholder="Ingrese el tipo de produccion" 
        class="form-control" required name="tipo_pro" value="" id="tipo_pro">
      </div>

      <div class="col-md-4 text-center">
        <label for="estado_pro">ESTADO DE PRODUCCION:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <select id="estado_pro" name="estado_pro">
          <option value="Excelente">Excelente</option>
          <option value="Bueno">Bueno</option>
          <option value="Regular">Regular</option>
          <option value="Malo">Malo</option>
        </select>
        <br>
      </div>

      <div class="col-md-4 text-center">
        <label for="">FECHA DE PRODUCCION:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text" placeholder="Ingrese la fecha de produccion" 
        class="form-control" name="fecha_pro" value="" id="fecha_pro">
      </div>
    </div>
    <br>
    <div class="col-md-12 text-center">
      <button type="submit" name="button" class="btn btn-primary">
        GUARDAR
      </button>
      &nbsp;
      <a href="<?php echo site_url(); ?>/producciones/index" class="btn btn-danger">CANCELAR</a>
    </div>
    <br>

  </form>
</div>
<br>
<br>
<script type="text/javascript">
    $("#frm_editar_produccion").validate({
        rules: {
            cod_pro: {
                required: true
            },
            tipo_pro: {
                required: true
            },
            estado_pro: {
                required: true
            },
            fecha_pro: {
                required: true
            }
        },
        messages: {
            cod_pro: {
                required: "POR FAVOR INGRESE EL CODIGO"
            },
            tipo_pro: {
                required: "POR FAVOR INGRESE EL TIPO DE PRODUCCION"
            },
            estado_pro: {
                required: "POR FAVOR INGRESE EL ESTADO"
            },
            fecha_pro: {
                required: "POR FAVOR INGRESE LA FECHA"
            }
        }
    });
</script>