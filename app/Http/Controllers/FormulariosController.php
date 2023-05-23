<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class FormulariosController extends Controller
{
    //Creo el método
    public function formularios_inicio(){
        return view('formularios.home');
    }

    //creo método para formulario simple
    public function formularios_simple()
    {
        $paises=array(
            array(
                "nombre" => "Chile", "id" => 1
            ),
            array(
                "nombre" => "Perù", "id" => 2
            ),
            array(
                "nombre" => "Venezuela", "id" => 3,
            ),
            array(
                "nombre" => "Mèxico", "id" => 4
            ),
            array(
                "nombre" => "España", "id" => 5
            )
        );

        $intereses=array(
            array(
                "nombre" => "Deportes", "id" => 1
            ),
            array(
                "nombre" => "Música", "id" => 2
            ),
            array(
                "nombre" => "Religión", "id" => 3,
            ),
            array(
                "nombre" => "Comida", "id" => 4
            ),
            array(
                "nombre" => "Viajes", "id" => 5
            )
        );
        return view('formularios.simple', compact('paises', 'intereses'));
    }


     //creo método para formulario simple método post
     public function formularios_simple_post(Request $request)
     {
        //echo $request->input('correo');
        $request->validate(
            [
                'nombre' => 'required|min:3',
                'correo' => 'required|email:rfc,dns',
                'password' => 'required|min:6',
            ],
            [
                'nombre.required' => 'El campo nombre està vacío',
            ]
        );
        
    }

     //creo método para formulario upload
    public function formularios_upload ()
    {
        return view('formularios.upload');
       
   }
   public function formularios_upload_post(Request $request)
     {
      $request->validate(
        [
            'foto'=>'required|mimes:jpg,png|max:2040'
        ],
        [
            'foto.required'=>'El campo foto está vacío',
            'foto.mimes'=>'El campo foto debe ser jpg|png',
        ]
        ); 
        switch($_FILES['foto']['type'])
        {
            case 'image/png' :
                $archivo=time().".png";
            break;
            case 'image/jpg' :
                $archivo=time().".jpg";
            break;

        } 
        copy($_FILES['foto']['tmp_name'], 'upload/udemy/'.$archivo);

        $request->session()->flash('css','success');
        $request->session()->flash('mensaje',"Se subió el archivo exitosamente");
        return redirect()->route('formularios_upload');
        
    }
}
