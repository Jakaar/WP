<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin123'),
                'status' => 'Active',
                'name' => 'SuperAdmin',
                'sex' => 'Male',
                'dob' => '2014-05-15',
                'api_token' => Str::random(60),
                'email_verified_at' => '2019-04-15 00:00:00',
                'designation' => 'Super User',
                'web' => env('APP_URL'),
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'email' => 'user@lavalite.org',
                'password' => bcrypt('user@lavalite'),
                'status' => 'Active',
                'name' => 'User',
                'sex' => 'Male',
                'dob' => '2015-05-15',
                'api_token' => Str::random(60),
                'email_verified_at' => '2019-04-15 00:00:00',
                'designation' => 'Admin',
                'web' => env('APP_URL'),
                'created_at' => now(),
            ],
        ]);


    }
}
