<?php

namespace App\Http\Controllers\Base;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
	protected $_alias;
	protected $_reposiroty;
    protected $_validator;

    public function setRepository($repository) 
    {
    	$this->_reposiroty = $repository;
    }

    public function getRepository() 
    {
    	return $this->_reposiroty;
    }

    public function setValidator($validator) 
    {
        $this->_validator = $validator;
    }

    public function getValidator() 
    {
        return $this->_validator;
    }
}