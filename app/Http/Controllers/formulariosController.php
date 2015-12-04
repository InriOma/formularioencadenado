<?php

namespace Pruebas\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Pruebas\Http\Requests;
use Pruebas\Http\Controllers\Controller;

class formulariosController extends Controller
{
    public function formulario1()
    {
    	 return view('formulario1');
    }

    public function formulario2()
    {
    	$data = \Request::all();

    	$reglas = ([
    			'nombre' => 'required',
    			'apellido' => ''
    		]);
    	$v = Validator::make($data,$reglas);

    	if($v->fails())
    	{	
    	  return redirect()->back()->withInput()->withErrors($v->errors());
    	}

    	return view('formulario2', compact('data'));
    }

    public function formulario3()
    {
    	$data = \Request::all();

    	$reglas = ([
    			'nombre' => 'required',
    			'apellido' => 'required',
    			'materno' => 'required',
    		]);
    	$v = Validator::make($data,$reglas);

    	if($v->fails())
    	{	
    	  return redirect()->back()->withInput()->withErrors($v->errors());
    	}
    	 return view('formulario3', compact('data'));
    }

}
