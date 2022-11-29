<?php

namespace App\Models;

class CollectionExample
{
    public function example()
    {
        $data = collect(['Mustang','GT','F150']);
        return $data
            ->crossJoin(
            ['automatic','manual'],
            ['blue','black','white','yellow','gray'],
            [2018,2019,2022])
            ->count();
    }
}
