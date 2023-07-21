<?php

namespace App\Classes\Zelenka;

use App\Models\Product;
use Illuminate\Support\Str;

class Parser
{
    public function addRandomItem($data)
    {
        $product = new Product();

        $product->title = $data['title'];
        $product->description = $data['description'];
        $product->instruction = 'instruction';



    }

    public function addItemWithDescription($url, $category_id, $price, $instruction_id)
    {
        $data = $this->getItem($url);
        if ($data === false)
            return false;


        if (!empty(Product::where('item_id', $data['item_id'])->get()->first()))
            return false;

        $product = new Product();

        $product->title = $data['title'];
        $product->description = $data['description'] ?? 'Аккаунт ' . $data['item_id'];
        $product->category_id = $category_id;
        $product->instruction_id = $instruction_id;
        $product->images = json_encode(['images/whywe.png']);
        $product->price = $price;
        $product->slug = Str::slug($data['title']);
        $product->data = 'empty';
        $product->item_id = $data['item_id'];

        $product->save();

        return true;
    }

    private function getItem($url)
    {
        $zelenka_api = new ZelenkaApi();

        $item_id = preg_replace("/[^0-9]/", '', $url);
        if (empty($item_id))
            return false;

        $data = $zelenka_api->getItem($item_id);

        if (empty($data) || $data['item']['item_state'] != 'active')
            return false;


        return $data['item'];
    }

    private function getItems($category, $data)
    {

    }
}
