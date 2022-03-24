<p align="center">
    <a href="tel:88052618" target="_blank">
        <img src="https://avatars.githubusercontent.com/u/54393995?v=4" width="100">
    </a>
</p>
<p align="center">
    Developed by Jakaar
</p>

# WP-CMS v0.0.1-ийн тухай.
`1.`Тус CMS нь Laravel 7.* хувилбар дээр хийгдсэн [Laravel 7 Үзэх](https://laravel.com/docs/7.x/).
CMS-ийн UI Болон Page гэх мэт зүйлс нь Modules Folder дотор байх ба [ServiceProvider](https://laravel.com/docs/7.x/providers) -аар дуудан ажиллуулж байгаа.

`2.` Мөн Project-оо ажиллуулсан бол Client-ийг нь шууд хамт хийгээд явах боломжтой юм.


## CMS ийн эх хувилбарыг Local орчинд ажиллуулах.
### 1.  Requirement
    1. PHP 7.4.19 Яг таарсан Эсвэл PHP 7-оос дээш хувилбар.

    2. Composer 2.2.9 Хамгийн багадаа. 

    3. Node 16.14.0 Xамгийн багадаа. 

    4  Npm 8.5.2 Хамгийн багадаа. 

    5. Mysql Or MariaDB 5.7.^

Татах холбоосууд.
<p align="center">
<a href="https://getcomposer.org/"><img src="https://getcomposer.org/img/logo-composer-transparent5.png" alt="Composer" width="50"></a>
<a href="https://www.php.net/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/711px-PHP-logo.svg.png?20180502235434" alt="PHP" width="80"></a>
<a href="https://nodejs.org/en/"><img src="https://nodejs.org/static/images/logo.svg" alt="PHP" width="80"></a>
<a href="https://www.mysql.com/"><img src="	https://seeklogo.com/images/M/MySQL-logo-F6FF285A58-seeklogo.com.png" alt="PHP" width="80"></a>
</p>

### 2.  Installation
    1. git clone https://github.com/Jakaar/WP.git 
<br/>

    2. cd WP

`3. cp .env.example .env`

`4. одоо Database ээ .env дээрээ тохируулана, wpanel.sql file ийг import хийнэ.`

`5. php artisan key:generate`

`6. php artisan migrate`

`7. php artisan db:seed`

`8. npm install`

`9. npm run dev`

`10. php artisan serve` [localhost:8000/cms](http://localhost:8000/cms) дээр асна. 

#### Username: `admin@admin.com `
#### Password: `admin123 `
