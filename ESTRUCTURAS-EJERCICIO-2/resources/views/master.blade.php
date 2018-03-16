<!DOCTYPE html>
<html>
  
  <head>
    
    <title> Introducción </title>
    <!-- css boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
  </head>

  <body background="imagenes/fondos/fondo.jpeg" link="#ffffcc" vlink="#ffffcc" alink="#ffffcc">
      <br>
      <br>
      <center>
      <font color="white" face="Lithos Pro">
      <h1>
      <b> 
        <?php 
          echo "Busqueda de personas ";
        ?>
      </b>  
      </h1>
      </font>
      </center>
      </p>
      </p>

          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <center>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-1" src="imagenes/fondos/foto4.jpeg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-1" src="imagenes/fondos/foto5.jpeg" alt="Second slide">
              </div>
              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            </center>
          </div>
          <br><br>
          <div class="container-fluid">
          
          <nav class="nav nav-pills nav-justified">
            <a class="nav-item nav-link active" href="http://localhost/ESTRUCTURAS-EJERCICIO-2/ESTRUCTURAS-EJERCICIO-2/public/">Volver a la busqueda</a>&nbsp;&nbsp;
          </nav>
          </div>
          <br><br>
    <div class="container-fluid">
      
      @yield('contenido')
      
    </div>
    
    <!-- js boostrap -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>


</html>