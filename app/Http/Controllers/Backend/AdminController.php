<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Base\BackendController;
use App\Repositories\AdminRepository;

class AdminController extends BackendController
{
	protected $_alias = 'admin';

	public function __construct(AdminRepository $adminRepository) 
	{
		$this->setRepository($adminRepository);
		parent::__construct();
	}
}
