<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <br>
      <br>
      <h1 style="color:red;"><b>NUEVO PARTO</b></h1>
      <br>
      <br>
    </div>
  </div>
</div>

<div class="container">
  <form class="" id="frm_editar_parto"
  action="<?php echo site_url(); ?>/partos/guardar" method="post">
    <div class="row">

      <div class="col-md-4 text-center">
        <label for="">CODIGO PARTO:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text" placeholder="Ingrese un codigo para parto" 
        class="form-control" 
        required
        name="cod_par" value="" id="cod_par">
      </div>

      <div class="col-md-4 text-center">
        <label for="">NUMERO DE PARTOS:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text" placeholder="Ingrese el numero de partos" 
        class="form-control" 
        required
        name="num_par" value="" id="num_par">
      </div>

      <div class="col-md-4 text-center">
        <label for="">FECHA DEL PARTO:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text" placeholder="Ingrese la fecha del parto" 
        class="form-control" 
        required
        name="fecha_par" value="" id="fecha_par">
      </div>

    </div>
    <br>
    <div class="col-md-12 text-center">
      <button type="submit" name="button" class="btn btn-primary">
        GUARDAR
      </button>
      &nbsp;
      <a href="<?php echo site_url(); ?>/partos/index" class="btn btn-danger">CANCELAR</a>
    </div>
    <br>

  </form>
</div>
<br>
<br>
<script type="text/javascript">
  $("#frm_editar_parto").validate({
    rules: {
      cod_par: {
        required: true
      },
      num_par: {
        required: true
      },
      fecha_par: {
        required: true
      }
    },
    messages: {
      cod_par: {
        required: "POR FAVOR INGRESE EL CODIGO"
      },
      num_par: {
        required: "POR FAVOR INGRESE EL NUMERO DE PARTOS"
      },
      fecha_par: {
        required: "POR FAVOR INGRESE LA FECHA"
      }
    }
  });
</script>