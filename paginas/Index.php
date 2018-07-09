<?php 

include('metodos.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Noticias
	</title>

	<!-- BOOTSTRAP CSS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

        <!-- FONT AWESOME -->
        <link rel="stylesheet" type="text/css" href="stilos.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <!-- CUSTOME CSS -->
        <link rel="stylesheet" type="text/css" href="main.css">
 
</head>
<body>

<!--NAVIGATION -->
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


 <!-- home -->

    <header id="home-section">
        <div class="dark-overlay">
            <div class="home-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h1 class="display-4">BIENVENIDO A NOTICIAS </h1>

                            <!--ITEM -->
                            <div class="d-flex flex-row">
                                <div class="p-4">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div class="p-4">
                                    Encontrarás las noticias más recientes y relevantes de tu ciudad.
                                </div>
                                
                            </div>

                            <div class="d-flex flex-row">
                                <div class="p-4">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div class="p-4">
                                    Economia, Ciencia, Salud, Politica, Deportes y Entretenimiento.
                                </div>
                                
                            </div>

                            <div class="d-flex flex-row">
                                <div class="p-4">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div class="p-4">
                                    Te invitamos a participar! Registrate y publica tus mejores reportajes con nosotros.
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-lg-4">

                            <div class="card text-center" style="background-color: #c0392b">
                                <div class="card-body">
                                    <h3>NOTICIAS</h3>
                                    <p>Encuentra las noticias de tu preferencia.
                                        Presiona enviar y la podrás ver al final
                                     </p>
                                    <form action="" method="POST" class="form">
                                        <div class="form-group">
                                            <input type="text" name="Buscar" class="form-control-lg" placeholder="Buscar">
                                        </div>
                                        
                                       <div class="form-group">
											<input type="submit" name="Buscaru" class="btn btn-outline-light btn-block" >
					
										</div>
                                        
                                    </form>
                                </div>
                            </div>
  
                        </div>

                    </div>
                    
                </div>
                
				 
				</div>
            
        </div>
        
    </header>
					<DIV class="lista">
						<div class="cont">
								<?php 
											
								ListarNoticias();
								?>
						</div>
					               
					 </DIV>

					 <DIV class="lista">
						<div class="cont">
								<?php 
											
								if (isset($_POST['Buscaru'])) {
									buscar();
									
								}
								?>
						</div>
					               
					 </DIV>
	</body>
</html>
	


	 