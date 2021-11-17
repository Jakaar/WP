<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'company_name' => '{"mn": "", "en": "", "kr": ""}',
            'site_name' => '{"mn": "", "en": "", "kr": ""}',
            'fax' => 'Your fax here',
            'company_register_number' => 'Your company register number',
            'phone_number' => 'Your phone',
            'address' => '{"mn": "", "en": "", "kr": ""}',
            'email' => 'You Company email',
            'site_copyright' => '{"mn": "", "en": "", "kr": ""}',
            'logo' => null,
            'terms_of_condition' => '{"mn": "", "en": "", "kr": ""}',
            'privacy' => '{"mn": "", "en": "", "kr": ""}',
            'personal_information_manager' => '{"mn": "", "en": "", "kr": ""}'
        ]);
    }
}
