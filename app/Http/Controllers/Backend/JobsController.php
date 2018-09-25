<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Base\BackendController;
use App\Repositories\JobsRepository;
use App\Validators\JobsValidator;

class JobsController extends BackendController
{
    protected $_alias = 'jobs';

    public function __construct(JobsRepository $jobsRepository, JobsValidator $jobsValidator) 
    {
    	$this->setRepository($jobsRepository);
    	$this->setValidator($jobsValidator);
    	parent::__construct();
    }
}
?>