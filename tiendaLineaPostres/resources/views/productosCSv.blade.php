<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrador</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
  <script src="{{asset("js/jquery-3.2.1.js")}}"></script>
</head>
<body>
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

<div class="col-sm-10 col-sm-offset-1 section">
	<div class="row form-default">
		<div class="col-xs-12">
			<h2 ng-if="!editar.status">Agregar nuevos productos via .CSV</h2>

			<form action="{{url('/guardarProductoCSV')}}" method="POST" enctype="multipart/form-data">
               <input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="detail">
							<div class="form-group">
								<div class="images">
									<h5 ng-show="editar.imgShow">Seleccione archivo</h5>
									<input type="file" class="form-control" name="archivoCSV" required>
								
								</div>
							</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div class="buttons text-right">
							<input type="submit" class="btn btn-success" value="Registrar">
						</div>
					</div>
				</div>
		    </form>
	    </div>
	</div>
</div>
</body>
</html>