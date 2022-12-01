<?php

namespace App\Models;

use Illuminate\Support\Collection;

class CollectionExample
{
    public function example()
    {
        return collect([1,2,3,4])->first(function ($element){
            return $element > 2;
        },1000);
    }
}
