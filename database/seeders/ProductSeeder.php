<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [['name' => 'Apple Iphone','price' => 10.99,'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.','image'=>'https://www.91-img.com/pictures/144646-v8-apple-iphone-14-pro-mobile-phone-large-1.jpg'],
                ['name' => 'Samsung Tab','price' => 19.99, 'description' => 'Nullam sit amet est eget est facilisis viverra vel et sapien.','image'=>'https://www.91-img.com/gallery_images_uploads/3/8/38b2bbfdb23141b1d26133a7f57bc1b384e5c5eb.jpg?w=0&h=901&q=80&c=1'],
                ['name' => 'Oneplus Nord','price' => 8.50,'description' => 'Duis aliquet mi eget elit condimentum, quis laoreet sapien tempor.','image'=>'https://www.91-img.com/pictures/149276-v8-oneplus-nord-2t-mobile-phone-large-1.jpg?tr=q-80'],
                ['name' => 'Moto one','price' => 18.50,'description' => 'Duis aliquet mi eget elit condimentum, quis laoreet sapien tempor.','image'=>'https://www.91-img.com/pictures/134180-v21-motorola-one-vision-mobile-phone-large-1.jpg'],
                ['name' => 'Google Pixel','price' => 22.50,'description' => 'Duis aliquet mi eget elit condimentum, quis laoreet sapien tempor.','image'=>'https://www.91-img.com/pictures/149293-v5-google-pixel-7-5g-mobile-phone-large-1.jpg?tr=q-80']
                ];

DB::table('products')->insert($products);
    }
}
