<?php

namespace App\Models;

class CollectionExample
{
    public function example()
    {
        $data = [
            1,
            2 => [5,6],
            3,
            4,
            5,
        ];
        return collect($data)->count();
    }
}
