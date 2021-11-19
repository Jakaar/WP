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
            'company_name' => '{"mn": "Монгол", "en": "English", "kr": "대한민국"}',
            'site_name' => '{"mn": "Монгол", "en": "English", "kr": "대한민국"}',
            'fax' => 'Your fax here',
            'company_register_number' => 'Your company register number',
            'phone_number' => 'Your phone',
            'address' => '{"mn": "Монгол", "en": "English", "kr": "대한민국"}',
            'email' => 'You Company email',
            'site_copyright' => '{"mn": "Монгол", "en": "English", "kr": "대한민국"}',
            'logo' => null,
            'terms_of_condition' => '{"mn": "Монгол", "en": "English", "kr": "대한민국"}',
            'privacy' => '{"mn": "Монгол", "en": "English", "kr": "대한민국"}',
            'personal_information_manager' => '{"mn": "Монгол", "en": "English", "kr": "대한민국"}'
        ]);
    }
}
