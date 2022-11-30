<?php

namespace App\Models;

class CollectionExample
{
    public function example()
    {
        return collect([
            'value1' => 'first1',
            'value2' => 'first2',
        ])
            ->map(function ($value, $key){
                return $value.$key;
            });

    }
}
