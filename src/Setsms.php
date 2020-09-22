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
    private $config_sms;
    public function __construct(Repository $config)
    {
        $this->config=$config;
    }
    public function set($id){
        if ($this->config->get('sms')){
            $this->config_sms=$this->config->get('sms');
        }else{
            $this->config_sms=[
                'username'=>'phpstrom',
                'password'=>'tny123',
                'mb'=>[
                    '1',
                    '2'
                ]
            ];
        }
        dd($this->config_sms);
    }
}
