<?php
/**
 * Created by PhpStorm.
 * User: xikang
 * Date: 3/17/15
 * Time: 4:36 PM
 */


use Panyar\Services\Validation\UserValidator as Validator;

class CourseValidatorTest extends TestCase{

   public function testValidation(){

       $input = ['name' => 'min', 'password' => '123', 'email' => 'san'];
       $validator = new Validator();
       $response = $validator->validate($input);
       $this->assertFalse($response);
   }
} 