<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css" media="screen">
    <title>Document</title>
</head>
<body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="../index.php">OSCAR</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor02">
			<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="./index.php">Empleado <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link danger" href="#">Cerrar sesion</a>
			</li>
			</ul>
		</div>
	</nav>


    <div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
			<div class="jumbotron">
				<h1 class="display-3">Crear empleado</h1>
			</div>
		</div>
	</div>


    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
            <form action="crearEmpleadoControlador.php" method="post">

                    <div class="row">
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control" required  id="" name="nombre" value="">
                            </div>
                        </div>
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Puesto laboral</label>
                                <input type="text" class="form-control" required id="puesto" name="puesto" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Vacuna</label>
                            <select  id="vacuna" name = "vacuna"   class="form-control">
                                <option value="" selected>Vacuna</option>
                                <option value="Sinopharm">Sinopharm</option>
                                <option value="AstraZeneca">AstraZeneca</option>
                                <option value="Sputnik V">Sputnik V</option>
                                <option value="Pfizer">Pfizer</option>
                                <option value="Moderna">Moderna</option>
                                <option value="Janssen">Janssen</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Fecha Vacunacion</label>
                                <input type="date" class="form-control" id="pri_dosis" name="pri_dosis" value="">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Dosis</label>
                                <select  id="estado" name = "estado"   class="form-control">
                                <option value="En Riesgo" selected>Dosis</option>
                                <option value="En Progreso">Primera</option>
                                <option value="Protegido">Segunda</option>
                                <option value="En Riesgo">Ninguna</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <br />
                                <input type="submit" class="btn btn-primary" value="Registrar empleado">
                            </div>
                        </div>
                    </div>               
                    
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>


