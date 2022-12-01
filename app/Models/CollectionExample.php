<?php

namespace App\Models;

use Illuminate\Support\Collection;

class CollectionExample
{
    public function example()
    {
        return collect(['A-43','B45','B-23','A12'])->sort(function ($a, $b){
            $code = str_replace('-','',$a);
            return ($code < $b) ? -1 : 1;
        });
    }
}
