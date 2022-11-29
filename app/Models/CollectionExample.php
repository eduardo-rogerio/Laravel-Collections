<?php

namespace App\Models;

class CollectionExample
{
    public function example()
    {
        $data = collect([1,2,3,4,5]);
        return $data
            ->diff([1,3]);
    }
}
