<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
  <script src="{{asset("js/jquery-3.2.1.js")}}"></script>

<form action="{{url('/guardaCategoria')}}" method="POST"  class="form-horizontal">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">

  <fieldset>
    <legend></legend>
    <div class="form-group">
      <label for="nombre" class="col-lg-4 control-label">Nombre</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
      </div>
    </div>
        </div>
        </div>
         <div  class="col-lg-12">
    <button type="submit" class="btn btn-primary">Registrar</button>
    
  
  </div>

        </fieldset>
        </form>