<?php

return [

    'articles' => [
        'created' => sprintf('[%s] %s', config('app.name'), '注册新论坛.: :title'),
    ],

    'auth' => [
        'confirm' => sprintf('[%s] %s', config('app.name'), '请确认会员加入.'),
    ],

    'comments' => [
        'created' => sprintf('[%s] %s', config('app.name'), '注册新的留言.'),
    ],

    'passwords' => [
        'reset' => sprintf('[%s] %s', config('app.name'), '重置密码.'),
    ],

];

