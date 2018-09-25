<?php

namespace App\Model\Entities;

use App\Model\Base\Base;
use App\Model\Presenters\AdminPresenter;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Model\Scopes\BaseScope;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable
{
	use Notifiable;
	use AdminPresenter;

    protected $table = 'admin';
    protected $fillable = ['email', 'password', 'name', 'phone', 'level', 'ins_id', 'upd_id', 'del_flag'];

    // Add scope global
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new BaseScope);
    }

    // Set password before save DB
    public function setPasswordAttribute($value) 
    {
    	return $this->attributes['password'] = Hash::make($value);
    }
}
