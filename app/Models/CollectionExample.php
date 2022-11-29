<?php

namespace App\Models;

class CollectionExample
{
    public function example()
    {
        $data = [
          ['price'=>10000, 'tax' => 500, 'active' => false],
          ['price'=>20000, 'tax' => 700, 'active' => true],
          ['price'=>30000, 'tax' => 900, 'active' => true],
        ];
        return collect($data)->min(function ($value){
            if (!$value['active']){
                return null;
            }
            return $value['price'] + $value['tax'];
        });
    }
}
