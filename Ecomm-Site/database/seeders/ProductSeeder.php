<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->insert([
         [
            'name'=>'iphone',
            'price'=>'100000',
            'description'=>'smartphone is iphone',
            'category'=>'mobile',
            'gallery'=>'https://www.91-img.com/gallery_images_uploads/3/d/3df5ca6a9b470f715b085991144a5b76e70da975.JPG?tr=h-630,c-at_max,q-80'
         ],
         [
            'name'=>'google pixel',
            'price'=>'50000',
            'des    cription'=>'smartphone is from google',
            'ca tegory'=>'mobile',
            'gallery'=>'https://images.news18.com/ibnlive/uploads/2022/05/pixel-6a-india-launch.jpg'
         ],
         [
            'name'=>'oneplus tv',
            'price'=>'100000',
            'description'=>'tv is from oneplus',
            'category'=>'tv',
            'gallery'=>'https://www.intex.in/cdn/shop/products/1_9b8014ad-124e-4742-a628-9a4c4affe617.jpg?v=1648711109'

         ],
         [
            'name'=>'intex tv',
            'price'=>'50000',
            'description'=>'smart tv from intex',
            'category'=>'tv',
            'gallery'=>'https://www.intex.in/cdn/shop/products/1_a896e32b-a7e0-4613-81cb-502796488dec.jpg?v=1654751430'

         ],
         [
            'name'=>'LG Fridge',
            'price'=>'50000',
            'description'=>'smart fridge from LG',
            'category'=>'fridge',
            'gallery'=>'https://img.freepik.com/premium-photo/silver-steel-fridge-model-isolated-white-background_124507-67356.jpg'

         ]
        ]);
    }
}
