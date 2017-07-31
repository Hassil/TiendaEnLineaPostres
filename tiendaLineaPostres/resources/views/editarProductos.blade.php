
<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
  <script src="{{asset("js/jquery-3.2.1.js")}}"></script>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">




      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/administrador')}}">Inicio</a></li>
      </ul>
      
    </div>
  </div>
</nav>
<form action="{{url('/actualizarProductos')}}/{{$productos->id}}" method="POST"  class="form-horizontal">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">

  <fieldset>
    <legend class="col-md-12 text-center"> Editar producto</legend>
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

        

     
 
    <div  class="col-md-12 text-center">
		<button type="submit" class="btn btn-primary">Actualizar</button>
		
	
	</div>






         </fieldset>
</form>

