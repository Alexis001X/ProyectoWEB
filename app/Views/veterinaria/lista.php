<?php
 echo view("plantillas/header");
 echo view("plantillas/carousel");
?>
</pre>
<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Servicio de Reservaciones online:</h2>
    <h4>Puedes reservar desde la comodidad de tu casa, conoce nuestras fechas disponibles:</h4>
<a href="<?php echo base_url()?>/veterinaria/crear"><button class="btn btn-success">Crea un nuevo registro</button></a>

<table class="table table-striped">
    <thead>
        <tr>
        <td> ID </td>
        <td> Salas</td>
        <td> Horario</td>
        <td> Disponibilidad </td>
        <td> Servicio de comida </td>
        <td> Servicio de licores </td>
        <td> Total a pagar </td>
        </tr> 
    </thead>
        <tbody>
            <?php 
            $numero=1;
            foreach($animales as $animales):
            ?> 
             <tr>
                <td><?= $numero?></td>
                <td><?= $animales ['nombre']?></td>
                <td><?= $animales ['especie']?></td>
                <td><?= $animales ['servicio']?></td>
                <td><?= $animales ['servicio2']?></td>
                <td><?= $animales ['dueño']?></td>
                <td><?= $animales ['Total']?></td>
                <td><a href="<?php echo base_url()?>/veterinaria/editar/<?=$animales["id"]?>"><button>Modificar</a></button>|<a href="<?php echo base_url()?>/veterinaria/eliminar/<?=$animales["id"]?>"><button>Eliminar</button></a></td>
            </tr>
            <?php 
             $numero++;
            endforeach;
            ?>
        </tbody>
</table>
<?php
echo view("plantillas/cards");
?>
<?php
 echo view("plantillas/footer");
?>
