## 技术栈
```
Laravel Breeze # 生成登录认证套件，参考：https://laravel.com/docs/8.x/starter-kits
```
## Question
```
1.Problem 1
    - laravel/breeze[v1.20.0, ..., 1.x-dev] require illuminate/console ^10.0 -> found illuminate/console[v10.0.0, ..., 10.x-dev] but these were not loaded, likely because it conflicts with another require

遇到这种问题一般是安装的breeze版本过高，建议安装指定低版本，如：composer require laravel/breeze:1.9.2
```