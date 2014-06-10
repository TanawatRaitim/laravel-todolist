<?php

class AuthController extends BaseController {

	public function getLogin()
	{
		return View::make('login');	
	}

	public function postLogin()
	{
		$rules = array('username' => 'required', 'password' => 'required');
		$validator = Validator::make(Input::all(),$rules);
		
		
		if($validator->fails()){
			return Redirect::route('login')->withErrors('$validator');
		}
		
		
	}
	

}
