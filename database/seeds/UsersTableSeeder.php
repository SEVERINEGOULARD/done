<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        			'pseudo' 	 => 'admin',
        			'email' 	 => 'toto@gmail.com',
        			'password' 	 => Hash::make('000000'),
        			'dob'		 => '2019-07-09',
        			'city_id'	 => 1,
        			'template_id'=> 1
        		]);
    }
}
