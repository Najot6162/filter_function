<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class createSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'name'=>'iphoneX',
                'price'=>'200$'
            ],
            [
                'name'=>'iphone11',
                'price'=>'400$'
            ],
            [
                'name'=>'iphone11pro',
                'price'=>'600$'
            ],
            [
                'name'=>'iphone12pro',
                'price'=>'700$'
            ],
            [
                'name'=>'iphone13 pro',
                'price'=>'1050$'
            ]
        ];

        $post = [
            [
                'name'=>'post1'
            ],
            [
                'name'=>'post2'
            ],
            [
                'name'=>'post3'
            ],
            [
                'name'=>'post4'
            ],
            [
                'name'=>'post4'
            ]
        ];

        foreach ($product as $key => $value) {
            Product::create($value);
        }
        foreach ($post as $key => $value) {
            Post::create($value);
        }
    }
}
