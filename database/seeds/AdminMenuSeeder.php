<?php

use Illuminate\Database\Seeder;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_menus')->insert([
            [
                'id' => 1,
                'title' =>  '{"mn":"Удирдах самбар","en":"Control Panel","kr":"제어판"}',
                'url' =>  '/cms/preferences',
                'parent_id' => null,
                'order' => 1,
                'is_active' => 1,
                'icon' => 'pe-7s-display1',
            ],
            [
                'id' => 2,
                'title' =>  '{"mn":"Тохиргоо","en":"Configuration","kr":"환경설정"}',
                'url' =>  '/cms/preferences',
                'parent_id' => 1,
                'order' => 1,
                'is_active' => 1,
                'icon' => 'pe-7s-settings',
            ],
        //     [
        //        'id' => 3,
        //        'title' =>  '{"mn":"Аналитик","en":"Analytic","kr":"분석"}',
        //        'url' =>  '/cms/preferences/analystic',
        //        'parent_id' => 1,
        //        'order' => 2,
        //        'is_active' => 1,
        //        'icon' => 'pe-7s-graph',
        //    ],
           [
               'id' => 4,
               'title' =>  '{"mn":"Лог","en":"Logger","kr":"로거"}',
               'url' =>  '/cms/preferences/logger',
               'parent_id' => 1,
               'order' => 3,
               'is_active' => 1,
               'icon' => 'pe-7s-news-paper',
           ],
           [
                'id' => 5,
                'title' =>  '{"mn":"Боломжит хэл","en":"Available Language","kr":"언어 추가"}',
                'url' =>  '/cms/preferences/language',
                'parent_id' => 1,
                'order' => 4,
                'is_active' => 1,
                'icon' => 'pe-7s-global',
           ],
           [
                'id' => 6,
                'title' =>  '{"mn":"Тогтмол Файл","en":"Static File","kr":"정적 파일"}',
                'url' =>  '/cms/preferences/static_file',
                'parent_id' => 1,
                'order' => 5,
                'is_active' => 1,
                'icon' => 'pe-7s-folder',
            ],
            [
                'id' => 7,
                'title' =>  '{"mn":"Админ меню","en":"Admin menu","kr":"관리자 메뉴"}',
                'url' =>  '/cms/preferences/menu',
                'parent_id' => 1,
                'order' => 6,
                'is_active' => 1,
                'icon' => 'pe-7s-menu',
            ],

            [
                'id' => 28,
                'title' =>  '{"mn":"Хавтасны төрөл","en":"Board Type","kr":"보드형"}',
                'url' =>  '/cms/preferences/board_type',
                'parent_id' => 1,
                'order' => 7,
                'is_active' => 1,
                'icon' => 'pe-7s-tools',
            ],

            [
                'id' => 8,
                'title' =>  '{"mn":"Хянах самбар","en":"Dashboard","kr":"대시보드"}',
                'url' =>  '/cms/dashboard',
                'parent_id' => null,
                'order' => 2,
                'is_active' => 1,
                'icon' => null,
            ],
            [
                'id' => 9,
                'title' =>  '{"mn":"Хуудас удирдах","en":"Page manage","kr":"페이지 관리"}',
                'url' =>  '/cms/manage_pages',
                'parent_id' => null,
                'order' => 3,
                'is_active' => 1,
                'icon' => null,
            ],
            [
                'id' => 10,
                'title' =>  '{"mn":"Гишүүд","en":"Member Manage","kr":"회원 관리"}',
                'url' =>  '/cms/member_management/users',
                'parent_id' => null,
                'order' => 4,
                'is_active' => 1,
                'icon' => null,
            ],
            [
                'id' => 20,
                'title' =>  '{"mn":"Гишүүд","en":"Member Manage","kr":"회원 관리"}',
                'url' =>  '/cms/member_management/users',
                'parent_id' => 10,
                'order' => 1,
                'is_active' => 1,
                'icon' => 'pe-7s-users',
            ],
            [
                'id' => 11,
                'title' => '{"mn":"Хэрэглэгчийн эрх","en":"Member role management","kr":"회원 역할 관리"}',
                'url' => '/cms/member_management/permission',
                'parent_id' => 10,
                'order' => 2,
                'is_active' => 1,
                'icon' => 'pe-7s-way',
            ],
            [
                'id' => 12,
                'title' => '{"mn":"Гарсан гишүүн","en":"Withdrawal member","kr":"탈퇴 회원"}',
                'url' => '/cms/member_management/secessionist',
                'parent_id' => 10,
                'order' => 3,
                'is_active' => 1,
                'icon' => 'pe-7s-delete-user',
            ],
            [
                'id' => 15,
                'title' => '{"mn":"Эрхийн тохиргоо","en":"Permission settings","kr":"권한 설정"}',
                'url' => '/cms/member_management/settings',
                'parent_id' => 10,
                'order' => 4,
                'is_active' => 1,
                'icon' => 'pe-7s-settings',
            ],
            [
                'id' => 16,
                'title' =>  '{"mn":"Мэдээллийн самбар","en":"Notice board management","kr":"게시판 관리"}',
                'url' =>  '/cms/noticeboard',
                'parent_id' => null,
                'order' => 6,
                'is_active' => 1,
                'icon' => null,
            ],
            [
                'id' => 17,
                'title' =>  '{"mn":"И-Мейл удирдах","en":"Form Mail Manage","kr":"폼메일 관리"}',
                'url' =>  '/cms/suppliers',
                'parent_id' => null,
                'order' => 7,
                'is_active' => 1,
                'icon' => null,
            ],
            [
                'id' => 18,
                'title' =>  '{"mn":"Баннер удирдах","en":"Banner Manage","kr":"배너관리"}',
                'url' =>  '/cms/banner',
                'parent_id' => null,
                'order' => 8,
                'is_active' => 1,
                'icon' => null,
            ],
            [
                'id' => 19,
                'title' =>  '{"mn":"Хэрэглэгчийн цэс","en":"User menu","kr":"사용자 메뉴"}',
                'url' =>  '/cms/user_menu',
                'parent_id' => null,
                'order' => 12,
                'is_active' => 1,
                'icon' => null,
            ],
            [
                'id' => 21,
                'title' =>  '{"mn":"Бүтээгдэхүүний удирдлага","en":"Product Manage","kr":"상품 관리"}',
                'url' =>  '/cms/products',
                'parent_id' => null,
                'order' => 9,
                'is_active' => 1,
                'icon' => null,
            ],

            [
                'id' => 22,
                'title' =>  '{"mn":"Категорийн удирдлага","en":"Category Management","kr":"카테고리 관리"}',
                'url' =>  '/cms/categories',
                'parent_id' => 21,
                'order' => 2,
                'is_active' => 1,
                'icon' => 'pe-7s-note2'
            ],
            [
                'id' => 23,
                'title' =>  '{"mn":"Үндсэн тохиргоо ","en":"Basic Settings","kr":"기본설정"}',
                'url' =>  '/cms/basic_setting',
                'parent_id' => null,
                'order' => 2,
                'is_active' => 1,
                'icon' => null,
            ],
            [
                'id' => 30,
                'title' =>  '{"mn":"Terms of Use","en":"Terms of Use","kr":"Terms of Use"}',
                'url' =>  '/cms/terms',
                'parent_id' => 23,
                'order' => 1,
                'is_active' => 1,
                'icon' => null,
            ],
            [
                'id' => 31,
                'title' =>  '{"mn":"Privacy Policy","en":"Privacy Policy","kr":"Privacy Policy"}',
                'url' =>  '/cms/privacy',
                'parent_id' => 23,
                'order' => 2,
                'is_active' => 1,
                'icon' => null,
            ],
            [
                'id' => 24,
                'title' =>  '{"mn":"Сайтын мэдээлэл","en":"Site Information","kr":"사이트 정보"}',
                'url' =>  '/cms/basic_setting',
                'parent_id' => 23,
                'order' => 1,
                'is_active' => 1,
                'icon' => 'pe-7s-info',
            ],
            [
                'id' => 25,
                'title' =>  '{"mn":"Бүтээгдэхүүний удирдлага","en":"Product Management","kr":"상품 관리"}',
                'url' =>  '/cms/products',
                'parent_id' => 21,
                'order' => 1,
                'is_active' => 1,
                'icon' => 'pe-7s-box2',
            ],
            [
                'id' => 26,
                'title' =>  '{"mn":"Форм үүсгэх","en":"Form Create","kr":"생성에서"}',
                'url' =>  '/cms/suppliers/create',
                'parent_id' => 17,
                'order' => 2,
                'is_active' => 1,
                'icon' => 'pe-7s-browser',
            ],
            [
                'id' => 27,
                'title' =>  '{"mn":"И-Мейл удирдах","en":"Form Mail Manage","kr":"폼메일 관리"}',
                'url' =>  '/cms/suppliers',
                'parent_id' => 17,
                'order' => 1,
                'is_active' => 1,
                'icon' => 'pe-7s-mail',
            ],
            [
                'id' => 29,
                'title' =>  '{"mn":"Нэвтрэх оролдлого","en":"Log","kr":"로그인 시도"}',
                'url' =>  '/cms/User/LogViewer',
                'parent_id' => null,
                'order' => 13,
                'is_active' => 1,
                'icon' => 'pe-7s-note2',
            ]
        ]);
    }
}
