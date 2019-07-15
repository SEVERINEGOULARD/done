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
        			'email' 	 => 'admin@gmail.com',
        			'password' 	 => Hash::make('000000'),
        			'dob'		 => '2019-07-09',
        			'city_id'	 => 1,
        			'template_id'=> 1,
                    'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'
        		]);
    }
}
