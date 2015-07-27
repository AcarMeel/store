<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
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
        	'name'=>'Melissa',
        	'last_name'=>'Arias',
        	'email'=>'melissa_ar_ac@hotmail.com',
        	'user'=>'meliaa',
        	'password'=> \Hash::make('12345678'),
        	'type'=>'admin',
        	'active'=> 1,
        	'address'=>'Tibas',
        	'created_at'=> new DateTime,
        	'updated_at'=> new DateTime

        	],
        	[
        	'name'=>'Ronald',
        	'last_name'=>'Retana',
        	'email'=>'ron@gmail.com',
        	'user'=>'ronret',
        	'password'=> \Hash::make('12345678') ,
        	'type'=>'user',
        	'active'=>1,
        	'address'=>'Tres Rios',
        	'created_at'=> new DateTime,
        	'updated_at'=> new DateTime

        	],
        	[
        	'name'=>'Larissa',
        	'last_name'=>'Pineda',
        	'email'=>'lp@gmail.com',
        	'user'=>'Lari900',
        	'password'=> \Hash::make('12345678') ,
        	'type'=>'user',
        	'active'=>1,
        	'address'=>'Heredia',
        	'created_at'=> new DateTime,
        	'updated_at'=> new DateTime

        	]



        	);

			User::insert($data);
    }
}
