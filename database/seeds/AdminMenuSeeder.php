<?php

use Illuminate\Database\Seeder;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admin_menus')->insert([
            [
                'id' => 1,
              'title' =>  '{"mn":"Удирдах самбар","en":"Control Panel","kr":"제어판"}',
              'url' =>  '/cms/preferences',
              'parent_id' => null,
              'order' => '1',
              'is_active' => 1,
            ],
            [
                'id' => 2,
                'title' =>  '{"mn":"Тохиргоо","en":"Configuration","kr":"구성"}',
                'url' =>  '/cms/preferences',
                'parent_id' => '1',
                'order' => '1-1',
                'is_active' => 1,
            ]
        ]);
    }
}
