<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use Input;


class AjaxController extends Controller
{

    public function posted(Request $request)
    {

    	//echo $_POST['nombre_prod'];
        $name = $request->input('nombre_prod');

    	return view('recibir_ajax',array('res'=>$name));

    }		
 

}