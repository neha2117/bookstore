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
        		'imagepath' =>'//vignette.wikia.nocookie.net/harrypotter/images/7/70/Harry_Potter_and_the_Order_of_the_Phoenix.jpg/revision/latest?cb=20161002074140',
        		'title' =>'Harry Potter',
        		'description'=>'Harry Potter is a series of fantasy novels',
        		'price'=>10
        ]);
        $product->save();
    
        $product = new \App\Product([
        		'imagepath' =>'https://images-na.ssl-images-amazon.com/images/I/81R44Hk2qBL.jpg',
        		'title' =>'Wings of Fire',
        		'description'=>'APJ AK',
        		'price'=>15
        ]);

        $product->save();$product = new \App\Product([
        		'imagepath' =>'//vignette.wikia.nocookie.net/harrypotter/images/7/70/Harry_Potter_and_the_Order_of_the_Phoenix.jpg/revision/latest?cb=20161002074140',
        		'title' =>'Harry Potter',
        		'description'=>'Goblet of Fire',
        		'price'=>20
        ]);

        $product->save();$product = new \App\Product([
        		'imagepath' =>'//vignette.wikia.nocookie.net/harrypotter/images/7/70/Harry_Potter_and_the_Order_of_the_Phoenix.jpg/revision/latest?cb=20161002074140',
        		'title' =>'Harry Potter',
        		'description'=>'Half Blood Prince',
        		'price'=>20
        ]);

        $product->save();$product = new \App\Product([
        		'imagepath' =>'//vignette.wikia.nocookie.net/harrypotter/images/7/70/Harry_Potter_and_the_Order_of_the_Phoenix.jpg/revision/latest?cb=20161002074140',
        		'title' =>'Harry Potter',
        		'description'=>'Magic school',
        		'price'=>30
        ]);

        $product->save();$product = new \App\Product([
        		'imagepath' =>'//vignette.wikia.nocookie.net/harrypotter/images/7/70/Harry_Potter_and_the_Order_of_the_Phoenix.jpg/revision/latest?cb=20161002074140',
        		'title' =>'Harry Potter',
        		'description'=>'Deathly Hollows',
        		'price'=>100
        ]);
        $product->save();
    
    }
}
