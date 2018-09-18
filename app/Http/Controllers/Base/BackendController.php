<?php

namespace App\Http\Controllers\Base;

use Illuminate\Http\Request;
use App\Http\Controllers\Base\BaseController;
use Illuminate\Support\Facades\Input;

class BackendController extends BaseController
{
	protected $_alias;

	public function __construct() 
	{

	}

    public function index() {
    	$entities = $this->getRepository()->getListForBackend(Input::all());
        return view('backend.' . $this->_alias . '.index', compact('entities'));
    }
}
