<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Base\BackendController;
use App\Repositories\AdminRepository;
use App\Validators\AdminValidator;

class AdminController extends BackendController
{
	protected $_alias = 'admin';

	public function __construct(AdminRepository $adminRepository, AdminValidator $adminValidator) 
	{
		$this->setRepository($adminRepository);
		$this->setValidator($adminValidator);
		parent::__construct();
	}

	protected function _prepareData() 
	{
		$params['levels'] = [
			1 => 'Super admin',
			2 => 'Admin',
			3 => 'Product manager',
			4 => 'Shipper'
		];
		return $params;
	}

	protected function _prepareCreate() 
	{
		$params = $this->_prepareData();
		return $params;
	}

	protected function _prepareEdit() 
	{
		$params = $this->_prepareData();
		return $params;
	}
}
