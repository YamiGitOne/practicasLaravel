<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function email_inicio()
    {
        //retorna vista en carpeta email y en archivo llamado home
        return view('email.home');
    }
    public function mail_enviar(Request $request)
    {
        
    }
}
