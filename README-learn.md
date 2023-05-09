## 技术栈
```
Laravel Breeze # 生成登录认证套件，参考：https://laravel.com/docs/8.x/starter-kits

具体步骤：
1.composer require laravel/breeze:1.9.2     # 安装breeze
2.php artisan breeze:install vue
3.php artisan migrate
4.npm install
5.npm run dev
6.php artisan server
7.http://127.0.0.1:8000/register # 注册
```

## Question
```
1.Problem 1
    - laravel/breeze[v1.20.0, ..., 1.x-dev] require illuminate/console ^10.0 -> found illuminate/console[v10.0.0, ..., 10.x-dev] but these were not loaded, likely because it conflicts with another require

遇到这种问题一般是安装的breeze版本过高，建议安装指定低版本，如：composer require laravel/breeze:1.9.2

2.Problem 2
Package inertiajs/inertia-laravel at version ^0.5.4 has a PHP requirement incompatible with your PHP version, PHP extensions and Composer version:
    - inertiajs/inertia-laravel v0.5.4 requires php ^7.2|~8.0.0|~8.1.0 which does not match your installed version 8.2.5.

遇到这种问题一般是依赖需要的php版本不支持，建议试下不同的依赖版本，版本查询网站见https://packagist.org/packages/tightenco/ziggy#v1.5.2
```