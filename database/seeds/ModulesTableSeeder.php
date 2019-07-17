<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            ['type'   => '1', 'created_at' => '2019-01-01 00:00:00',
        'updated_at' => '2019-01-01 00:00:00'],
            ['type'   => '2', 'created_at' => '2019-01-01 00:00:00',
        'updated_at' => '2019-01-01 00:00:00'],
            ['type'   => '3', 'created_at' => '2019-01-01 00:00:00',
        'updated_at' => '2019-01-01 00:00:00'],
            ['type'   => '4', 'created_at' => '2019-01-01 00:00:00',
        'updated_at' => '2019-01-01 00:00:00']
    ]);

    }
}
