# 短信宝发送短信
安装：
~~~
composer require duanxinbao/setsms:dev-master
~~~
# laravel使用方法
providers里添加
~~~
\Duanxinbao\SetsmsProvider::class
~~~
aliases里添加
~~~
'Setsms'=>\Duanxinbao\Facades\Setsms::class,
~~~
生成配置文件
~~~
php vendor:publish 
~~~
实现

~~~
引用 ：use Duanxinbao\Facades\Setsms;
Setsms::set('传入模板','传入接收者手机号')
~~~

返回数据
>返回 '0' 视为发送成功，其他内容为错误提示内容
>
|错误码|错误描述|
|--------|-----:|
|30|	错误密码|
|40|	账号不存在|
|41	|余额不足|
|43	|IP地址限制|
|50	|内容含有敏感词|
|51|	手机号码不正确|
