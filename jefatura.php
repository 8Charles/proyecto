<?php 

	session_start();
	if (!isset($_SESSION['rol'])) {
		header('location/proyecto');
	}else{
		if ($_SESSION['rol'] !=1) {
			header('location:login.php');
		}
	}
	

	
 ?>


	
	



<!DOCTYPE html>
<html>
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  
    <title>J e f a t u r a</title>
    <h2> Holis <?php echo $_SESSION['rol'] ?> </h2>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bostrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <div class="container">
      <h1 class="h1-jef">Investigador</h1>
    <!--<span>or <a href="signup.php">SignUp</a></span>-->
    

    </div>   
                          
  
    <main class="container ">
    	<nav class="navbar navbar-light bg-light sticky-top"> 
       

      <ul class="navbar-nav mr-3 ml-6 text-center">
      <div class="d-flex flex-row justify-content-around"> 
      <li class="nav-item active">
      <a class="nav-link mr-5" href="#">Inicio</a></li>

      <li class="nav-item dropdown">
        <a class="nav-link mr-5 dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Consultar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Por No. de inventario</a>
          <a class="dropdown-item" href="#">Por No. de serie</a>
          <a class="dropdown-item" href="#">Todos</a>
          
        </div>
      </li>

        <li class="nav-item dropdown">
        <a class="nav-link mr-5 dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Validar bajas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">No. de inventario</a>
          <a class="dropdown-item" href="#">No. de inventario</a>
       
        </div>
        
      </li>
       <li class="nav-item active">
      <a class="nav-link mr-5" href="cerrarsesion.php">Cerrar sesion</a></li>

        

     
    </div>
  </ul>
     
      
     </nav>
     
    </main> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>

</html>