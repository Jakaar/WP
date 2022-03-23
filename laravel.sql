-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2022 at 09:26 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_menus`
--

CREATE TABLE `admin_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT '1',
  `is_active` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menus`
--

INSERT INTO `admin_menus` (`id`, `title`, `icon`, `url`, `parent_id`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '{\"mn\":\"Хянах самбар\",\"en\":\"Dashboard\",\"kr\":\"대시보드\"}', NULL, '/cms/dashboard', NULL, 1, 1, NULL, NULL),
(2, '{\"mn\":\"Үндсэн тохиргоо \",\"en\":\"Basic Settings\",\"kr\":\"기본설정\"}', NULL, '/cms/basic_setting', 3, 7, 1, NULL, NULL),
(3, '{\"mn\":\"Тохиргоо\",\"en\":\"Configuration\",\"kr\":\"환경설정\"}', 'pe-7s-settings', '/cms/preferences', NULL, 1, 1, NULL, NULL),
(4, '{\"mn\":\"Хуудас удирдах\",\"en\":\"Page manage\",\"kr\":\"페이지 관리\"}', NULL, '/cms/manage_pages', NULL, 4, 1, NULL, NULL),
(5, '{\"mn\":\"И-Мейл удирдах\",\"en\":\"Form Mail Manage\",\"kr\":\"폼메일 관리\"}', NULL, '/cms/suppliers', NULL, 5, 1, NULL, NULL),
(6, '{\"mn\":\"Форм үүсгэх\",\"en\":\"Form Create\",\"kr\":\"생성에서\"}', 'pe-7s-browser', '/cms/suppliers/create', 5, 1, 1, NULL, NULL),
(7, '{\"mn\":\"И-Мейл удирдах\",\"en\":\"Mail Manage\",\"kr\":\"메일 관리\"}', 'pe-7s-mail', '/cms/suppliers', 5, 2, 1, NULL, NULL),
(8, '{\"mn\":\"Мэдээллийн самбар\",\"en\":\"Notice board management\",\"kr\":\"게시판 관리\"}', NULL, '/cms/noticeboard', NULL, 6, 1, NULL, NULL),
(9, '{\"mn\":\"Бүтээгдэхүүний удирдлага\",\"en\":\"Product Manage\",\"kr\":\"상품 관리\"}', NULL, '/cms/products', NULL, 7, 1, NULL, NULL),
(10, '{\"mn\":\"Баннер удирдах\",\"en\":\"Banner Manage\",\"kr\":\"배너관리\"}', NULL, '/cms/banner', NULL, 8, 1, NULL, NULL),
(12, '{\"mn\":\"Нэвтрэх оролдлого\",\"en\":\"Log\",\"kr\":\"로그인 시도\"}', 'pe-7s-note2', '/cms/User/LogViewer', NULL, 11, 1, NULL, NULL),
(13, '{\"mn\":\"Лог\",\"en\":\"Logger\",\"kr\":\"로거\"}', 'pe-7s-news-paper', '/cms/preferences/logger', 3, 2, 1, NULL, NULL),
(14, '{\"mn\":\"Боломжит хэл\",\"en\":\"Available Language\",\"kr\":\"언어 추가\"}', 'pe-7s-global', '/cms/preferences/language', 3, 3, 1, NULL, NULL),
(15, '{\"mn\":\"Тогтмол Файл\",\"en\":\"Static File\",\"kr\":\"파일 관리\"}', 'pe-7s-folder', '/cms/preferences/static_file', 3, 4, 1, NULL, NULL),
(16, '{\"mn\":\"Админ Mеню\",\"en\":\"Admin Menu Manage\",\"kr\":\"관리자 메뉴 관리\"}', 'pe-7s-menu', '/cms/preferences/menu', 3, 5, 1, NULL, NULL),
(17, '{\"mn\":\"Хавтасны төрөл\",\"en\":\"Board Type\",\"kr\":\"보드형\"}', 'pe-7s-tools', '/cms/preferences/board_type', 3, 6, 1, NULL, NULL),
(18, '{\"mn\":\"Aдмин удирдлага\",\"en\":\"Admin Manage\",\"kr\":\"관리자 관리\"}', NULL, '/cms/member_management/users', 3, 6, 1, NULL, NULL),
(19, '{\"mn\":\"Хэрэглэгчийн эрх\",\"en\":\"Member Role Management\",\"kr\":\"회원 역할 관리\"}', 'pe-7s-way', '/cms/member_management/permission', 18, 2, 1, NULL, NULL),
(20, '{\"mn\":\"Гарсан гишүүн\",\"en\":\"Withdrawal member\",\"kr\":\"탈퇴 회원\"}', 'pe-7s-delete-user', '/cms/member_management/secessionist', 18, 3, 1, NULL, NULL),
(21, '{\"mn\":\"Эрхийн тохиргоо\",\"en\":\"Permission settings\",\"kr\":\"권한 설정\"}', 'pe-7s-settings', '/cms/member_management/settings', 18, 4, 1, NULL, NULL),
(22, '{\"mn\":\"Хэрэглэгчийн цэс\",\"en\":\"User menu\",\"kr\":\"사용자 메뉴 관리\"}', NULL, '/cms/user_menu', NULL, 3, 1, NULL, NULL),
(23, '{\"mn\":\"Категорийн удирдлага\",\"en\":\"Category Management\",\"kr\":\"카테고리 관리\"}', 'pe-7s-note2', '/cms/categories', 9, 2, 1, NULL, NULL),
(24, '{\"mn\":\"Ашиглалтын дүрэм\",\"en\":\"Terms of Use\",\"kr\":\"이용약관\"}', NULL, '/cms/terms', 2, 1, 1, NULL, NULL),
(25, '{\"mn\":\"Нууцлалын Бодлого\",\"en\":\"Privacy Policy\",\"kr\":\"개인정보보호정책\"}', NULL, '/cms/privacy', 2, 2, 1, NULL, NULL),
(26, '{\"mn\":\"Хэрэглэгчийн удирдлага\",\"en\":\"Member Manage\",\"kr\":\"회원 관리\"}', NULL, '/cms/member_manage/users', NULL, 12, 1, NULL, NULL),
(27, '{\"mn\":\"Тохиргоо\",\"en\":\"Configuration\",\"kr\":\"환경설정\"}', 'pe-7s-settings', '/cms/preferences', 3, 1, 1, NULL, NULL),
(28, '{\"mn\":\"Бүтээгдэхүүний удирдлага\",\"en\":\"Product Management\",\"kr\":\"상품 관리\"}', 'pe-7s-box2', '/cms/products', 9, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_login_attemp`
--

