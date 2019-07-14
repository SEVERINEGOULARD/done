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
        			'pseudo' 	 => 'Anpyre',
        			'email' 	 => 'anpyre@done.com',
        			'password' 	 => Hash::make('000000'),
        			'dob'		 => '1983-06-15',
        			'city_id'	 => 1,
        			'template_id'=> 1
        		]);
    }
}
