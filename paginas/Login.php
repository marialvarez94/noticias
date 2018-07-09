  <?php 
include('metodos.php');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title></title>

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




<div class="container">
  <div class="row">
    <div class="col-md-4">
      
      
    </div>
     <div class="col-md-4 text-center" style="top:150px;">
      <h2 class="">Loguin</h2>

      <form action="" class="form-horizontal" method="POST">
          <div class="form-group">
            <input type="text" name="user" placeholder="User" class="form-control">
          </div>
           <div class="form-group">
            <input type="password" name="Pass" placeholder="Pass" class="form-control">
          </div>
           <div class="form-group">
            <input type="submit" name="Login" value="lOGIN" class="btn btn-success">
          </div>
      </form>
      
      <?php 
          if (isset($_POST['Login'])) {
                login();
               }     
       ?>
    </div>
  </div>
</div>
 </body>
 </html>
  