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
            'phone' => 'required|digits:10',
            'birth_day' => 'required|date',
            'address' => 'required|max:256',
            'id_number' => 'required|numeric|max:20',
            'bank_account' => 'required|max:20'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required',
            'email'  => 'required|email|unique:admin,email, :id',
            'phone' => 'required'
        ]
	];
}
?>