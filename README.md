laravel: PHP Framework
composer: Quanly Package (giong npm)

-   composer.json: chứa các dependencies, các gói cài đặt

Mỗi ứng dụng có 1 key --> mã hóa mật khẩu app
vendor: chứa toàn bộ code các thư viện
artisan: Công cụ run php (giống react-scripts,babel)

-   Quan ly DB: Navicat,mysql workbench (windows), emma,datagrip(linux)
    .env: chứa các cấu hình của web --. đọc 1 lần rồi cache lại
    Khi sửa file .env => clear config => cache lại
    Migration: file php => thao tác cơ sở dữ liệu (CRUD) (folder database/migration):

               + namespace use "..." phân biệt các class với nhau
               + up() => run khi thao tác vs csdl
               + down() => HỦy bỏ thao tác csdl
               + Set up tự động deploy, nâng cáp phiên bản database, đảm bảo tính bảo mật
               + php artisan migrate => up() start run => thao tác
               + php artisan migrate:rollback => down() start run => hủy bỏ

           Model:

               + php artisan make:model Models/NameModel -m (kết hợp create migration)
               + Liên kết Model với Migration thông qua eloquent model
               + ORM(Object related mapping): Tạo ra mối liên hệ dữ liệu từ code(models)  xuống db(migrations)
               + fillable: chỉ định các field sẽ được lưu xuống database

           Controller: (app/Http/Controller)

               + Overwrite lại các hàm ngắn của thư viện use
               + Validate Email,username,password,...
               + php artisan make:controller ArticleController : tạo controller mới , tự động routing
               + Lưu dữ liệu xuống db (.save()), lấy data từ db lên.
               + Resource controller -> tạo các hàm có sẵn để sử dụng ở nhiều nơi (Multiple function)
               + php artisan make:controller ArticleController --resource : tạo resource controller

           View: (resource/views)

               + ui vue, ui react, ui bootstrap
               + use balde template
               + @extend, @section, html-css-js
               + Views: NameView.balde.php

           Route: (/routes)

               + Xử lý định tuyến đến các link #
               + ArticleController --> thao tác với bài viết
               + Use static method ::
               + Route:: method('url', 'Namecontroller@methodController')-->name('NameView')
               + Route::resource,Auth.routes,Artisan,BroadCast,Api
            Collection: giống mảng
            Blade: template engine
                compact($articles) or ->with('articles',$articles): Tạo ra mảng các phần tử xuất sang view

            $request => là một object => Lưu tất cả các dữ liệu từ client gửi lên . Dùng cho việc lưu data từ view xuống db (all(): lấy toàn bộ event data, method(): chỉ lấy name của element view).Giống với fetch() and axios trong JS.
            Request: có thêm  các tính năng (authorize,validation) php artisan make:request name_request
            Seeder : Là công cụ tạo dữ liệu mẫu - php artisan make:seeder ArticleTableSeeder
            php artisan db:seed => lệnh run db seeder
            composer dump-autoload: Tạo tài khoản admin,role user , settings, tạo các seeder
            Faker library: Tự động tạo dữ liệu để test cho backend
            Laravel mix: Dựng frontend => build , complied css,js-> public

           Auth: role- admin,user -> Tạo model role (seeder test data) -> migration -> tạo relationship vs user => tạo controller admin,user => sử dụng Middleware
           Middleware: + Là 1 hàng rào trung gian bảo vệ các thành phần nhỏ của ứng dụng
           + Tạo middleware -> đăng ký middleware tại file Kenel.php(file chứa tất cả middleware)

    Cong cu khac: git, docker,redis,...
    Ứng dụng blog bao gồm:

-   Đăng nhập, đăng ký tk --> login bằng mạng xã hội (web API) => authenticate ui (public,resources)

-   Đăng bài
-   Đọc bài viết

Công cụ:

-   MVC:

        + Model: Mô tả các thực thể trong thực tế
        + View: Hiện thị giao diện
        + COntroller: Xử lý , kết nối Model-View, load các model hiện thị lên view, tương tác vs nhau

-   Eloquent model:

    -

-   Route, Blade template
-   Auth, Middleware
-   Migration, Seeder
-   Cache, cookie, session
-   Artisan,PHPUnTest, Security, Clean code, Performance
-   Schedule --> Tự động đăng bài (hẹn giờ đăng bài)

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
#   b l o g  
 