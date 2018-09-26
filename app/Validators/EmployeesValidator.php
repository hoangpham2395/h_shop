<?php 
namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use App\Validators\BaseValidator;

/**
 * 
 */
class EmployeesValidator extends BaseValidator
{
	protected $rules = [
		ValidatorInterface::RULE_CREATE => [
            'name' => 'required',
            'email'  => 'required|email|unique:admin,email',
            'phone' => 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required',
            'email'  => 'required|email|unique:admin,email, :id',
            'phone' => 'required'
        ]
	];
}
?>