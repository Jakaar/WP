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
            'company_name' => '{"mn": "Монгол", "en": "English", "kr": "정보를 입력하세요"}',
            'site_name' => '{"mn": "Монгол", "en": "English", "kr": "정보를 입력하세요"}',
            'fax' => 'Your fax here',
            'company_register_number' => 'Your company register number',
            'phone_number' => 'Your phone',
            'address' => '{"mn": "Монгол", "en": "English", "kr": "정보를 입력하세요"}',
            'email' => 'You Company email',
            'site_copyright' => '{"mn": "Монгол", "en": "English", "kr": "정보를 입력하세요"}',
            'logo' => null,
            'terms_of_condition_name_url' => null,
            'privacy_name_url' => null,
            'terms_of_condition' => null,
            'privacy' => null,
            'personal_information_manager' => '{"mn": "Монгол", "en": "English", "kr": "정보를 입력하세요"}',
            'location' => null,
            'recieve_promotional_information' => null
        ]);
    }
}
