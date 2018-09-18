<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Base\BackendController;
use Auth;
use Illuminate\Support\MessageBag;
use Validator;

class LoginController extends BackendController
{
    public function getLogin() 
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
    	return view('backend.login.index');
    }

    protected $_rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];

    public function postLogin(Request $request) 
    {
    	$data = [
    		'email' => $request->input('email'),
    		'password' => $request->input('password')
    	];

    	$validator = Validator::make($data, $this->_rules);

    	// Check validate
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

    	$rememberMe = ($request->input('remember_me')) ? true : false;

    	if (Auth::attempt($data, $rememberMe)) {
    		return redirect()->route('dashboard');
    	} 
    	// Login Fail
        $errors = new MessageBag(['errorLogin' => 'Email or password is incorrect.']);
    	return redirect()->back()->withErrors($errors)->withInput();
    }

    public function logout() 
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
