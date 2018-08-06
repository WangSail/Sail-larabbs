
# 项目概述

* 产品名称：LaraBBS
* 项目代号：larabbs

LaraBBS 是一个简洁的论坛应用，使用 Laravel5.5 编写而成。
![](https://dn-phphub.qbox.me/uploads/images/201711/01/1/xcr6ijTArV.png)

## 功能如下

- 用户认证 —— 注册、登录、退出；
- 个人中心 —— 用户个人中心，编辑资料；
- 用户授权 —— 作者才能删除自己的内容；
- 上传图片 —— 修改头像和编辑话题时候上传图片；
- 表单验证 —— 使用表单验证类；
- 文章发布时自动 Slug 翻译，支持使用队列方式以提高响应；
- 站点『活跃用户』计算，一小时计算一次；
- 多角色权限管理 —— 允许站长，管理员权限的存在；
- 后台管理 —— 后台数据模型管理；
- 邮件通知 —— 发送新回复邮件通知，队列发送邮件；
- 站内通知 —— 话题有新回复；
- 自定义 Artisan 命令行 —— 自定义活跃用户计算命令；
- 自定义 Trait —— 活跃用户的业务逻辑实现；
- 自定义中间件 —— 记录用户的最后登录时间；
- XSS 安全防御；

## 运行环境要求

- Nginx 1.8+
- PHP 7.1+
- Mysql 5.7+
- Redis 3.0+
- Memcached 1.4+

## License
- The Laravel framework is open-sourced software licensed under the MIT license.