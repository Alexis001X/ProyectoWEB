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

    <title>Centro del restaurante</title>
  </head>
  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Centro del restaurante:</h2>
    <h3>Revisa nuestra tabla y reservas para mas veneficios del cliente</h3>
  <body>

  <table class="table table-success table-striped">
  <caption class="navbar navbar-dark bg-primary">Tabla de platos tipicos:</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">COMIDAS TIPICAS </th>
      <th scope="col">Plato</th>
      <th scope="col">Numero de menu</th>
      <th scope="col">Costo</th>
      <th scope="col">Reservas</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Chuchucaras</td>
      <td> pequeño</td>
      <td>6</td>
      <td>$5.00</td>
      <td>2022/11/28</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>llapingachos</td>
      <td>mediano</td>
      <td>3</td>
      <td>$2.00</td>
      <td>2022/11/30</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Encebollado</td>
      <td>Mixto</td>
      <td>1</td>
      <td>$2.00</td>
      <td>2022/12/10</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>ceviche</td>
      <td>pulpo</td>
      <td>9</td>
      <td>5.00$</td>
      <td>Reservado</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Seco de pollo</td>
      <td>Normal</td>
      <td>1</td>
      <td>2.00$</td>
      <td>2022/12/11</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Tripa mishqui</td>
      <td>Mixto</td>
      <td>2</td>
      <td>3.00$</td>
      <td>Reservado</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>PIF</td>
      <td>al año</td>
      <td>22 semanas</td>
      <td>12.00$</td>
      <td>Agotada</td>
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
