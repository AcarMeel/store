<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = array(
        	[
        	'name'=>'T-shirt super man',
        	'slug'=>'tshirt-super-man',
        	'description'=>'The best brands are here. ',
        	'extract'=>'All sizes',
        	'price'=> 390.99,
        	'image'=>'http://site.blacksheeptees.com/pics/superman_clarkkent.jpg',
        	'visible'=>1,
        	'created_at'=>new DateTime,
        	'updated_at'=> new DateTime,
        	'category_id'=>1
        	],
        	[
        	'name'=>'SweatShirt Batman',
        	'slug'=>'sweatshirt-batman',
        	'description'=>'The best brands are here. ',
        	'extract'=>'All sizes',
        	'price'=> 390.99,
        	'image'=>'http://images.superherostuff.com/image-tsbathoodie-0-watermark.jpg',
        	'visible'=>1,
        	'created_at'=>new DateTime,
        	'updated_at'=> new DateTime,
        	'category_id'=>1
        	],
        	[
        	'name'=>'T-shirt geek',
        	'slug'=>'geek-tshirt',
        	'description'=>'If you want to see and eat the world',
        	'extract'=>'wear comfortable',
        	'price'=> 390.99,
        	'image'=>'http://cdn2.notonthehighstreet.com/system/product_images/images/001/979/640/preview_unisex-minty-geek-tshirt.jpg',
        	'visible'=>1,
        	'created_at'=>new DateTime,
        	'updated_at'=> new DateTime,
        	'category_id'=>2
        	],
        	[
        	'name'=>'cup geek',
        	'slug'=>'geek-cup',
        	'description'=>'If you want to see and eat the world',
        	'extract'=>'wear comfortable',
        	'price'=> 390.99,
        	'image'=>'https://shechive.files.wordpress.com/2013/04/geek-products-11.jpg',
        	'visible'=>1,
        	'created_at'=>new DateTime,
        	'updated_at'=> new DateTime,
        	'category_id'=>2
        	],
        	[
        	'name'=>'Lentes',
        	'slug'=>'geek-glasses',
        	'description'=>'If you want to see and eat the world',
        	'extract'=>'Enhance your eye-sight',
        	'price'=> 390.99,
        	'image'=>'http://sartorialmale.com/wp-content/uploads/2011/01/geek-chic-glasses.jpg',
        	'visible'=>1,
        	'created_at'=>new DateTime,
        	'updated_at'=> new DateTime,
        	'category_id'=>2
        	]);

        Product::insert($data);
    }
}
