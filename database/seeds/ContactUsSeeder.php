<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wpanel_contact_us')->insert([
            'title' => 'Your title here',
            'email' => 'ex: younsun.ryu@hotmail.com',
            'phone' => 'ex: 02-5037-7308',
            'short_content' => 'ex: 회사소개문구란 회사를 사람들에게 소개하기 위한 문구. 기업은 해당 기업을 잘 모르는 사용자, 소비자가 있거나 투자자 유치를 위해서 기업을 홍보하기 위해서 기업에 대해 소개를 하기 위해서 회사 소개 문구를 작성한다.',
            'address' => 'ex: 울산광역시 북구 언주로 7384',
            'facebook' => 'Your facebook page',
            'youtube' => 'Your youtube channel here',
            'twitter' => 'Your twitter account',
            'linkedin' => 'Your linked in account'
        ]);
    }
}
