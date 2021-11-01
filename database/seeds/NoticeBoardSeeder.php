<?php

use Illuminate\Database\Seeder;

class NoticeBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $data[0] = ['HTML'];
        $data[1] = ['YOUTUBE'];
        foreach($data as $item)
        {
        DB::table('wpanel_board_type')
            ->insert([
            'key'=> $item[0],
        ]);
        }
    }
}
