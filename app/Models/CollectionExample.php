<?php

namespace App\Models;

use Illuminate\Support\Collection;

class CollectionExample
{
    public function example()
    {
//        return collect([
//            ['product' => 'apples', 'price'=>50,'quantity'=>5],
//            ['product' => 'bananas', 'price'=>60,'quantity'=>10],
//            ['product' => 'oranges', 'price'=>70,'quantity'=>15],
//            ['product' => 'coconuts', 'price'=>80,'quantity'=>25],
//        ])->pluck('product','quantity');

        return collect([
            ['product' => 'apples', 'price'=>50,'quantity'=>5],
            ['product' => 'bananas', 'price'=>60,'quantity'=>10],
            ['product' => 'oranges', 'price'=>70,'quantity'=>15],
            ['product' => 'coconuts', 'price'=>80,'quantity'=>25],
        ])->map(function ($item){
            return collect($item)->only(['product','quantity'])->all();
        });
    }
}
