<?php

namespace App\Models;

use Illuminate\Support\Collection;

class CollectionExample
{
    public function example()
    {
        return collect([
            ['bananas',45,'California'],
            ['apples',20,'Florida'],
            ['coconuts',60,'Texas'],
        ])
            ->eachSpread(function ($product,$qty,$location){
                dump("We have {$qty} {$product} in our {$location} store");
            });
    }
}
