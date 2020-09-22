<?php
/**
 * Created by PhpStorm.
 * User: 编程插件库-www.phpstrom.com
 * Date: 2020/9/21
 * Time: 8:06
 */
namespace Duanxinbao;
use Illuminate\Config\Repository;

class Setsms{
    private $config;
    public function __construct(Repository $config)
    {
        $this->config=$config;
    }
    public function set($id){
        dd($this->config->get('sms'));
    }
}
