<?php

use Illuminate\Database\Seeder;

class TemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templates')->insert([
                        ['name'   => 'template1', 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                        ['name'   => 'template2', 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                        ['name'   => 'template3', 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                        ['name'   => 'template4', 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00']
                ]);

                    
                
                
    }
}
