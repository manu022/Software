<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class EventosController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
    	if (Auth::user()->tipo_usuario == 2 || Auth::user()->tipo_usuario == 1)
    	{
    		return view ('eventos');
    	}
    	else
    	{
    		return view('perfil')->withErrors(['No tienes permiso para acceder a esta URL!!']);
    	}
    }
}
