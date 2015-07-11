<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
        	[
        	'name'=>'Super Heroes',
        	'slug'=>'Super-Heroes',
        	'description'=>'They are able to save the world ',
        	'color'=>'#440022'
        	],
        	[
        	'name'=>'Geek',
        	'slug'=>'geek',
        	'description'=>'Love technology and modern devices.',
        	'color'=>'#445500'
        	]);

        Category::insert($data);
    }
}
