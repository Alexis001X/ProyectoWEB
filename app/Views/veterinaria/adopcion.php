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

    <title>Postres</title>
    <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Peticion de Postres:</h2>
    <h3>Revisa nuestra tabla y pida un postre a su buen Gusto</h3>
  </head>
  <body>
  <table class="table table-warning table-striped">
  <caption>Tabla de postres para el pedido:</caption>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre:</th>
      <th scope="col">Especie:</th>
      <th scope="col">Raza:</th>
      <th scope="col">Sexo:</th>
      <th scope="col">Edad:</th>
      <th scope="col">Centro de adopcion:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Loky</td>
      <td>Perro</td>
      <td>Golden</td>
      <td>Macho</td>
      <td>4 semanas</td>
      <td>C.C El recreo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Gema</td>
      <td>Gato</td>
      <td>Persa</td>
      <td>Hembra</td>
      <td>5 meses</td>
      <td>Lugar por definir</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Rex</td>
      <td>Perro</td>
      <td>Cavalier</td>
      <td>Macho</td>
      <td>2 años</td>
      <td>Sector Chillogallo, Tienda "Al costo"</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Gary</td>
      <td>gato</td>
      <td>Siames</td>
      <td>Macho</td>
      <td>6 meses</td>
      <td>Sector la basilica, casa 25</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Gunter</td>
      <td>Canario</td>
      <td>-----</td>
      <td>Macho</td>
      <td>1 mes</td>
      <td>Sector guamani, tienda "Lovepet"</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Bonnery</td>
      <td>Conejo</td>
      <td>Albino</td>
      <td>Hembra</td>
      <td>3 meses</td>
      <td>Sector tambillo, Escuela "fe y alegria"</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Chems</td>
      <td>Perro</td>
      <td>Shiba inu</td>
      <td>Hembra</td>
      <td>1 año</td>
      <td>Sector la floresta, papeleria "Compured"</td>
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