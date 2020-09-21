<?php
/**
 * Created by PhpStorm.
 * User: 编程插件库-www.phpstrom.com
 * Date: 2020/9/21
 * Time: 8:11
 */
namespace Duanxinbao\Setsms;
use Illuminate\Support\ServiceProvider;

class SetsmsProvider extends ServiceProvider{
    public function boot(){
        // 发布配置文件
        $this->publishes([
            __DIR__.'/config/sms.php' => config_path('sms.php'),
        ]);
    }
    public function register()
    {
        $this->app->singleton('Setsms',function ($app){
            return new Setsms($app['config']);
        });
    }
}
