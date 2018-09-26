<?php
namespace App\Repositories;

use App\Repositories\CustomRepository;
use App\Model\Entities\Employee;
use App\Validators\EmployeesValidator;

/**
 * 
 */
class EmployeesRepository extends CustomRepository
{
	function model() 
	{
		return Employee::class;
	}

	public function validator() 
	{
		return EmployeesValidator::class;
	}
}
?>