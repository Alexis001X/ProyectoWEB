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

    <title>Costos</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/jumbotron/">

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
  <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Nuevos servicios proximamente:</h1>
        <p class="col-md-8 fs-4">Estamos expandiendo nuestros servicios, mantente infomrado en la seccion de novedades sobre estos cambios</p>
        <button class="btn btn-primary btn-lg" type="button">Esperare</button>
      </div>
    </div>
    <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Productos y servicios:</h2>
    <table class="table table-success table-striped">
  <caption>Tabla de productos y servicios:</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Productos/servicios</th>
      <th scope="col">Precio</th>
      <th scope="col">Encargado</th>
      <th scope="col">Disponibilidad</th>
      <th scope="col">Horarios</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Peluqueria</td>
      <td>5.00$</td>
      <td>Srta. Alejandra Farias</td>
      <td>Si</td>
      <td>8:00 - 16:00</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Revicion</td>
      <td>15.00$</td>
      <td>Doctor. Mauricio Torrez</td>
      <td>Si</td>
      <td>8:00 - 17:00</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Entramiento</td>
      <td>95.00$</td>
      <td>Sra.Melissa Velez</td>
      <td>No (Agotado)</td>
      <td>12:00 - 15:00</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Croquetas procan 1Kl</td>
      <td>25.00$</td>
      <td>Sr.Andres Perez</td>
      <td>Si (en ventanilla)</td>
      <td>NO APLICA</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Juguetes masticables</td>
      <td>8.00$ - 15.00$</td>
      <td>Sr. Andres Perez</td>
      <td>Si (en ventanilla)</td>
      <td>NO APLICA</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Paseaperros</td>
      <td>3.00$ por hora</td>
      <td>Srta. Amanda Rivadeneira</td>
      <td>Si</td>
      <td>10:00 - 15:00</td>
    </tr>
    
  </tbody>

</table>
<button class="btn btn-warning"><a href="<?php  echo base_url()?>/veterinaria">Regresar </a></button>
<h5>Nota: Los registrso se actualizan cada hora, asi que pueden variar</h5>
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