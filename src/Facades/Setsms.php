<?php
/**
 * Created by PhpStorm.
 * User: 编程插件库-www.phpstrom.com
 * Date: 2020/9/21
 * Time: 8:10
 */
namespace Duanxinbao\Setsms\Facades;

use Illuminate\Support\Facades\Facade;

class Setsms extends Facade{
    public static function getFacadeAccessor()
    {
        return 'Setsms';
    }
}
