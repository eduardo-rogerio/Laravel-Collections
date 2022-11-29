<?php

namespace App\Models;

class CollectionExample
{
    public function example()
    {
        return collect([1,2,3,4,5,6,7,8,90,])
            ->contains(function ($value, $key){
                return $value > 10;
            });
    }
}
