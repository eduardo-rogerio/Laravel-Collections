<?php

namespace App\Models;

use Illuminate\Support\Collection;

class CollectionExample
{
    public function example()
    {
        return collect(['id','name','email'])
            ->zip([123,'Bob','bob@email.com']);
    }
}
