<?php

namespace App\Model\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Model\Base\Base;
use App\Model\Scopes\BaseScope;
use App\Model\Presenters\EmployeesPresenter;

class Employee extends Base
{
	use EmployeesPresenter;

    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'phone', 'birth_day', 'avatar', 'address', 'id_number', 'bank_account', 'description', 'ins_id', 'upd_id', 'del_flag'];

    // Add scope global
    protected static function boot() 
    {
    	parent::boot();
    	static::addGlobalScope(new BaseScope);
    }

    public function setBirthDayAttribute($value) 
    {
    	$this->attributes['birth_day'] = date('Y-m-d', strtotime($value));
    }

    public function getBirthDayAttribute() 
    {
    	return date('m/d/Y', strtotime($this->attributes['birth_day']));
    }
}
