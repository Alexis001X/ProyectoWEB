<?php

namespace App\Models;
use CodeIgniter\Model;

class Veterinaria extends Model
{ 
    
    protected $table = 'animales';

    protected $allowedFields =['nombre','especie','servicio','servicio2','dueño','Total'];
   
}