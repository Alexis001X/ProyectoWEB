<?php
 echo view("plantillas/header");
?>
<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Servico de registro de Reservaciones:</h2>
<form action ="<?phP echo base_url()?>/veterinaria/guardar"method="POST" >
<form class="row g-3">
  <div class="col-md-6">
    <label for="Nombre" class="form-label">Salas:</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" required>
  </div>
  <div class="col-md-6">
    <label for="Especie" class="form-label">Horario:</label>
    <input type="text" class="form-control" id="Especie" name="Especie" required>
  </div>
  <div class="col-12">
    <label for="Servicio" class="form-label">Disponibilidad:</label>
    <select class="form-select" aria-label="Default select example" id="Servicio" name="Servicio" required>
  <option selected>Selecciona:</option>
  <option value="Control mensual">Disponible</option>
  <option value="Revision">Ocupada</option>
  <option value="Vacunacion">En mantenimiento</option>
  <option value="Esterilizacion">Fuera de servicio</option>
</select>
  </div>
  <div class="col-12">
    <label for="Servicio2" class="form-label">Servicio de comida:</label>
    <select class="form-select" aria-label="Default select example" id="Servicio2" name="Servicio2" required> 
  <option selected>Opciones:</option>
  <option value="Peluqueria">Buffeth abierto</option>
  <option value="Aseo">Menu personalizado</option>
  <option value="Croquetas">Platillos Gourmeth</option>
  <option value="Servicio de paseaperros">Comida tipica</option>
</select>
  </div>
  <div class="col-md-6">
    <label for="Dueño" class="form-label">Servicio de licores:</label>
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