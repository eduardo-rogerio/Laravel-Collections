<?php

namespace App\Models;

class CollectionExample
{
    public function example()
    {
        $data = [
          1,2,3,4,5,6,7,8
        ];
        return collect($data)->chunk(4)->first();
    }
}
