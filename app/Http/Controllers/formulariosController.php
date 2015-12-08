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
                'apellido' => 'required'
        ]);
        
        $v = Validator::make($data,$reglas);

        if($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        return view('formulario2', compact('data'));
    }

    public function getFormulario2()
    {
        return view('formulario2');
    }

    public function formulario3()
    {
        $data = \Request::all();

        $reglas = ([
                'nombre' => 'required',
                'apellido' => 'required',
                'materno' => 'required'
            ]);

        $v = Validator::make($data,$reglas);

        if($v->fails())
        {
            return redirect()->back()->with('data', $data)->withErrors($v->errors());
        }

        return view('formulario3', compact('data'));
    }

    public function getFormulario3()
    {
        return view('formulario3');
    }

    public function formulario4()
    {

        $data = \Request::all();

        $reglas = ([
                'nombre' => 'required',
                'apellido' => 'required',
                'materno' => 'required',
                'fuck' => 'integer|required',
                'f' => 'required'
            ]);

        $v = Validator::make($data,$reglas);

        if($v->fails())
        {
            return redirect()->back()->with('data', $data)->withErrors($v->errors());
        }

        return view('formulario4', compact('data'));
    }
}