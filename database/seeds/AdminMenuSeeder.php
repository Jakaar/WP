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
                'title' => '{"mn":"Хянах самбар","en":"Dashboard","kr":"대시보드"}',
                'url' => '/cms/dashboard',
                'parent_id' => null,
                'order' => 1,
                'is_active' => 1,
                'icon' => null,
            ], 
            [
                'id' => 2,
                'title' => '{"mn":"Үндсэн тохиргоо ","en":"Basic Settings","kr":"기본설정"}',
                'url' => '/cms/basic_setting',
                'parent_id' => 3,
                'order' => 7,
                'is_active' => 1,
                'icon' => null,
            ], 
            [
                'id' => 3,
                'title' => '{"mn":"Тохиргоо","en":"Configuration","kr":"환경설정"}',
                'url' => '/cms/preferences',
                'parent_id' => null,
                'order' => 1,
                'is_active' => 1,
                'icon' => 'pe-7s-settings',
            ], 
            [
                'id' => 27,
                'title' => '{"mn":"Тохиргоо","en":"Configuration","kr":"환경설정"}',
                'url' => '/cms/preferences',
                'parent_id' => 3,
                'order' => 1,
                'is_active' => 1,
                'icon' => 'pe-7s-settings',
            ],
            [
                'id' => 4,
                'title' => '{"mn":"Хуудас удирдах","en":"Page manage","kr":"페이지 관리"}',
                'url' => '/cms/manage_pages',
                'parent_id' => null,
                'order' => 4,
                'is_active' => 1,
                'icon' => null,
            ], 
            [
                'id' => 5,
                'title' => '{"mn":"И-Мейл удирдах","en":"Form Mail Manage","kr":"폼메일 관리"}',
                'url' => '/cms/suppliers',
                'parent_id' => null,
                'order' => 5,
                'is_active' => 1,
                'icon' => null,
            ],
            [
                'id' => 6,
                'title' => '{"mn":"Форм үүсгэх","en":"Form Create","kr":"생성에서"}',
                'url' => '/cms/suppliers/create',
                'parent_id' => 5,
                'order' => 1,
                'is_active' => 1,
                'icon' => 'pe-7s-browser',
            ],
            [
                'id' => 7,
                'title' => '{"mn":"И-Мейл удирдах","en":"Mail Manage","kr":"메일 관리"}',
                'url' => '/cms/suppliers',
                'parent_id' => 5,
                'order' => 2,
                'is_active' => 1,
                'icon' => 'pe-7s-mail',
            ],
            [
                'id' => 8,
                'title' => '{"mn":"Мэдээллийн самбар","en":"Notice board management","kr":"게시판 관리"}',
                'url' => '/cms/noticeboard',
                'parent_id' => null,
                'order' => 6,
                'is_active' => 1,
                'icon' => null,
            ], 
            [
                'id' => 9,
                'title' => '{"mn":"Бүтээгдэхүүний удирдлага","en":"Product Manage","kr":"상품 관리"}',
                'url' => '/cms/products',
                'parent_id' => null,
                'order' => 7,
                'is_active' => 1,
                'icon' => null,
            ], 
            [
                'id' => 10,
                'title' => '{"mn":"Баннер удирдах","en":"Banner Manage","kr":"배너관리"}',
                'url' => '/cms/banner',
                'parent_id' => null,
                'order' => 8,
                'is_active' => 1,
                'icon' => null,
            ], 
           
            [

                'id' => 12,
                'title' => '{"mn":"Нэвтрэх оролдлого","en":"Log","kr":"로그인 시도"}',
                'url' => '/cms/User/LogViewer',
                'parent_id' => null,
                'order' => 11,
                'is_active' => 1,
                'icon' => 'pe-7s-note2',

            ],

            [
                'id' => 13,
                'title' => '{"mn":"Лог","en":"Logger","kr":"로거"}',
                'url' => '/cms/preferences/logger',
                'parent_id' => 3,
                'order' => 2,
                'is_active' => 1,
                'icon' => 'pe-7s-news-paper',
            ],
            [
                'id' => 14,
                'title' => '{"mn":"Боломжит хэл","en":"Available Language","kr":"언어 추가"}',
                'url' => '/cms/preferences/language',
                'parent_id' => 3,
                'order' => 3,
                'is_active' => 1,
                'icon' => 'pe-7s-global',
            ],
            [
                'id' => 15,
                'title' => '{"mn":"Тогтмол Файл","en":"Static File","kr":"파일 관리"}',
                'url' => '/cms/preferences/static_file',
                'parent_id' => 3,
                'order' => 4,
                'is_active' => 1,
                'icon' => 'pe-7s-folder',
            ],
            [
                'id' => 16,
                'title' => '{"mn":"Админ Mеню","en":"Admin Menu Manage","kr":"관리자 메뉴 관리"}',
                'url' => '/cms/preferences/menu',
                'parent_id' => 3,
                'order' => 5,
                'is_active' => 1,
                'icon' => 'pe-7s-menu',
            ],
            [
                'id' => 17,
                'title' => '{"mn":"Хавтасны төрөл","en":"Board Type","kr":"보드형"}',
                'url' => '/cms/preferences/board_type',
                'parent_id' => 3,
                'order' => 6,
                'is_active' => 1,
                'icon' => 'pe-7s-tools',
            ],
            [
                'id' => 22,
                'title' => '{"mn":"Хэрэглэгчийн цэс","en":"User menu","kr":"사용자 메뉴 관리"}',
                'url' => '/cms/user_menu',
                'parent_id' => null,
                'order' => 3,
                'is_active' => 1,
                'icon' => null,
            ],
            [
                'id' => 23,
                'title' => '{"mn":"Категорийн удирдлага","en":"Category Management","kr":"카테고리 관리"}',
                'url' => '/cms/categories',
                'parent_id' => 9,
                'order' => 2,
                'is_active' => 1,
                'icon' => 'pe-7s-note2'
            ],
            [
                'id' => 28,
                'title' => '{"mn":"Бүтээгдэхүүний удирдлага","en":"Product Management","kr":"상품 관리"}',
                'url' => '/cms/products',
                'parent_id' => 9,
                'order' => 1,
                'is_active' => 1,
                'icon' => 'pe-7s-box2',
            ],
            [
                'id' => 24,
                'title' => '{"mn":"Ашиглалтын дүрэм","en":"Terms of Use","kr":"이용약관"}',
                'url' => '/cms/terms',
                'parent_id' => 2,
                'order' => 1,
                'is_active' => 1,
                'icon' => null,
            ],
            [
                'id' => 25,
                'title' => '{"mn":"Нууцлалын Бодлого","en":"Privacy Policy","kr":"개인정보보호정책"}',
                'url' => '/cms/privacy',
                'parent_id' => 2,
                'order' => 2,
                'is_active' => 1,
                'icon' => null,
            ],
            [
                'id' => 26,
                'title' => '{"mn":"Хэрэглэгчийн удирдлага","en":"Member Manage","kr":"회원 관리"}',
                'url' => '/cms/member_manage/users',
                'parent_id' => null,
                'order' => 12,
                'is_active' => 1,
                'icon' => null,
            ],

            [
                'id' => 18,
                'title' => '{"mn":"Aдмин удирдлага","en":"Admin Manage","kr":"관리자 관리"}',
                'url' => '/cms/member_management/users',
                'parent_id' => 3,
                'order' => 6,
                'is_active' => 1,
                'icon' => null,
            ],
            [
                'id' => 19,
                'title' => '{"mn":"Хэрэглэгчийн эрх","en":"Member Role Management","kr":"회원 역할 관리"}',
                'url' => '/cms/member_management/permission',
                'parent_id' => 18,
                'order' => 2,
                'is_active' => 1,
                'icon' => 'pe-7s-way',
            ],
            [
                'id' => 20,
                'title' => '{"mn":"Гарсан гишүүн","en":"Withdrawal member","kr":"탈퇴 회원"}',
                'url' => '/cms/member_management/secessionist',
                'parent_id' => 18,
                'order' => 3,
                'is_active' => 1,
                'icon' => 'pe-7s-delete-user',
            ],
            [
                'id' => 21,
                'title' => '{"mn":"Эрхийн тохиргоо","en":"Permission settings","kr":"권한 설정"}',
                'url' => '/cms/member_management/settings',
                'parent_id' => 18,
                'order' => 4,
                'is_active' => 1,
                'icon' => 'pe-7s-settings',
            ],

           
        ]);
    }
}
