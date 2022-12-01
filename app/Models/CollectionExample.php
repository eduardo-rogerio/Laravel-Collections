<?php

namespace App\Models;

use Illuminate\Support\Collection;

class CollectionExample
{
    public function example()
    {
        $collection = collect([1,2,3,4,5,6,7,8]);
        return $collection->chunk(2)
            ->mapSpread(function ($a,$b){
                return $a * $b;
            });


    }
}
