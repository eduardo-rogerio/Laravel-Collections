<?php

namespace App\Models;

class CollectionExample
{
    public function example()
    {
        $data = collect([10 => 'apple', 25 => 'banana']);
        return $data
            ->diffAssoc([30 => 'pears',20 => 'banana']);
    }
}
