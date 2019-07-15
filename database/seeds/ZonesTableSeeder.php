<?php

use Illuminate\Database\Seeder;

class ZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zones')->insert([
                        ['id'   => 1, 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                        ['id'   => 2, 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                        ['id'   => 3, 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                        ['id'   => 4, 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                        ['id'   => 5, 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                        ['id'   => 6, 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00']
                        
                ]);
    }
}
