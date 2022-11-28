<form action ="<?phP echo base_url()?>/veterinaria/eliminar"method="GET" >
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre"value="<?=$animales["nombre"]?>">
    <br/>
    <br>
    <label for="Especie">Especie</label>
    <input type="text" name="Especie" id="Especie" value="<?=$animales["especie"]?>">
    <br/>
    <br>
    <label for="Servicio">Servicio</label>
    <input type="text" name="Servicio" id="Servicio" value="<?=$animales["servicio"]?>">
    <br/>
    <br>
    <label for="Servicio2">Servicio adicional</label>
    <input type="text" name="Servicio2" id="Servicio2" value="<?=$animales["servicio2"]?>">
    <br/>
    <br>
    <label for="Dueño">Datos dueño</label>
    <input type="text" name="Dueño" id="Dueño" value="<?=$animales["dueño"]?>">
    <br/>
    <br>
    <input type="hidden" name="id" id="id" value="<?=$animales["id"]?>">
    <br/>
    <br>
    <button for="submit">Eliminar</button>
    <br/>
    <br>
    <a href="<?php  echo base_url()?>/veterinaria">Cancelar </a>
   <br/>
</form>