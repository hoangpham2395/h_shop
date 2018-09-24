<?php 
namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use App\Validators\BaseValidator;

class AdminValidator extends BaseValidator {

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required',
            'email'  => 'required|email|unique:admin,email',
            'password'=> 'required|min:6|max:8',
            'confirm_password' => 'required_with:password|same:password|min:6|max:8',
            'phone' => 'required',
            'level' => 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required',
            'email'  => 'required|email|unique:admin,email, :id',
            'phone' => 'required',
            'level' => 'required'
        ]
   ];

   // protected $messages = [
   //      'required' => 'Trường :attribute bắt buộc.'
   // ];

    protected $attributes = [
        'level' => 'role type'
    ];

}