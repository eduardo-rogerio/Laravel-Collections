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
            ->each(function ($value){
                dump("We have {$value[1]} {$value[0]} in our {$value[2]} store");
            });
    }
}
