<?php

namespace App\Http\Controllers\Base;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
	protected $_alias;
	protected $_reposiroty;

    public function setRepository($repository) 
    {
    	$this->_reposiroty = $repository;
    }

    public function getRepository() 
    {
    	return $this->_reposiroty;
    }
}