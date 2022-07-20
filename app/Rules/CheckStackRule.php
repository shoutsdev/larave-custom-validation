<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckStackRule implements Rule
{
    public function __construct()
    {
        //
    }


    public function passes($attribute, $value)
    {
        //put your own logic here
        if ($value == 'laravel') {
            return true;
        }
        else{
            return false;
        }
    }

    public function message()
    {
        return 'The :attribute should be Laravel.';
    }
}
