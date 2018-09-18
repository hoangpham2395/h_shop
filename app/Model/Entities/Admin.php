<?php

namespace App\Model\Entities;

use App\Model\Base\Base;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
	use Notifiable;

    protected $table = 'admin';
    protected $fillable = ['email', 'password', 'name', 'phone', 'level', 'ins_id', 'upd_id', 'del_flag'];
}
