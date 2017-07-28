
<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
  <script src="{{asset("js/jquery-3.2.1.js")}}"></script>

<form action="{{url('/actualizarProductos')}}/{{$productos->id}}" method="POST"  class="form-horizontal">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">

  <fieldset>
    <legend></legend>
    <div class="form-group">
      <label for="nombre" class="col-lg-4 control-label">Nombre</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{$productos->nombre}}">
      </div>
    </div>
    <div class="form-group">
      <label for="descripcion" class="col-lg-4 control-label">Descripcion</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" value="{{$productos->descripcion}}">


        </div>
        </div>

      <div class="form-group">
      <label for="codigo" class="col-lg-4 control-label">Codigo</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="codigo" placeholder="Codigo" value="{{$productos->codigo}}">


        </div>
        </div>

        <div class="form-group">
      <label for="precio" class="col-lg-4 control-label">Precio</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="precio" placeholder="Precio" value="{{$productos->precio}}">


        </div>
        </div>

        <div class="form-group">
      <label for="piezas" class="col-lg-4 control-label">Piezas</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="piezas" placeholder="Piezas" value="{{$productos->piezas}}">


        </div>
        </div>

         <div class="form-group">
      <label for="categoria" class="col-lg-4 control-label">Categoria</label>
      <div class="col-lg-6">
<select name="idCategoria" class="form-control" value="{{$productos->idCategoria}}>
    <option value="0">Seleccione categoria</option>
    @foreach($categorias as $c)
    <option value="{{$c->id}}">{{$c->nombre}}</option>
    @endforeach


  </select>     
   </div>
    </div>

        

     
 
    <div  class="col-lg-12">
		<button type="submit" class="btn btn-primary">Registrar</button>
		
	
	</div>






         </fieldset>
</form>
