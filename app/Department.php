<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    

    public function employees(){

            return $this->hasMany('App\Employee');
    }


    public function isBigDepartment(){

            if ($this->employees->count() > 10){

                return true;
            }

    return false;
    }


}
