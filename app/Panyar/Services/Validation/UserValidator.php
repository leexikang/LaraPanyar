<?php
/**
 * Created by PhpStorm.
 * User: xikang
 * Date: 3/17/15
 * Time: 3:55 PM
 */

namespace Panyar\Services\Validation;


class UserValidator extends  Validator{

    public static $rules = [
        'name' =>'required',
        'password' => 'required',
        'email' => 'required'
    ];

} 
