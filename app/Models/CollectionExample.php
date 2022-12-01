<?php

namespace App\Models;

use Illuminate\Support\Collection;

class CollectionExample
{
    public function example()
    {
        $key = collect(['product','qty']);
        return collect(['product' => 'coconuts', 'price' => 10,'qty'=>45])
            ->only($key);
    }
}
