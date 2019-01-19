<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Auth;

class LoginController extends Controller
{
    
	public function __construct()
	{
		$this->middleware('guest', ['only' => 'showLoginForm']);
	}

    public function showLoginForm()
    {
        return view('login');
    }




	public function login()
	{
		$credentials=$this->validate(request(), [

			'email' => 'email|required|string',

			'password' => 'required|string'


		]);
	
		if(Auth::attempt($credentials))
		{
			return redirect()->route('perfil');
		}

		return back()

			->witherrors(['email' => 'Estas credenciales no coinciden con nuestros registros!!'])
			->withInput(request(['email']));

	}

	public function logout()
	{

		Auth::logout();

		return redirect('login');

	}


}
