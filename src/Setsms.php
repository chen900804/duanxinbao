<?php
/**
 * Created by PhpStorm.
 * User: 编程插件库-www.phpstrom.com
 * Date: 2020/9/21
 * Time: 8:06
 */
namespace Duanxinbao;

use Illuminate\Config\Repository;
use GuzzleHttp\Client;

class Setsms{
    private $config;
    public function __construct(Repository $config)
    {
        $this->config=$config;
    }
    public function set($mb,$phone){
        if (!$this->config->get('sms')){
            return "请先配置";
        }
        $http = new Client();
        $date = $http->get('https://api.smsbao.com/sms?u='.$this->config->get('sms')['username'].'&p='.md5($this->config->get('sms')['password']).'&m='.$phone.'&c='.urlencode($mb));
        return $date->getBody()->getContents();
    }
}
