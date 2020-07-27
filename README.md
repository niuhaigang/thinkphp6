个人网站
===============
> 采用ThinkPHP 6.0 框架

> 运行环境要求PHP7.1+。

## 本地安装框架

~~~
composer create-project topthink/think tp 6.0.*
~~~

如果需要更新框架使用
~~~
composer update topthink/framework
~~~
本地运行
~~~
php think run
~~~

## 文档

[完全开发手册](https://www.kancloud.cn/manual/thinkphp6_0/content)


## 部署生产环境
- pull到服务器目录
- 配制nginx
- 配制php环境要求7.1+
- 修改环境变量.env
- /public 修改.htaccess防止访问不到静态文件
- 在部署代码到生产环境的时候，别忘了优化一下自动加载：composer dump-autoload --optimize
  安装包的时候可以同样使用--optimize-autoloader。不加这一选项，你可能会发现20%到25%的性能损失。