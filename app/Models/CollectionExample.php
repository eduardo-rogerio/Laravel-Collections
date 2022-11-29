<?php

namespace App\Models;

class CollectionExample
{
    public function example()
    {
        $data = [
          [0=>['array1']],
            [1=>['array2']],
            [2=>['array3']],
        ];
        return collect($data)->collapse();
    }
}
