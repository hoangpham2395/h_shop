<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Base\BackendController;
use App\Repositories\JobsRepository;
use App\Validators\JobsValidator;
use App\Model\Entities\Job;

class JobsController extends BackendController
{
    public function __construct(JobsRepository $jobsRepository, JobsValidator $jobsValidator, Job $job) 
    {
    	$this->setRepository($jobsRepository);
    	$this->setValidator($jobsValidator);
    	$this->setAlias($job->getTable());
    	parent::__construct();
    }
}
?>