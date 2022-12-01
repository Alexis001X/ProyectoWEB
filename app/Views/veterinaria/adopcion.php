<?php
 echo view("plantillas/header");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Postres y Cafés</title>
    <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Peticion de Postres:</h2>
    <h3>Revisa nuestra tabla y pida un postre o cafe a su buen Gusto</h3>
  </head>
  <body>
  <table class="table table-warning table-striped">
  <caption>Tabla de Postres y Cafe para el pedido:</caption>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre:</th>
      <th scope="col">Especie:</th>
      <th scope="col">Tamaño:</th>
      <th scope="col">Cantidad:</th>
      <th scope="col">Preferencia:</th>
      <th scope="col">Precio:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Cafe</td>
      <td>Vebida</td>
      <td>Mediano</td>
      <td>1</td>
      <td>Caliente</td>
      <td>$5.50</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Postre</td>
      <td>Helado</td>
      <td>Pequeño en cono</td>
      <td>2</td>
      <td>Con Grajeas</td>
      <td>$2.30</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Postre</td>
      <td>Bocaditos</td>
      <td>Mediano</td>
      <td>3</td>
      <td>-----</td>
      <td>$1.50</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Cafe</td>
      <td>Americano</td>
      <td>Grande</td>
      <td>1</td>
      <td>Caliente</td>
      <td>$1.50</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Cafe</td>
      <td>Capuchino</td>
      <td>Pequeño</td>
      <td>1</td>
      <td>Caliente</td>
      <td>$3</td>
    </tr>
    
  </tbody>
  
</table>
<button class="btn btn-warning"><a href="<?php  echo base_url()?>/veterinaria">Regresar </a></button>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  <?php
 echo view("plantillas/footer");
?>
</html>