CREATE TABLE `auth_login_attemp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempted_date` datetime NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `menu_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isEnabled` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `board_master_id` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_form_data`
--

CREATE TABLE `client_form_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submited_at` timestamp NOT NULL,
  `form_id` int(11) NOT NULL,
  `isEnabled` int(11) NOT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_form_data_file`
--

CREATE TABLE `client_form_data_file` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `realname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_form_data_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_static_file`
--

CREATE TABLE `client_static_file` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` int(11) NOT NULL,
  `file_absolute_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_static_file_type`
--

CREATE TABLE `client_static_file_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `commenter_id` int(10) UNSIGNED NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `child_id` int(10) UNSIGNED DEFAULT NULL,
  `rating` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment_votes`
--

CREATE TABLE `comment_votes` (
  `id` int(10) UNSIGNED NOT NULL,
  `commenter_id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED NOT NULL,
  `commenter_vote` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content_categories`
--

CREATE TABLE `content_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `isEnabled` int(11) NOT NULL,
  `board_master_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filemanager`
--

CREATE TABLE `filemanager` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ext` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` double(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `absolute_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_builded`
--

CREATE TABLE `form_builded` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_status` int(11) NOT NULL,
  `receive_email` int(11) NOT NULL,
  `board_master_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `data` json NOT NULL,
  `isEnabled` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_activities`
--

CREATE TABLE `log_activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isEnabled` int(11) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_products`
--

CREATE TABLE `main_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `showing_order` int(11) DEFAULT NULL,
  `is_status` int(11) NOT NULL,
  `is_hit` int(11) NOT NULL,
  `is_suggest` int(11) NOT NULL,
  `is_new` int(11) NOT NULL,
  `is_trend` int(11) NOT NULL,
  `is_sale` int(11) NOT NULL,
  `manufacturer` text COLLATE utf8mb4_unicode_ci,
  `created_county` text COLLATE utf8mb4_unicode_ci,
  `brand_name` text COLLATE utf8mb4_unicode_ci,
  `model_name` text COLLATE utf8mb4_unicode_ci,
  `price` bigint(20) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_photos` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_product_categories`
--

CREATE TABLE `main_product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main__category`
--

CREATE TABLE `main__category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_enabled` int(11) NOT NULL DEFAULT '1',
  `board_master_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main__category__page`
--

CREATE TABLE `main__category__page` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_enabled` int(11) NOT NULL,
  `main_category_id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_img` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main__f_a_q`
--

CREATE TABLE `main__f_a_q` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_enable` int(11) NOT NULL DEFAULT '1',
  `board_master_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main__gallery__category`
--

CREATE TABLE `main__gallery__category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_enable` int(11) NOT NULL,
  `board_master_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main__gallery__photos`
--

CREATE TABLE `main__gallery__photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photos` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main__single_page_data`
--

CREATE TABLE `main__single_page_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_enable` int(11) NOT NULL,
  `board_master_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_30_113500_create_comments_table', 1),
(4, '2018_11_15_135428_create_comments_votes_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2020_05_02_100001_create_filemanager_table', 1),
(7, '2021_10_05_063158_create_wpanel_contact_us_table', 1),
(8, '2021_10_11_073459_create_wpanel_site_info', 1),
(9, '2021_10_11_181805_create_wpanel_articles', 1),
(10, '2021_10_11_181819_create_wpanel_article_category', 1),
(11, '2021_10_13_071331_create_wpanel_board_type', 1),
(12, '2021_10_13_071343_create_wpanel_board_master', 1),
(13, '2021_10_15_022626_create_wpanel_board_data', 1),
(14, '2021_10_25_052151_create_wpanel_page_manage', 1),
(15, '2021_10_25_080954_create_categories_table', 1),
(16, '2021_10_27_045613_create_wpanel_product_category', 1),
(17, '2021_10_28_062421_create_wpanel_settings_table', 1),
(18, '2021_10_29_002346_create_wpanel_product_manage', 1),
(19, '2021_11_01_015712_create_wpanel_available_language', 1),
(20, '2021_11_04_003822_create_mail_table', 1),
(21, '2021_11_04_031402_laratrust_setup_tables', 1),
(22, '2021_11_08_021946_create_wpanel_banners_table', 1),
(23, '2021_11_08_022720_create_client_static_file_type', 1),
(24, '2021_11_08_022747_create_client_static_file', 1),
(25, '2021_11_09_030926_create_content_categories_table', 1),
(26, '2021_11_11_022206_create_log_activities_table', 1),
(27, '2021_11_12_051509_create_admin_menus_table', 1),
(28, '2021_11_17_073352_create_main_products', 1),
(29, '2021_11_19_064748_create_wpanel_mail_form_table', 1),
(30, '2021_11_22_032653_main_product_categories', 1),
(31, '2021_11_22_053155_create_wpanel_password_reset', 1),
(32, '2021_11_23_062048_create_form_builded', 1),
(33, '2021_11_25_011449_create_main__f_a_q', 1),
(34, '2021_11_25_025518_create_main__gallery__photos', 1),
(35, '2021_11_25_025953_create_main__gallery__category', 1),
(36, '2021_11_29_014152_create_main__single_page_data', 1),
(37, '2021_11_30_014812_create_auth_login_attemp', 1),
(38, '2021_12_01_053516_create_main__category', 1),
(39, '2021_12_01_053536_create_main__category__page', 1),
(40, '2021_12_03_033225_create_client_form_data', 1),
(41, '2021_12_05_115900_create__comments', 1),
(42, '2021_12_05_132528_create_client_form_data_file', 1),
(43, '2021_12_07_064320_create__notice', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'member-create', 'Create Member', 'Create Member', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(2, 'member-read', 'Read Member', 'Read Member', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(3, 'member-update', 'Update Member', 'Update Member', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(4, 'member-delete', 'Delete Member', 'Delete Member', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(5, 'role-create', 'Create Role', 'Create Role', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(6, 'role-read', 'Read Role', 'Read Role', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(7, 'role-update', 'Update Role', 'Update Role', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(8, 'role-delete', 'Delete Role', 'Delete Role', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(9, 'permission-create', 'Create Permission', 'Create Permission', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(10, 'permission-read', 'Read Permission', 'Read Permission', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(11, 'permission-update', 'Update Permission', 'Update Permission', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(12, 'permission-delete', 'Delete Permission', 'Delete Permission', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(13, 'profile-read', 'Read Profile', 'Read Profile', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(14, 'profile-update', 'Update Profile', 'Update Profile', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(15, 'banner-create', 'Create Banner', 'Create Banner', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(16, 'banner-read', 'Read Banner', 'Read Banner', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(17, 'banner-update', 'Update Banner', 'Update Banner', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(18, 'banner-delete', 'Delete Banner', 'Delete Banner', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(19, 'product-create', 'Create Product', 'Create Product', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(20, 'product-read', 'Read Product', 'Read Product', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(21, 'product-update', 'Update Product', 'Update Product', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(22, 'product-delete', 'Delete Product', 'Delete Product', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(23, 'page-create', 'Create Page', 'Create Page', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(24, 'page-read', 'Read Page', 'Read Page', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(25, 'page-update', 'Update Page', 'Update Page', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(26, 'page-delete', 'Delete Page', 'Delete Page', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(27, 'noticeBoard-create', 'Create NoticeBoard', 'Create NoticeBoard', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(28, 'noticeBoard-read', 'Read NoticeBoard', 'Read NoticeBoard', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(29, 'noticeBoard-update', 'Update NoticeBoard', 'Update NoticeBoard', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(30, 'noticeBoard-delete', 'Delete NoticeBoard', 'Delete NoticeBoard', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(31, 'mail-create', 'Create Mail', 'Create Mail', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(32, 'mail-read', 'Read Mail', 'Read Mail', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(33, 'mail-update', 'Update Mail', 'Update Mail', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(34, 'mail-delete', 'Delete Mail', 'Delete Mail', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(35, 'userMenu-create', 'Create UserMenu', 'Create UserMenu', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(36, 'userMenu-read', 'Read UserMenu', 'Read UserMenu', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(37, 'userMenu-update', 'Update UserMenu', 'Update UserMenu', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(38, 'userMenu-delete', 'Delete UserMenu', 'Delete UserMenu', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(39, 'categoryProduct-create', 'Create CategoryProduct', 'Create CategoryProduct', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(40, 'categoryProduct-read', 'Read CategoryProduct', 'Read CategoryProduct', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(41, 'categoryProduct-update', 'Update CategoryProduct', 'Update CategoryProduct', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(42, 'categoryProduct-delete', 'Delete CategoryProduct', 'Delete CategoryProduct', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(43, 'dashboard-create', 'Create Dashboard', 'Create Dashboard', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(44, 'dashboard-read', 'Read Dashboard', 'Read Dashboard', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(45, 'dashboard-update', 'Update Dashboard', 'Update Dashboard', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(46, 'dashboard-delete', 'Delete Dashboard', 'Delete Dashboard', '2022-03-23 09:04:46', '2022-03-23 09:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(19, 2),
(20, 2),
(21, 2),
(23, 2),
(24, 2),
(25, 2),
(27, 2),
(28, 2),
(29, 2),
(31, 2),
(32, 2),
(33, 2),
(35, 2),
(36, 2),
(37, 2),
(39, 2),
(40, 2),
(41, 2),
(43, 2),
(44, 2),
(45, 2),
(13, 3),
(14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'owner', 'Owner', 'Owner', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(2, 'admin', 'Admin', 'Admin', '2022-03-23 09:04:46', '2022-03-23 09:04:46'),
(3, 'user', 'User', 'User', '2022-03-23 09:04:46', '2022-03-23 09:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reporting_to` int(11) DEFAULT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` enum('','Male','Female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `designation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `avatar` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urls` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('New','Active','Suspended','Locked') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_folder` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subscribed` int(11) DEFAULT NULL,
  `isEnabled` int(11) NOT NULL DEFAULT '1',
  `reason` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `google_id`, `reporting_to`, `firstname`, `lastname`, `email`, `password`, `api_token`, `remember_token`, `sex`, `dob`, `doj`, `designation`, `mobile`, `phone`, `birthdate`, `address`, `street`, `city`, `district`, `state`, `country`, `avatar`, `web`, `urls`, `status`, `email_verified_at`, `user_id`, `user_type`, `upload_folder`, `deleted_at`, `created_at`, `updated_at`, `subscribed`, `isEnabled`, `reason`) VALUES
(1, NULL, NULL, 'Admins father', 'Admin name', 'admin@admin.com', '$2y$10$EQN438KD5MZy/oNYGxy1rOiNV4UHihCvX/P2z5haOtb5SrdyMJyO2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-23 09:04:46', '2022-03-23 09:04:46', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wpanel_articles`
--

CREATE TABLE `wpanel_articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isEnabled` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `isDraft` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wpanel_article_category`
--

CREATE TABLE `wpanel_article_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wpanel_available_language`
--

CREATE TABLE `wpanel_available_language` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wpanel_available_language`
--

INSERT INTO `wpanel_available_language` (`id`, `country`, `country_code`, `created_at`, `updated_at`) VALUES
(1, 'Монгол', 'mn', NULL, NULL),
(2, 'English', 'en', NULL, NULL),
(3, 'Korea', 'kr', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wpanel_banners`
--

CREATE TABLE `wpanel_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_content` text COLLATE utf8mb4_unicode_ci,
  `priority` int(11) NOT NULL,
  `daterange` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isEnabled` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wpanel_board_data`
--

CREATE TABLE `wpanel_board_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_master_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `content` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wpanel_board_master`
--

CREATE TABLE `wpanel_board_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `board_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isComment` int(11) NOT NULL,
  `isReply` int(11) NOT NULL,
  `isRegister` int(11) NOT NULL,
  `isRating` int(11) NOT NULL,
  `isFile` int(11) NOT NULL,
  `isBoard` int(11) NOT NULL,
  `isCategory` int(11) NOT NULL,
  `isEnabled` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wpanel_board_type`
--

CREATE TABLE `wpanel_board_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wpanel_board_type`
--

INSERT INTO `wpanel_board_type` (`id`, `key`, `created_at`, `updated_at`) VALUES
(1, 'SinglePage', NULL, NULL),
(2, 'Category', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wpanel_contact_us`
--

CREATE TABLE `wpanel_contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_content` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wpanel_contact_us`
--

INSERT INTO `wpanel_contact_us` (`id`, `title`, `email`, `phone`, `short_content`, `address`, `facebook`, `youtube`, `twitter`, `linkedin`) VALUES
(1, 'Your title here', 'ex: younsun.ryu@hotmail.com', 'ex: 02-5037-7308', 'ex: 회사소개문구란 회사를 사람들에게 소개하기 위한 문구. 기업은 해당 기업을 잘 모르는 사용자, 소비자가 있거나 투자자 유치를 위해서 기업을 홍보하기 위해서 기업에 대해 소개를 하기 위해서 회사 소개 문구를 작성한다.', 'ex: 울산광역시 북구 언주로 7384', 'Your facebook page', 'Your youtube channel here', 'Your twitter account', 'Your linked in account');

-- --------------------------------------------------------

--
-- Table structure for table `wpanel_mail_form`
--

CREATE TABLE `wpanel_mail_form` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `group` int(11) NOT NULL,
  `isEnabled` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wpanel_page_manage`
--

CREATE TABLE `wpanel_page_manage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isEnable` int(11) DEFAULT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wpanel_password_reset`
--

CREATE TABLE `wpanel_password_reset` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wpanel_product_category`
--

CREATE TABLE `wpanel_product_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `explanation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wpanel_product_manage`
--

CREATE TABLE `wpanel_product_manage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_classification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_informationlist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_informationreduction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_informationdetail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_informationenlargement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci,
  `isEnable` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wpanel_settings`
--

CREATE TABLE `wpanel_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wpanel_settings`
--

INSERT INTO `wpanel_settings` (`id`, `display_name`, `key`, `value`, `details`, `type`, `order`, `group`, `created_at`, `updated_at`) VALUES
(1, 'Weather API', 'Weather_wapi', '947c5c46b768464e9f621616210211', NULL, 'text', 1, 'Weather', NULL, NULL),
(2, 'Weather City', 'Weather_wcity', 'Ulaanbaatar', NULL, 'text', 1, 'Weather', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wpanel_site_info`
--

CREATE TABLE `wpanel_site_info` (
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_register_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_of_condition` text COLLATE utf8mb4_unicode_ci,
  `privacy` text COLLATE utf8mb4_unicode_ci,
  `terms_of_condition_name_url` text COLLATE utf8mb4_unicode_ci,
  `privacy_name_url` text COLLATE utf8mb4_unicode_ci,
  `personal_information_manager` text COLLATE utf8mb4_unicode_ci,
  `location` text COLLATE utf8mb4_unicode_ci,
  `recieve_promotional_information` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wpanel_site_info`
--

INSERT INTO `wpanel_site_info` (`company_name`, `site_name`, `fax`, `company_register_number`, `phone_number`, `address`, `email`, `site_copyright`, `logo`, `terms_of_condition`, `privacy`, `terms_of_condition_name_url`, `privacy_name_url`, `personal_information_manager`, `location`, `recieve_promotional_information`) VALUES
('{\"mn\": \"Монгол\", \"en\": \"English\", \"kr\": \"정보를 입력하세요\"}', '{\"mn\": \"Монгол\", \"en\": \"English\", \"kr\": \"정보를 입력하세요\"}', 'Your fax here', 'Your company register number', 'Your phone', '{\"mn\": \"Монгол\", \"en\": \"English\", \"kr\": \"정보를 입력하세요\"}', 'You Company email', '{\"mn\": \"Монгол\", \"en\": \"English\", \"kr\": \"정보를 입력하세요\"}', NULL, NULL, NULL, NULL, NULL, '{\"mn\": \"Монгол\", \"en\": \"English\", \"kr\": \"정보를 입력하세요\"}', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_comments`
--

CREATE TABLE `_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  `board_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_notice`
--

CREATE TABLE `_notice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `isEnabled` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `board_master_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_menus`
--
ALTER TABLE `admin_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_login_attemp`
--
ALTER TABLE `auth_login_attemp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `client_form_data`
--
ALTER TABLE `client_form_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_form_data_file`
--
ALTER TABLE `client_form_data_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_static_file`
--
ALTER TABLE `client_static_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_static_file_type`
--
ALTER TABLE `client_static_file_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  ADD KEY `comments_child_id_foreign` (`child_id`),
  ADD KEY `comments_commenter_id_index` (`commenter_id`);

--
-- Indexes for table `comment_votes`
--
ALTER TABLE `comment_votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_votes_commenter_id_index` (`commenter_id`),
  ADD KEY `comment_votes_comment_id_index` (`comment_id`);

--
-- Indexes for table `content_categories`
--
ALTER TABLE `content_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_categories_content_category_id_foreign` (`content_category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filemanager`
--
ALTER TABLE `filemanager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_builded`
--
ALTER TABLE `form_builded`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_activities`
--
ALTER TABLE `log_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_products`
--
ALTER TABLE `main_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `main_products_sku_unique` (`sku`);

--
-- Indexes for table `main_product_categories`
--
ALTER TABLE `main_product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main__category`
--
ALTER TABLE `main__category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main__category__page`
--
ALTER TABLE `main__category__page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main__f_a_q`
--
ALTER TABLE `main__f_a_q`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main__gallery__category`
--
ALTER TABLE `main__gallery__category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main__gallery__photos`
--
ALTER TABLE `main__gallery__photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main__single_page_data`
--
ALTER TABLE `main__single_page_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wpanel_articles`
--
ALTER TABLE `wpanel_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wpanel_article_category`
--
ALTER TABLE `wpanel_article_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wpanel_available_language`
--
ALTER TABLE `wpanel_available_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wpanel_banners`
--
ALTER TABLE `wpanel_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wpanel_board_data`
--
ALTER TABLE `wpanel_board_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wpanel_board_data_board_master_id_foreign` (`board_master_id`);

--
-- Indexes for table `wpanel_board_master`
--
ALTER TABLE `wpanel_board_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wpanel_board_type`
--
ALTER TABLE `wpanel_board_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wpanel_contact_us`
--
ALTER TABLE `wpanel_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wpanel_mail_form`
--
ALTER TABLE `wpanel_mail_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wpanel_page_manage`
--
ALTER TABLE `wpanel_page_manage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wpanel_password_reset`
--
ALTER TABLE `wpanel_password_reset`
  ADD UNIQUE KEY `wpanel_password_reset_email_unique` (`email`);

--
-- Indexes for table `wpanel_product_category`
--
ALTER TABLE `wpanel_product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wpanel_product_manage`
--
ALTER TABLE `wpanel_product_manage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wpanel_settings`
--
ALTER TABLE `wpanel_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_comments`
--
ALTER TABLE `_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_notice`
--
ALTER TABLE `_notice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_menus`
--
ALTER TABLE `admin_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `auth_login_attemp`
--
ALTER TABLE `auth_login_attemp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_form_data`
--
ALTER TABLE `client_form_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_form_data_file`
--
ALTER TABLE `client_form_data_file`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_static_file`
--
ALTER TABLE `client_static_file`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_static_file_type`
--
ALTER TABLE `client_static_file_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_votes`
--
ALTER TABLE `comment_votes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `content_categories`
--
ALTER TABLE `content_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filemanager`
--
ALTER TABLE `filemanager`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_builded`
--
ALTER TABLE `form_builded`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_activities`
--
ALTER TABLE `log_activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_products`
--
ALTER TABLE `main_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_product_categories`
--
ALTER TABLE `main_product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main__category`
--
ALTER TABLE `main__category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main__category__page`
--
ALTER TABLE `main__category__page`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main__f_a_q`
--
ALTER TABLE `main__f_a_q`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main__gallery__category`
--
ALTER TABLE `main__gallery__category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main__gallery__photos`
--
ALTER TABLE `main__gallery__photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main__single_page_data`
--
ALTER TABLE `main__single_page_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wpanel_articles`
--
ALTER TABLE `wpanel_articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wpanel_article_category`
--
ALTER TABLE `wpanel_article_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wpanel_available_language`
--
ALTER TABLE `wpanel_available_language`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wpanel_banners`
--
ALTER TABLE `wpanel_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wpanel_board_data`
--
ALTER TABLE `wpanel_board_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wpanel_board_master`
--
ALTER TABLE `wpanel_board_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wpanel_board_type`
--
ALTER TABLE `wpanel_board_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wpanel_contact_us`
--
ALTER TABLE `wpanel_contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wpanel_mail_form`
--
ALTER TABLE `wpanel_mail_form`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wpanel_page_manage`
--
ALTER TABLE `wpanel_page_manage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wpanel_product_category`
--
ALTER TABLE `wpanel_product_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wpanel_product_manage`
--
ALTER TABLE `wpanel_product_manage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wpanel_settings`
--
ALTER TABLE `wpanel_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `_comments`
--
ALTER TABLE `_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_notice`
--
ALTER TABLE `_notice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `content_categories`
--
ALTER TABLE `content_categories`
  ADD CONSTRAINT `content_categories_content_category_id_foreign` FOREIGN KEY (`content_category_id`) REFERENCES `content_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wpanel_board_data`
--
ALTER TABLE `wpanel_board_data`
  ADD CONSTRAINT `wpanel_board_data_board_master_id_foreign` FOREIGN KEY (`board_master_id`) REFERENCES `wpanel_board_master` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
