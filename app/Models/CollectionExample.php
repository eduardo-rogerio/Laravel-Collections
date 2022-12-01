<?php

namespace App\Models;

use Illuminate\Support\Collection;

class CollectionExample
{
    public function example()
    {
        return collect([
            ['code' => '123VG', 'name' => 'string1'],
            ['code' => '123-VG', 'name' => 'string2'],
            ['code' => '123 VG', 'name' => 'string3'],
        ])->groupBy(function ($element){
            return str_replace(['-',' '],'',$element['code']);
        });
    }
}
