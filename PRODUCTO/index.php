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
		<a class="navbar-brand" href="../index.php">HOME</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor02">
			<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Empleados <span class="sr-only">(current)</span></a>
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
				<h1 class="display-3">Empleados</h1>
				</div>
			</div>
		</div>
	</div>


	
	<div class="container ">
		<div class="row">
			<div class="col-md-12">

				<table class="table table-hover">
					<thead>
						<tr>
							<td>ID EMPLEADO</td>
							<td>NOMBRE</td>
							<td>PUESTO LABORAL</td>
							<td>NOMBRE DE VACUNA</td>
							<td>FECHA PRIMERA DOSIS</td>
							<td>FECHA SEGUNDA DOSIS</td>
							<td>ESTADO DE VACUNACION</td>
							<td>OPCIONES</td>
						</tr>
					</thead>
					<tbody>
						<?php
							include "../CONEXION/conection.php";
							$sql = "SELECT * FROM empleado";
							$result = $conn->query($sql);
							    // output data of each row
							    while($row = $result->fetch_assoc()) {
							        ?>
							        	<tr scope="row" class="table-dark">
							        		<td> <?php echo $row["id"] ?> </td>
							        		<td> <?php echo $row["nombre"] ?> </td>
							        		<td> <?php echo $row["puesto"] ?> </td>
							        		<td> <?php echo $row["vacuna"] ?> </td>
							        		<td> <?php echo $row["pri_dosis"] ?> </td>
							        		<td> <?php echo $row["seg_dosis"] ?> </td>
											<td> <?php echo $row["estado"] ?>  </td>
											 
							        		<td>
							        			<a href="actualizarEmpleadoVista.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">EDITAR</a>
							        			<a href="eliminarEmpleadoControlador.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">ELIMINAR</a>
							        		</td>
							        	</tr>
							        <?php
							    }
							
							$conn->close();
						?>
					</tbody>
					</table> 

			</div>
			
		</div>
	</div>

	<div class="container mb-5">
	<div class="row">
		<div class="col-md-6"></div>
		<div class="col-md-6">
			<a href="crearEmpleadoVista.php" class="btn btn-outline-success col-md-12">Registrar nuevo empleado</a>
		</div>
	</div>
	</div>

	<hr>
	<hr>
	
</body>
</html>