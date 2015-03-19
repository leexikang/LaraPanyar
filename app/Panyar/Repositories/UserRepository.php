<?php namespace Panyar\Repositories;

use User;
Class UserRepository implements UserRepositoryInterface{

    public function getAll(){

        return User::all();
    }

    public function findById($id){

        return User::findOrFail($id);
    }

    public function create($input){

        return User::create($input);
    }




}