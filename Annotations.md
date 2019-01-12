## Use
1. Laravel Mix的使用
    * 运行所有 Mix 任务...
    ```
    npm run dev
    ```
    * 运行所有 Mix 任务并减少输出
    ```
    npm run production
    ```
    * 监控前端资源改变
    ```
    npm run watch
    ```
    * 文件处理----修改webpack.mix.js文件
        * 要将Less编译成CSS，使用less方法，例:编译app.less到public/css/app.css: 
        ```
        mix.less('resources/assets/less/app.less', 'public/css');
        ```
        * 多次调用less方法可编译多个文件:
        ```
        mix.less('resources/assets/less/app.less', 'public/css')
           .less('resources/assets/less/admin.less', 'public/css');
        ```
        * 编译sass文件:
        ```
        mix.sass('resources/assets/sass/app.scss', 'public/css');
        ```
        * 编译多个sass文件:
        ```
        mix.sass('resources/assets/sass/app.sass', 'public/css')
           .sass('resources/assets/sass/admin.sass', 'public/css/admin');
        ```
        * 将多个CSS文件合并成一个:
        ```
        mix.combine([
            'public/css/vendor/normalize.css',
            'public/css/vendor/videojs.css'
        ], 'public/css/all.css');
        ```
        * 处理js文件:
        ```
        mix.js('resources/assets/js/app.js', 'public/js');
        ```
        * 拷贝文件到目录
        ```
        mix.copy('node_modules/foo/bar.css', 'public/css/bar.css');
        ```
        * 缓存刷新
        ```
        mix.js('resources/assets/js/app.js', 'public/js')
           .version();
        ```
        * 生成版本文件后如果不知道文件名可使用全局的 mix 函数
        ```
         <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        ```
        * Mix 会自动显示操作系统通知,如果想禁用请使用以下方法
        ```
        mix.disableNotifications();
        ```
    * 更多使用方法请参考:    
    [Laravel Mix](http://laravelacademy.org/post/6798.html)
    
2. blade模板:    
    [Blade 模板](http://d.laravel-china.org/docs/5.4/blade)

3. 简单开发流程
    
    * 在routes/web.php 文件中定义好路由
    ```
    Route::get('/', 'StaticPagesController@home')->name('home');
    ```
    当用户访问'/'时， route 会将请求导至StaticPagesController的home方法中，并将该路由命名为'home'。
    
    * controller中的处理
    ```php
     return view('welcome', compact('user'))
    ```
    以上处理将返回一个view并将user对象传到视图中    
    
    [routes](http://d.laravel-china.org/docs/5.4/routing)
    
    
    
4. 常用文件夹:

```
 resources/views  blade模板存放处
 resources/assets/sass sass文件存放处
 resources/assets/js   js文件存放处
```
**以上就是前端开发需要的常用文件及流程如有问题随时补充。**
    