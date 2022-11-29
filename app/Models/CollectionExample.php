<?php

namespace App\Models;

class CollectionExample
{
    public function example()
    {
        $key = collect(['column1', 'column2']);
        return $key->combine([
            ['value1' => 123, 'value3' => 789],
            ['value2' => 456],
        ]);
    }
}
