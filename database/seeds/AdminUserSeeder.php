<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname' => 'Admins father',
            'lastname' => 'Admin name',
            'email'=>'admin@admin.com',
            'password' => bcrypt('admin123')
    ])->attachRole('owner');
    }
}
