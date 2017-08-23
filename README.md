### 安装注意事项
### wordpress设置中固定链接设置方法
提前准备事项：
#### 在wordpress网站安装目录中建立文件.htacess，并将其设为可写
> chmod 777 .htaccess
#### 修改apache2的配置文件
/etc/apache2/apach2.conf修改，添加一段
<Directory /var/www/html/wordpress/>
        AllowOverride All
</Directory>
#### 启动apache2 mod_rewrite模块
> sudo a2enmod rewrite 

#### 重启apache2服务
> service apache2 restart 

此时即可按照您自己的想法随意修改博客文章的链接形式了。