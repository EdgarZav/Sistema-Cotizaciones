<?php require_once INCLUDES.'head.php'; ?>
<?php require_once INCLUDES.'navbar.php'; ?>

<!-- Content -->
<div class="container-fluid py-5">
<div class="row">
  <div class="col-12 wrapper_notifications">
  
  </div>
</div>
  <div class="row">
    <div class="col-lg-7 col-12">
     
     <!-- datos de la empresa -->
    <div style="border-width:2px; border-color: #375ca6;" class="card mb-3">
      <div style="background-color: #3B5CBF;" class="card-header"><b style="color: #f2f2f2;">Información del cliente</b></div>
      <div class="card-body">
        <form action="">
          <div class="form-group row">
                 <div class="col-4">
                  <label for="nombre" ><b>Vendedor</b></label>
                   <input style="border-color: #61748C; border-width:1px;" type="text" class="form-control" id="nombre" 
                   placeholder="Nombre vendedor" autofocus required >
                 </div>  
                 <div class="col-4">
                  <label for="empresa"><b>Empresa</b></label>
                   <input style="border-color: #61748C; border-width:1px;" type="text" class="form-control" id="empresa" 
                   placeholder="Nombre de la empresa" required>
                 </div>  
                 <div class="col-4">
                  <label for="email" style="border-color: #61748C; border-width:1px;"><b>E-mail a enviar </b></label>
                   <input style="border-color: #61748C; border-width:1px;" type="email" class="form-control" id="email" 
                   placeholder="email@gmail.com" required>
                 </div>    
                 <div class="col-4"><br>
                  <label for="proyecto"><b>Nombre proyecto</b></label>
                   <input style="border-color: #61748C; border-width:1px;" type="text" class="form-control" id="proyecto" 
                   placeholder="Nombre de proyecto" required>
                 </div>  
                 <div class="col-4"><br>
                  <label for="nocoti"><b>No. Cotización</b></label>
                   <input style="border-color: #61748C; border-width:1px;" type="text" class="form-control" id="nocoti" 
                   placeholder="# Cotización" required>
                 </div>  
          </div>
        </form>
      </div>
    </div>

    <!-- datos del producto -->
    <div class="card" style="border-width:2px; border-color: #375ca6;">
      <div style="background-color: #3B5CBF;" class="card-header"><b style="color: #F2F2F2;">Agregar nuevo concepto</b></div>
      <div class="card-body">
        <form id="add_to_quote" method="POST">
          <div class="form-group row">
            <div class="col-3">
              <label for="concepto"><b>Concepto</b></label>
              <input style="border-color: #61748C; border-width:1px;" type="text" class="form-control" id="concepto" name="concepto" placeholder="Concepto" required>
            </div>
            <div class="col-3">
                <label for="marca"><b>Marca</b></label>
                <input style="border-color: #61748C; border-width:1px;" type="text" class="form-control" id="marca" name="marca" placeholder="Marca" required>
              </div>
            <div class="col-3">
              <label for="tipo"><b>Tipo de producto</b></label>
                <select style="border-color: #61748C; border-width:1px;" name="tipo" id="tipo" class="form-control">
                  <option value="producto"><b>Producto</b></option>
                  <option value="servicio"><b>Servicio</b></option>
                </select>
            </div>
            <div class="col-3">
              <label for="cantidad"><b>Cantidad</b></label>
              <input style="border-color: #61748C; border-width:1px;" type="number" class="form-control" id="cantidad"
               name="cantidad" min="1" max="9999" value="1" required>
            </div>
            <div class="col-3"><br>
              <label for="precio_unitario"><b>Precio unitario</b></label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        $
                    </span>
                  </div>
                  <input style="border-color: #61748C; border-width:1px;" type="text" class="form-control" id="precio_unitario" 
                    name="precio_unitario" placeholder="0.00" required>
                </div>
            </div>
          </div>
            <br>
            <button style="background-color: #3B5CBF;" class="btn btn-primary" type="submit">
              Agregar concepto
            </button>
            <button style="background-color: #A60F2B;" class="btn btn-danger" type="reset">
              Cancelar
            </button>
        </form>
      </div>
    </div>
    </div>
    

    <!-- Editar concepto-->
    <div class="col-lg-5 col-12">
        <div class="wrapper_update_concept" style="display: none;">
          <div class="card mb-3" style="border-width:2px; border-color: #375ca6;">
            <div class="card-header" style="background-color: #3B5CBF;" class="card-header"><b style="color: #F2F2F2;">Editando concepto</b></div>
            <div class="card-body">
              <form id="save_concept" method="POST">
                <input type="hidden" class="form-control" id="id_concepto" name="id_concepto" required>
                <div class="form-group row">
                  <div class="col-3">
                    <label for="concepto">Concepto</label>
                    <input type="text" class="form-control" id="concepto" name="concepto" placeholder="Guitarra eléctrica" required>
                  </div>
                  <div class="col-3">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca de prodcuto" required>
                  </div>
                  <div class="col-3">
                    <label for="tipo">Tipo de producto</label>
                    <select name="tipo" id="tipo" class="form-control">
                      <option value="producto">Producto</option>
                      <option value="servicio">Servicio</option>
                    </select>
                  </div>
                  <div class="col-3">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" max="99999" value="1" required>
                  </div>
                  <div class="col-3">
                    <label for="precio_unitario">Precio unitario</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <input type="text" class="form-control" id="precio_unitario" name="precio_unitario" placeholder="0.00" required>
                    </div>
                  </div>
                </div>
                <br>
                <button style="background-color: #3B5CBF;" class="btn btn-success" type="submit">Guardar cambios</button>
                <button style="background-color: #A60F2B; "class="btn btn-danger" type="reset" id="cancel_edit">Cancelar</button>
              </form>
            </div>
          </div>
        </div>
    
    
    <!-- Fin Editar concepto-->


      <div style="border-color: #375ca6; border-width: 2px;" class="card">
        <div style="background-color: #3B5CBF;" class="card-header">
          <b style="color:#f2f2f2;" >Resumen de cotización</b>

          <button style="background-color: #A60F2B; border-color: #3B5CBF;"
          class="btn btn-danger float-right restart_quote">
            Reiniciar
          </button>
        </div>

        <div class="card-body wrapper_quote">
          
        </div>  
          <div class="card-footer">
            <button style="background-color: #3B5CBF;" class="btn btn-dark" id="generate_quote">Generar cotización</button>
            <a style="background-color: #D90B31; display: none;" class="btn btn-danger" id="download_quote" href="" >Descargar PDF</a>
            <button class="btn btn-dark" id="send_quote" style="display: none;">Enviar por correo electrónico</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- ends content -->

<?php require_once INCLUDES.'footer.php'; ?>

<div class="justify-content-center">
