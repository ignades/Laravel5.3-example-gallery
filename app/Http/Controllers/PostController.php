<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    //Metodo recibir datos

    public function posted(Request $request)
    {

    	//echo $_POST['nombre_prod'];
        $name = $request->input('nombre_prod');

    	return view('recibir',array('res'=>$name));

    }
}
