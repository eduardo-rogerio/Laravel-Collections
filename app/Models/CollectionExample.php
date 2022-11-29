<?php

namespace App\Models;

class CollectionExample
{
    public function example()
    {
        $data = collect(['value1']);
        return $data->concat(['value2']);
    }
}
