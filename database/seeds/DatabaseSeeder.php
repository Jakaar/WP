<?php

use Illuminate\Database\Seeder;
use Laratrust\Laratrust;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
            LaratrustSeeder::class,
             AdminUserSeeder::class,
             SiteInfoSeeder::class,
             ContactUsSeeder::class,
             UserMenuSeeder::class,
             NoticeBoardSeeder::class,
             BasicSettingsSeeder::class,
         ]);
    }
}
