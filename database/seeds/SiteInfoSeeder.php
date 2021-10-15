<?php

use Illuminate\Database\Seeder;

class SiteInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wpanel_site_info')->insert([
            'company_name' => 'Your Company Name',
            'site_name' => 'Your Site Name',
            'fax' => 'Your fax here',
            'company_register_number' => 'Your company register number',
            'phone_number' => 'Your phone',
            'address' => 'Your official address',
            'email' => 'You Company email',
            'site_copyright' => 'Copyright Here',
            'logo' => null,
            'terms_of_condition' => 'Terms of Condition',
            'privacy' => 'Site Privacy Here',
            'personal_information_manager' => 'personal manager'
        ]);
    }
}
