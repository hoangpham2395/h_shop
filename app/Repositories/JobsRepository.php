<?php 
namespace App\Repositories;

use App\Repositories\CustomRepository;
use App\Model\Entities\Job;
use App\Validators\JobsValidator;

/**
 * 
 */
class JobsRepository extends CustomRepository
{
	function model() 
	{
		return Job::class;
	}

	public function validator() 
	{
		return JobsValidator::class;
	}
}
?>