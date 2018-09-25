<?php 
namespace App\Validators;

use App\Validators\BaseValidator;

/**
 * 
 */
class JobsValidator extends BaseValidator
{
	protected $rules = [
		'job_name' => 'required'
	];
}

?>