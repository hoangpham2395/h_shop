<?php

namespace App\Model\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Model\Base\Base;
use App\Model\Scopes\BaseScope;

class Job extends Base
{
    protected $table = 'jobs';
    protected $primaryKey = 'id';
    protected $fillable = ['job_name', 'ins_id', 'upd_id', 'del_flag'];

    // Add scope global
    protected static function boot() 
    {
    	parent::boot();
    	static::addGlobalScope(new BaseScope);
    }
}
