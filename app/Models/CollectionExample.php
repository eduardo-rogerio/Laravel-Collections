<?php

namespace App\Models;

class CollectionExample
{
    public function example()
    {
        $data = [
          ['price'=>10000],
          ['price'=>25000],
          ['price'=>30000],
        ];
        return collect($data)->min('price');
    }
}
