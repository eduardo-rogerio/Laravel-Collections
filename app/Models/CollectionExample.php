<?php

namespace App\Models;

class CollectionExample
{
    public function example()
    {
        return collect([100,2,3,4])->last();
    }
}
