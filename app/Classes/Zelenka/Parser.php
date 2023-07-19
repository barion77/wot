<?php

namespace App\Classes\Zelenka;

use App\Models\Product;

class Parser
{
    public function addItem($data)
    {
        $product = new Product();

        $product->title = $data['title'];
        $product->description = $data['description'];


    }

    public function getItem()
    {


    }

    public function getItems()
    {

    }
}
