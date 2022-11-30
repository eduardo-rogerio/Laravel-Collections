<?php

namespace App\Models;

class CollectionExample
{
    public function example()
    {
        return collect([1,2,3])
            ->reverse()
            ->tap(function ($collection){
                $collection
                    ->reverse()
                    ->each(function ($value){
                    dump('In Tap: '.$value);
                });
            })
            ->first();
    }
}
