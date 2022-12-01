<?php
 echo view("plantillas/header");
?>
<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Servico de registro de Reservaciones:</h2>
<form action ="<?phP echo base_url()?>/veterinaria/actualizar"method="POST" >
<br>
<div class="row mb-3">
    <label for="Nombre" class="col-sm-2 col-form-label">Salas:</label>
    <div class="col-sm-10">
      <input type="text" name="Nombre" class="form-control" id="Nombre" value="<?=$animales["nombre"]?>">
    </div>
</br>
<br>
    <div class="row mb-3">
    <label for="Especie" class="col-sm-2 col-form-label">Horario:</label>
    <div class="col-sm-10">
      <input type="text" name="Especie" class="form-control" id="Especie" value="<?=$animales["especie"]?>">
    </div>
</br>
<br>
    <div class="row mb-3">
    <label for="Servicio" class="col-sm-2 col-form-label">Disponibilidad:</label>
    <div class="col-sm-10">
      <input type="text" name="Servicio" class="form-control" id="Servicio" value="<?=$animales["servicio"]?>">
    </div>
</br>
<br>
    <div class="row mb-3">
    <label for="Servicio2" class="col-sm-2 col-form-label">Servicio de comida:</label>
    <div class="col-sm-10">
      <input type="text" name="Servicio2" class="form-control" id="Servicio2" value="<?=$animales["servicio2"]?>">
    </div>
</br>
<br>
    <div class="row mb-3">
    <label for="Dueño" class="col-sm-2 col-form-label">Servicio de licores:</label>
    <div class="col-sm-10">
      <input type="text" name="Dueño" class="form-control" id="Dueño" value="<?=$animales["dueño"]?>">
    </div>
</br>
<br>
    <div class="row mb-3">
    <label for="Total" class="col-sm-2 col-form-label">Total a pagar</label>
    <div class="col-sm-10">
      <input type="text" name="Total" class="form-control" id="Total" value="<?=$animales["Total"]?>">
    </div>
</br>
    <br>
    <input type="hidden" name="id" id="id" value="<?=$animales["id"]?>">
    <br/>
    <br>
    <div class="d-grid gap-2 d-md-block">
    <button for="submit" class="btn btn-success">Actualizar</button>
    <button class="btn btn-warning"><a href="<?php  echo base_url()?>/veterinaria">Cancelar </a></button>
    </div>
  
</form>