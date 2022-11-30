<?php
 echo view("plantillas/header");
?>
<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Servico de registro de citas:</h2>
<form action ="<?phP echo base_url()?>/veterinaria/guardar"method="POST" >
<form class="row g-3">
  <div class="col-md-6">
    <label for="Nombre" class="form-label">Nombre de la mascota:</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" required>
  </div>
  <div class="col-md-6">
    <label for="Especie" class="form-label">Especie:</label>
    <input type="text" class="form-control" id="Especie" name="Especie" required>
  </div>
  <div class="col-12">
    <label for="Servicio" class="form-label">Servicio:</label>
    <select class="form-select" aria-label="Default select example" id="Servicio" name="Servicio" required>
  <option selected>Selecciona:</option>
  <option value="Control mensual">Control mensual</option>
  <option value="Revision">Revicion</option>
  <option value="Vacunacion">Vacunacion</option>
  <option value="Esterilizacion">Esterilizacion</option>
  <option value="Intervencion quirirurgica">Intervencion quirurgica</option>
  <option value="Adopcion">Adopcion</option>
  <option value="Sala de partos">Sala de partos</option>
</select>
  </div>
  <div class="col-12">
    <label for="Servicio2" class="form-label">Otro servicio:</label>
    <select class="form-select" aria-label="Default select example" id="Servicio2" name="Servicio2" required> 
  <option selected>Requisitos opcionales:</option>
  <option value="Peluqueria">Peluqueria</option>
  <option value="Aseo">Aseo</option>
  <option value="Croquetas">Croquetas</option>
  <option value="Servicio de paseaperros">Servicio de paseaperros</option>
  <option value="Medicaciones">Medicaciones</option>
</select>
  </div>
  <div class="col-md-6">
    <label for="Dueño" class="form-label">Datos del dueño</label>
    <input type="text" class="form-control" id="Dueño" name="Dueño" required>
  </div>
  <div class="col-md-6">
    <label for="Total" class="form-label">Valor a pagar:</label>
    <input type="text" class="form-control" id="Total" name="Total" required>
  </div>
  <br>
  <button for="submit" class="btn btn-success" >Guardar cita</button>
    <button class="btn btn-warning"><a href="<?php  echo base_url()?>/veterinaria">Cancelar </a></button>
</br>
  </div>
  
</form>