<?php

use Illuminate\Database\Seeder;

class BasicSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wpanel_settings')->insert([
            [
                'display_name' => 'Weather API',
                'key' => 'Weather_wapi',
                'value' => '947c5c46b768464e9f621616210211',
                'order' => 1,
                'type' => 'text',
                'group' => 'Weather'
            ],
            [
                'display_name' => 'Weather City',
                'key' => 'Weather_wcity',
                'value' => 'Ulaanbaatar',
                'order' => 1,
                'type' => 'text',
                'group' => 'Weather'
            ],
        ]);
    }
}
