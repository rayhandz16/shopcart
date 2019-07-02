<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://bookriot.com/wp-content/uploads/2014/08/HP_hc_new_1.jpeg',
            'title' => 'Harry Potter',
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'price' => 300000
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51tW-UJVfHL._SX321_BO1,204,203,200_.jpg',
            'title' => 'Lord of The Ring',
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'price' => 400000
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/516KV5tjulL._SX312_BO1,204,203,200_.jpg',
            'title' => 'Romance',
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'price' => 450000
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/417bO5PY5CL._SY346_.jpg',
            'title' => 'Thunder Belt',
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'price' => 500000
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://pictures.abebooks.com/isbn/9780618129027-us.jpg',
            'title' => 'Night Fury',
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'price' => 550000
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/lrg/9780/0071/9780007149247.jpg',
            'title' => 'Fallow Ship',
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'price' => 600000
        ]);
        $product->save();
    }
}
