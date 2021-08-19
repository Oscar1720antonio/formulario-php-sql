<?php
include '../CONEXION/conection.php';
$sql = "SELECT * FROM empleado WHERE id=".$_GET["id"];
$pro = mysqli_query($conn,$sql);
$resultado = mysqli_fetch_assoc($pro);
mysqli_close($conn);
?>

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
		<a class="navbar-brand" href="#">OSCAR</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor02">
			<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Empleados<span class="sr-only">(current)</span></a>
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
				<h1 class="display-3">Actualizar Empleado</h1>
			</div>
		</div>
	</div>


    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
            <form action="actualizarEmpleadoControlador.php" method="post">

                    <input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-dismissible alert-success">
                                <strong>Fecha de Actualizacion: </strong> <?php echo $resultado["update_at"]; ?>.
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control" id="" name="nombre" value="<?php echo $resultado["nombre"]; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Puesto laboral</label>
                                <input type="text" class="form-control" id="" name="puesto" value="<?php echo $resultado["puesto"]; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Vacuna</label>
                               
                                <input class="form-control" value="<?php echo $resultado["vacuna"]; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Dosis</label>
                                <select  id="estado" name = "estado"   class="form-control">
                                <option selected>Dosis</option>
                                <option value="En Progreso">Primera</option>
                                <option value="Protegido">Segunda</option>
                                <option value="En Riesgo">Ninguna</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    
                    
                    <input type="submit" class="btn btn-primary col-md-12" value="Guardar Cambios">

                </form>
            </div>
        </div>
    </div>
    
</body>
</html>


