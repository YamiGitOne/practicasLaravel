<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    //creo método
    public function template_inicio(){

        return view('template.home');
    }
}
