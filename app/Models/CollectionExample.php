<?php

namespace App\Models;

use Illuminate\Support\Collection;

class CollectionExample
{
    public function example()
    {
        return $this->everyThree([1,2,3,4,5],[6,7,8,9,10],[34,54,56,6,68]);
    }

    public function everyThree(...$collections)
    {
        return collect($collections)->flatMap(function ($item){
           return Collection::wrap($item);
        });
    }
}
