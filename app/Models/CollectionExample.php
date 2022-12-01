<?php

namespace App\Models;

use Illuminate\Support\Collection;

class CollectionExample
{
    public function example()
    {
        return collect([1,2,3,4])->filter(function ($value,$key){
            return $key > 2;
        });
    }

}
