<?php

return [

    'failed' => '提交的登录信息不正确.',
    'throttle' => ':seconds 秒钟后再试一次.',

    'form' => [
        'name' => '名称',
        'email' => '电子邮件',
        'password' => '密码',
        'password_confirmation' => '确认密码',
        'password_new' => '新密码',
    ],

    'sessions' => [
        'title' => '登录',
        'destroy' => '注销',
        'description' => 'github 请登录账户 '.config('app.name'). '您可以登录账户登录.',
        'login_with_github' => '登录github账户',
        'remember' => '记住登录',
        'remember_help' => '(请勿使用通用计算机!)',
        'send_login' => '登录',
        'ask_registration' => '如果不是会员的话? <a href=":url"> 请加入. </a>',
        'ask_forgot' => '<a href=":url"> 忘记密码吗? </a>',
        'caveat_for_social' => '登录github用户无需另外加入会员. 这些人没有密码.',
        'error_social_user' => '我不加入会员. 上次登录的是github.',
        'error_incorrect_credentials' => '邮件或密码不正确.',
        'error_not_confirmed' => '请确认一下.',
        'info_welcome' => ':name, 欢迎光临.',
        'info_bye' => '请再惠顾.',
    ],

    'users' => [
        'title' => '注册会员',
        'description' => '注册账户无需注册,用户无需注册.',
        'send_registration' => '订阅',
        'error_wrong_url' => 'url不正确.',
        'info_welcome' => ':name, 欢迎光临.',
        'info_confirmed' => ':name, 欢迎光临。 已确认加入。',
        'info_confirmation_sent' => '您已经加入了订阅的邮件账户. 请确认后登录.',
    ],

    'passwords' => [
        'title_reminder' => '更改密码请求',
        'desc_reminder' => '用邮箱申请注册后,请查看邮箱地址.',
        'send_reminder' => '更改密码句',
        'title_reset' => '更改密码句',
        'desc_reset' => '输入加入会员的邮箱,输入新密码.',
        'send_reset' => '更改密码句',
        'sent_reminder' => '发送了包含密码的邮件. 请确认一下邮箱.',
        'error_wrong_url' => 'url不正确.',
        'success_reset' => '更改密码. 登录新密码.'
    ],

];
