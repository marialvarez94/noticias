<?php 
include('metodos.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	    

	    <!-- BOOTSTRAP CSS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

        <!-- FONT AWESOME -->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <!-- CUSTOME CSS -->
        <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <!--navbar navbar-expand-sm bg-dark navbar-dark fixed-top-->
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    NOTICIAS
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                    
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>

                         <li class="nav-item">
                            <a href="Login.php" class="nav-link">Login</a>
                        </li>

                         <li class="nav-item">
                            <a href="registrar.php" class="nav-link">Create</a>
                        </li>

                    </ul>
                    

                </div>
            </div>
        </nav>


		<div class="container" style="padding-top: 100px">
			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4">
					
					<form action="" method="POST" class="form-horizontal"> 
						   <div class="form-group">
						   	<input type="text" name="Nombre" placeholder="Escriba su nombre" class="form-control">
						   </div>
						   <div class="form-group">
						   	<input type="text" name="Email" placeholder="Escriba su email" class="form-control">
						   </div>
						   <div class="form-group">
						   	<input type="password" name="pass" placeholder="Escriba su password" class="form-control">
						   </div>
						   

						   <div class="form-group">
						   	<input type="submit" name="agregar" value="Agregar" class="btn btn-success">
						   </div>
                            
					</form>
				</div>
				<?php 
						if (isset($_POST['agregar'])) {
							agregarUsuarios();
						}
				 ?>
			</div>
		</div>
</body>
</html>