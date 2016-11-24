<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Collective\Html\HtmlServiceProvider;

use DB;

class CustomerController extends Controller
{
    public function select_customers()
    {
    	$result = DB::table('usuarios')->select('id', 'nombre','email')->get();
    	return view('/child')->with('data',$result);
    }


        public function select_customers2($id)
    {
    	
    	echo $id;	
    	$result2 = DB::table('usuarios')->where('id', '=', $id)->get();
    	return view('/child')->with('data',$result2);
        

    }
}
