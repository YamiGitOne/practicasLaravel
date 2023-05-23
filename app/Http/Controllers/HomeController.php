<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //nombre del modelo home_inicio
    public function home_inicio(){
    $texto="hola Yami";
    $numero = 12;
    $paises=array(
        array(
            "nombre"=>"Perú", "dominio"=>"cl"
        ),
        array(
            "nombre"=>"Venezuela", "dominio"=>"ve"
        ),
        array(
            "nombre"=>"España", "dominio"=>"es"
        ),
        array(
            "nombre"=>"Bolivia", "dominio"=>"bl"
        ),
    );
//valores  entre corchetes variable a vista
    //return view('home.home', ['texto'=>$texto]);
    //otra manera de hacerlo con compact
    return view('home.home', compact ('texto','numero', 'paises'));
    
}
public function home_hola(){
    echo "hola desde mi controlador2";
}
public function home_parametros($id,$slug){
    echo "id=".$id."| slug=".$slug." | page=" .$_GET['page'];
    //parametros que se pueden pasar en la ruta por id, por slug, por parametros de tipo get
}
}
