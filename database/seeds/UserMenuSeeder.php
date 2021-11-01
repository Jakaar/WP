<?php

use Illuminate\Database\Seeder;

class UserMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $data[0] = ['Монгол','mn'];
        $data[1] = ['English', 'en'];
        $data[2] = ['Korea', 'kr'];
//        dd($data);
        foreach ($data as $item)
        {
            DB::table('wpanel_available_language')
                ->insert([
                    'country' => $item[0],
                    'country_code' => $item[1]
                ]);
        }
    }
}
