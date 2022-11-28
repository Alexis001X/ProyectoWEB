<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Veterinaria;

class VeterController extends Controller{

    public function index(){
        $veterinaria = new Veterinaria(); 
        $datos['animales'] = $veterinaria->orderBy('id','ASC')->findAll();
        return view('veterinaria/lista', $datos); 
    }
    public function crear(){
        return view('veterinaria/crear');
    }
    public function guardar(){
        $veterinaria = new Veterinaria();
        $datos=[
            "nombre"    => $this->request->getVar("Nombre"),
            "especie"  =>$this->request->getVar("Especie"),
            "servicio"       =>$this->request->getVar("Servicio"),
            "servicio2"     =>$this->request->getVar("Servicio2"),
            "dueño"       =>$this->request->getVar("Dueño"),
            "Total"       =>$this->request->getVar("Total")
        ];
        $veterinaria->insert($datos);
        return $this->response->redirect(site_url("/veterinaria"));
    }
    public function eliminar($id){
        $veterinaria = new Veterinaria();
        $veterinaria->where("id",$id)->delete($id);
        return $this->response->redirect(site_url("/veterinaria"));
    }
    public function editar($id){
        $veterinaria=new Veterinaria();
        $datos["animales"]=$veterinaria->where("id",$id)->first();
        return view("veterinaria/editar",$datos);
    }
    public function actualizar(){
        $veterinaria = new Veterinaria();
        $datos=[
            "nombre"    =>$this->request->getVar("Nombre"),
            "especie"  =>$this->request->getVar("Especie"),
            "servicio"       =>$this->request->getVar("Servicio"),
            "servicio2"     =>$this->request->getVar("Servicio2"),
            "dueño"       =>$this->request->getVar("Dueño"),
            "Total"       =>$this->request->getVar("Total")
        ];
        $veterinaria->update($this->request->getVar("id"),$datos);
        return $this->response->redirect(site_url("/veterinaria"));
    }
   
}