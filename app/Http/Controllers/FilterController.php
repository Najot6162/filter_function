<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;

class Products
{
    public function filter($query)
    {
        $products = Product::where('name', $query['name'])->where('price', $query['price'])->get();
        dd($products);
    }
}

class Posts
{
    public function filter($query)
    {
        $post = Post::where('name', $query)->get();
        dd($post);
    }
}

class Filter
{
    public function getDataWithFilter($func, $query)
    {
            $func->filter($query);
    }
}

class FilterController
{
    public function filter()
    {
        $post = new Posts();
        $queryPost = 'post2';

        $product = new Products();
        $queryProduct = [
            'name' => 'iphone11pro',
            'price' => '600$'
        ];
        $filter = new Filter();
        $filter->getDataWithFilter($product, $queryProduct);
    }
}

