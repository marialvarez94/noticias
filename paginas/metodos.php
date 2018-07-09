<?php 

function conectar(){
require_once 'Config.php';
$conexion=new mysqli (DBHOST,DBUSER,DBPASS,DBNAME);
return $conexion;
}


function login(){

	$conexion=conectar();

	$user=$_POST['user'];
	$pass=$_POST['Pass'];
	
	$consulta="SELECT * FROM usuarios where nombre='$user' and pass='$pass' ";
	 $resultado=$conexion -> query($consulta);

                        if (!$resultado) {
                            echo 'No se pudo ejecutar la consulta:';
                            exit;
                        }else{
                        	 session_start(); 
          						$_SESSION['usuario'] =$user;
    							$_SESSION['estado'] = 'Autenticado';
                          			header('location: logueado.php');

                 }
                 $conexion->close();
}
function buscaridUser(){
	$id;

	$user=$_SESSION['usuario'];
	$conexion=conectar();
		$consulta="SELECT * FROM usuarios where nombre = '$user'";
		$resultado=$conexion -> query($consulta);
		if (!$resultado) {
			
		}else{
			$registro=$resultado-> fetch_assoc();
			$id=$registro['iduser'];
			echo $id;
		}
		$conexion->close();
return $id;

}
function agregarNotiicia(){
	
	$id=buscaridUser();
	$titulo=$_POST['titulo'];
	$cuerpo=$_POST['cuerpo'];

		$conexion=conectar();	
		$consulta="INSERT INTO `noticias` (`idnoticias`, `titulo`, `cuerpo`, `iduser`) VALUES (NULL, '$titulo', '$cuerpo', '$id')";
		$resultado=$conexion -> query($consulta);
	$conexion->close();
}
function Buscar(){
$BuscarU=$_POST['Buscar']; 
$conexion=conectar();
	$consulta = "SELECT * from usuarios JOIN noticias on usuarios.iduser=noticias.iduser WHERE  titulo =  '$BuscarU' ";
                          $resultado=$conexion -> query($consulta);
                        if (!$resultado) {
                            echo 'No se pudo ejecutar la consulta: ';
                            exit;
                        }else{
                          while ($registro = $resultado -> fetch_assoc()){
                          echo "<tr>";
                          $var=$registro["titulo"];
                            echo '<div class="contenido"> <h4>USTED REALIZO LA SIGUIENTE BUSQUEDA: </BR></BR>'.'TITULO: '.$registro["titulo"]."</h4>
                          </br>".
                          '<h4>'.$registro["cuerpo"]."</h4>
                          <br> ".
                          'AUTOR: <h5>'.$registro["Nombre"].'</h5></div><div class="separador">--</div>'; 

                 }
          }
          $conexion->close();
}


function ListarNoticias(){

$conexion=conectar();
	$consulta = "SELECT titulo, cuerpo, nombre from noticias inner join usuarios on usuarios.iduser=noticias.iduser";   
                          $resultado=$conexion -> query($consulta);
                        if (!$resultado) {
                            echo 'No se pudo ejecutar la consulta: ' . mysql_error();
                            exit;
                        }else{
                          while ($registro = $resultado -> fetch_assoc()){

                          echo '<div class="contenido"> <h1>'.'TITULO: '.$registro["titulo"]."</h1>
                          </br>".
                          '<h4>'.$registro["cuerpo"]."</h4>
                          <br> ".
                          'AUTOR: <h5>'.$registro["nombre"].'</h5></div><div class="separador">--</div>';	

                 }
          }
          $conexion->close();
}


function agregarUsuarios(){
  
  $Nombre=$_POST['Nombre'];
  $Email=$_POST['Email'];
  $pass=$_POST['pass'];

    $conexion=conectar(); 
    $consulta="INSERT INTO `usuarios` (`iduser`, `Nombre`, `Email`, `pass`) VALUES (NULL, '$Nombre', '$Email', '$pass')";
    $resultado=$conexion -> query($consulta);
  $conexion->close();
}



function BuscarNoticia(){
$id=buscaridUser();
$conexion=conectar();
  $consulta = "SELECT titulo, cuerpo, nombre from noticias inner join usuarios on usuarios.iduser=noticias.iduser WHERE usuarios.iduser=$id";   
                          $resultado=$conexion -> query($consulta);
                        if (!$resultado) {
                            echo 'No se pudo ejecutar la consulta: ' . mysql_error();
                            exit;
                        }else{
                          while ($registro = $resultado -> fetch_assoc()){

                          echo '<div class="contenido"> <h1>'.'TITULO: '.$registro["titulo"]."</h1>
                          </br>".
                          '<h4>'.$registro["cuerpo"]."</h4>
                          <br> ".
                          'AUTOR: <h5>'.$registro["nombre"].'</h5></div><div>--</div>'; ?>

                          <form action="" method="POST" class="form-horizontal"> 
             
                              <div class="form-group">
                              <input type="submit" name="eliminarnot" value="Eliminar esta noticia" class="btn btn-primary">
                              
                             </div>

                          </form>


                          <?php

                            if (isset($_POST['eliminarnot'])) {
                              echo "hbhjbhjbññññññññññ";
                            }

                            ?>


                            <?php

                          

                 }
          }
          $conexion->close();

       


          
}



 ?>