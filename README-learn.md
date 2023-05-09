## 技术栈
```
一、Laravel Breeze # 生成登录认证套件，参考：https://laravel.com/docs/8.x/starter-kits

具体步骤：
1.composer require laravel/breeze:1.9.2     # 安装breeze
2.php artisan breeze:install vue
3.php artisan migrate
4.npm install
5.npm run dev
6.php artisan server
7.http://127.0.0.1:8000/register # 注册


二、如何修改UI?
1.修改resources/js/Pages下的vue文件即可，后执行npm run dev生效，而npm run watch可以监听修改。

三、Controller中__invoke()使用场景？
路由设置可以免写控制器方法，如 Route::get('/user', 'UserController');   # 默认调用__invoke()

四、Inertia 渲染页面默认路径
使用 Inertia 渲染页面时，视图文件的路径通常位于 resources/js/Pages 目录下。

五、加一个middleware
app/http/kernel.php的$routeMiddleware数组下加：'webapi' => \App\Http\Middleware\WebApi::class,

六、middle的handle函数
middleware 中注册的中间件是一个对象，其中包含一个 handle 方法，该方法在请求到达中间件时调用。

七、laravel用dump打印
dd('hah'); # 截断打印
dd(env('APP_SCHEME')); # 打印env参数
in_array(A,arr2,true); # 如果A在arr2里面，返回true

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