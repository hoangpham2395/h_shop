<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Base\BackendController;
use Auth;

class LoginController extends BackendController
{
    public function getLogin() 
    {
    	return view('backend.login.index');
    }

    public function postLogin(Request $request) 
    {
    	$data = [
    		'email' => $request->input('email'),
    		'password' => $request->input('password')
    	];

    	$rememberMe = ($request->input('remember_me')) ? true : false;

    	if (Auth::attempt($data, $rememberMe)) {
    		return redirect()->route('admin.index');
    	} 
    	// Login Fail
    	return redirect()->back()->withErrors()->withInput();
    }

    public function logout() 
    {

    }
}
