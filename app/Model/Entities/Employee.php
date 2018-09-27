<?php

namespace App\Model\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Model\Base\Base;
use App\Model\Scopes\BaseScope;

class Employee extends Base
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'phone', 'avatar', 'address', 'id_number', 'bank_account', 'description', 'ins_id', 'upd_id', 'del_flag'];

    // Add scope global
    protected static function boot() 
    {
    	parent::boot();
    	static::addGlobalScope(new BaseScope);
    }
}
