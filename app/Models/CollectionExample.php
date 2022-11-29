<?php

namespace App\Models;

class CollectionExample
{
    public function example()
    {
        $data = collect([10,25,50]);
        return $data
            ->diffUsing([.1,.25],function ($a,$b){
                return ($a==(int)($b* 100)?0:-1);
            });
    }
}
