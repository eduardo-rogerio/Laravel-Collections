<?php

namespace App\Models;

use Illuminate\Support\Collection;

class CollectionExample
{
    public function example()
    {
        return Collection::times(3,function ($value){
            return User::factory()->make([
                'name' => "{$value}Cool Name"
            ]);
        })->toArray();
    }
}
