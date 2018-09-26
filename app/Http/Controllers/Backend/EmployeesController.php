<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Base\BackendController;
use App\Repositories\EmployeesRepository;
use App\Validators\EmployeesValidator;
use App\Model\Entities\Employee;

class EmployeesController extends BackendController
{
    public function __construct(EmployeesRepository $employeesRepository, 
    							EmployeesValidator $employeesValidator, 
    							Employee $employee) 
    {
    	$this->setRepository($employeesRepository);
    	$this->setValidator($employeesValidator);
    	$this->setAlias($employee->getTable());
    	parent::__construct();
    }
}
