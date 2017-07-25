
<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
  <script src="{{asset("js/jquery-3.2.1.js")}}"></script>

<form action="{{url('/guardaProductos')}}" method="POST"  class="form-horizontal">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">

  <fieldset>
    <legend></legend>
    <div class="form-group">
      <label for="nombre" class="col-lg-4 control-label">Nombre</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
      </div>
    </div>
    <div class="form-group">
      <label for="descripcion" class="col-lg-4 control-label">Descripcion</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion">


        </div>
        </div>

      <div class="form-group">
      <label for="codigo" class="col-lg-4 control-label">Codigo</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="codigo" placeholder="Codigo">


        </div>
        </div>

        <div class="form-group">
      <label for="precio" class="col-lg-4 control-label">Precio</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="precio" placeholder="Precio">


        </div>
        </div>

        <div class="form-group">
      <label for="piezas" class="col-lg-4 control-label">Piezas</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="piezas" placeholder="Piezas">


        </div>
        </div>

        

     
 
    <div  class="col-lg-12">
		<button type="submit" class="btn btn-primary">Registrar</button>
		
	
	</div>






         </fieldset>
</form>

