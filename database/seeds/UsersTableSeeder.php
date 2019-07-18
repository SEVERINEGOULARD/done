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
                    ['pseudo'    => 'Admin',
                    'email'      => 'admin@done.com',
                    'password'   => Hash::make('000000'),
                    'dob'        => '1983-06-15',
                    'role'       => 1,
                    'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                    ['pseudo'    => 'User1',
                    'email'      => 'user1@done.com',
                    'password'   => Hash::make('000000'),
                    'dob'        => '1983-06-15',
                    'role'       => 2,
                    'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                    ['pseudo'    => 'User2',
                    'email'      => 'user2@done.com',
                    'password'   => Hash::make('000000'),
                    'dob'        => '1983-06-15',
                    'role'       => 2,
                    'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                    ['pseudo'    => 'User3',
                    'email'      => 'user3@done.com',
                    'password'   => Hash::make('000000'),
                    'dob'        => '1983-06-15',
                    'role'       => 2,
                    'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                    ['pseudo'    => 'User4',
                    'email'      => 'user4@done.com',
                    'password'   => Hash::make('000000'),
                    'dob'        => '1983-06-15',
                    'role'       => 2,
                    'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
        			
        		]);
    }
}
